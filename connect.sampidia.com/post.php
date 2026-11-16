<?php

/**
 * post
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// user access
if (!$system['system_public']) {
  user_access();
}

// valid inputs
if (!isset($_GET['post_id']) || !is_numeric($_GET['post_id'])) {
  _error(404);
}

try {

  // get post
  define('PRIVACY_ERRORS', true);
  $post = $user->get_post($_GET['post_id']);
  if (!$post) {
    _error(404);
  }

  // Canonicalize blog article posts: permanent redirect from /posts/ID to /blogs/ID/slug
  if ($post['post_type'] == 'article' && !empty($post['blog']['title_url'])) {
    redirect('/blogs/' . $post['post_id'] . '/' . $post['blog']['title_url']);
  }
  /* assign variables */
  $smarty->assign('post', $post);

  // get ads campaigns
  $ads_campaigns = $user->ads_campaigns();
  /* assign variables */
  $smarty->assign('ads_campaigns', $ads_campaigns);

  // get ads
  $ads = $user->ads('post');
  $ads_footer = $user->ads('post_footer');
  /* assign variables */
  $smarty->assign('ads', $ads);
  $smarty->assign('ads_footer', $ads_footer);

  // get widgets
  $widgets = $user->widgets('post');
  /* assign variables */
  $smarty->assign('widgets', $widgets);
} catch (PrivacyException $e) {
  _error('PERMISSION');
} catch (Throwable $e) {
  _error(__("Error"), $e->getMessage());
}

// page header
$meta_robots = 'index, follow';
if ($post['post_type'] != 'article') {
  $plain_text = trim(strip_tags($post['text_plain'] ?? ''));
  if (mb_strlen($plain_text) < 80 && empty($post['photos']) && empty($post['media']) && empty($post['link']) && empty($post['product'])) {
    $meta_robots = 'noindex, follow';
  }
}
$canonical_url = $system['system_url'] . '/posts/' . $post['post_id'];
page_header($post['og_title'] ?? '', $post['og_description'] ?? '', $post['og_image'] ?? '', $meta_robots, $canonical_url);

// page footer
page_footer('post');
