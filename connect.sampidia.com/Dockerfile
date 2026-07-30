# ==============================================================================
# Sngine PHP Social Network Dockerfile for Koyeb / Render
# Base Image: PHP 8.3 with Apache
# ==============================================================================

FROM php:8.3-apache

# Install System Dependencies and Libraries for PHP Extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libgmp-dev \
    libxml2-dev \
    libonig-dev \
    curl \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Configure & Install PHP Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        mysqli \
        gd \
        mbstring \
        zip \
        intl \
        gmp \
        bcmath \
        xml \
        opcache \
        exif

# Enable Apache Rewrite and Headers Modules (.htaccess compatibility)
RUN a2enmod rewrite headers

# Copy Sngine Application Code into Document Root
COPY . /var/www/html/

# Configure Apache DocumentRoot and Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/content

# Custom PHP settings for file uploads and execution timeouts
RUN echo "upload_max_filesize = 150M" > /usr/local/etc/php/conf.d/sngine.ini \
    && echo "post_max_size = 150M" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "max_input_vars = 5000" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "display_errors = Off" >> /usr/local/etc/php/conf.d/sngine.ini

# Expose Port 80 for Web Traffic
EXPOSE 80

CMD ["apache2-foreground"]
