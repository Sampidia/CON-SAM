# ==============================================================================
# Sngine PHP Social Network Dockerfile for Render
# ==============================================================================

FROM php:8.3-apache

# Copy Composer binary from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install System Dependencies
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
    nodejs \
    npm \
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

# Enable Apache Modules
RUN a2enmod rewrite headers

# Copy Apache site config (AllowOverride All - required for .htaccess to work)
COPY sngine.conf /etc/apache2/sites-available/000-default.conf

# Set Working Directory
WORKDIR /var/www/html

# Copy Sngine Application Code
COPY . /var/www/html/

# Install PHP Dependencies via Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Install Frontend Dependencies via npm
RUN npm install

# Create Smarty compiled template dirs & set write permissions
RUN mkdir -p /var/www/html/content/themes/default/templates_compiled \
    && mkdir -p /var/www/html/content/uploads \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/content

# Custom PHP settings
RUN echo "upload_max_filesize = 150M" > /usr/local/etc/php/conf.d/sngine.ini \
    && echo "post_max_size = 150M" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "max_input_vars = 5000" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "display_errors = On" >> /usr/local/etc/php/conf.d/sngine.ini \
    && echo "allow_url_fopen = On" >> /usr/local/etc/php/conf.d/sngine.ini

# Copy and set up the entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
