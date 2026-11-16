<?php

/**
 * sitemap.php
 * Dynamic XML Sitemap Generator for Connect.Sampidia.com
 * Automatically indexes high-value public content (Blogs, Pages, Groups, Movies)
 * and keeps cache updated for fast Googlebot crawling.
 */

// fetch bootloader
require('bootloader.php');

header('Content-Type: application/xml; charset=utf-8');

$cache_file = __DIR__ . '/sitemap.xml';
$cache_lifetime = 12 * 3600; // 12 hours

// If cache is fresh and not forced refresh, serve cache
if (!isset($_GET['refresh']) && file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_lifetime && filesize($cache_file) > 500) {
  readfile($cache_file);
  exit;
}

$base_url = !empty($system['system_url']) ? rtrim($system['system_url'], '/') : 'https://connect.sampidia.com';

$xml = [];
$xml[] = '<?xml version="1.0" encoding="UTF-8"?>';
$xml[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"';
$xml[] = '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
$xml[] = '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

// Core Public Pages
$core_pages = [
  ''            => ['priority' => '1.0', 'changefreq' => 'daily'],
  '/blogs'      => ['priority' => '0.9', 'changefreq' => 'daily'],
  '/market'     => ['priority' => '0.8', 'changefreq' => 'daily'],
  '/jobs'       => ['priority' => '0.8', 'changefreq' => 'daily'],
  '/funding'    => ['priority' => '0.7', 'changefreq' => 'daily'],
  '/courses'    => ['priority' => '0.7', 'changefreq' => 'daily'],
  '/events'     => ['priority' => '0.7', 'changefreq' => 'daily'],
  '/forums'     => ['priority' => '0.7', 'changefreq' => 'daily'],
  '/offers'     => ['priority' => '0.7', 'changefreq' => 'daily'],
  '/directory'  => ['priority' => '0.6', 'changefreq' => 'weekly'],
  '/games'      => ['priority' => '0.6', 'changefreq' => 'weekly'],
  '/movies'     => ['priority' => '0.6', 'changefreq' => 'weekly'],
  '/developers' => ['priority' => '0.5', 'changefreq' => 'monthly'],
];

$today = date('Y-m-d');

foreach ($core_pages as $path => $meta) {
  $xml[] = '  <url>';
  $xml[] = '    <loc>' . htmlspecialchars($base_url . $path, ENT_XML1, 'UTF-8') . '</loc>';
  $xml[] = '    <lastmod>' . $today . '</lastmod>';
  $xml[] = '    <changefreq>' . $meta['changefreq'] . '</changefreq>';
  $xml[] = '    <priority>' . $meta['priority'] . '</priority>';
  $xml[] = '  </url>';
}

// 1. Public Blog Articles (High Priority)
if ($system['blogs_enabled']) {
  $blogs_query = $db->query("SELECT posts.post_id, posts.time, posts_articles.title 
                             FROM posts 
                             INNER JOIN posts_articles ON posts.post_id = posts_articles.post_id 
                             WHERE posts.post_type = 'article' 
                               AND posts.privacy = 'public' 
                               AND (posts.pre_approved = '1' OR posts.has_approved = '1') 
                             ORDER BY posts.post_id DESC LIMIT 5000");
  if ($blogs_query && $blogs_query->num_rows > 0) {
    while ($blog = $blogs_query->fetch_assoc()) {
      $slug = get_url_text($blog['title']);
      $loc = $base_url . '/blogs/' . $blog['post_id'] . '/' . $slug;
      $lastmod = !empty($blog['time']) ? date('Y-m-d', strtotime($blog['time'])) : $today;
      $xml[] = '  <url>';
      $xml[] = '    <loc>' . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>';
      $xml[] = '    <lastmod>' . $lastmod . '</lastmod>';
      $xml[] = '    <changefreq>weekly</changefreq>';
      $xml[] = '    <priority>0.8</priority>';
      $xml[] = '  </url>';
    }
  }
}

// 2. Public Pages
if ($system['pages_enabled']) {
  $pages_query = $db->query("SELECT page_name FROM pages ORDER BY page_id DESC LIMIT 1000");
  if ($pages_query && $pages_query->num_rows > 0) {
    while ($p = $pages_query->fetch_assoc()) {
      $loc = $base_url . '/pages/' . $p['page_name'];
      $xml[] = '  <url>';
      $xml[] = '    <loc>' . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>';
      $xml[] = '    <changefreq>weekly</changefreq>';
      $xml[] = '    <priority>0.6</priority>';
      $xml[] = '  </url>';
    }
  }
}

// 3. Public Groups
if ($system['groups_enabled']) {
  $groups_query = $db->query("SELECT group_name FROM `groups` WHERE group_privacy = 'public' ORDER BY group_id DESC LIMIT 1000");
  if ($groups_query && $groups_query->num_rows > 0) {
    while ($g = $groups_query->fetch_assoc()) {
      $loc = $base_url . '/groups/' . $g['group_name'];
      $xml[] = '  <url>';
      $xml[] = '    <loc>' . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>';
      $xml[] = '    <changefreq>weekly</changefreq>';
      $xml[] = '    <priority>0.6</priority>';
      $xml[] = '  </url>';
    }
  }
}

// 4. Public Movies
if ($system['movies_enabled']) {
  $movies_query = $db->query("SELECT movie_id, title, release_year FROM movies ORDER BY movie_id DESC LIMIT 1000");
  if ($movies_query && $movies_query->num_rows > 0) {
    while ($m = $movies_query->fetch_assoc()) {
      $slug = get_url_text($m['title']);
      $loc = $base_url . '/movie/' . $m['movie_id'] . '/' . $slug;
      $xml[] = '  <url>';
      $xml[] = '    <loc>' . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>';
      $xml[] = '    <changefreq>monthly</changefreq>';
      $xml[] = '    <priority>0.5</priority>';
      $xml[] = '  </url>';
    }
  }
}

$xml[] = '</urlset>';
$content = implode("\n", $xml);

// Cache to disk
@file_put_contents($cache_file, $content);

echo $content;
exit;

