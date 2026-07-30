#!/bin/bash
# ==============================================================================
# Sngine PHP Social Network - Oracle Cloud Ubuntu Server Setup Script
# Run this on a fresh Ubuntu 22.04 / 24.04 LTS instance as root or with sudo
# ==============================================================================

set -e

echo "🚀 Starting Server Environment Setup for Sngine..."

# 1. System Updates & Prerequisites
echo "📦 Updating system packages..."
sudo apt-get update -y && sudo apt-get upgrade -y
sudo apt-get install -y curl wget git unzip zip software-properties-common ufw iptables-persistent

# 2. Open Ubuntu Firewall Ports (Internal OS Firewall)
echo "🔒 Configuring UFW Firewall..."
sudo ufw allow 22/tcp
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw --force enable

# Oracle Cloud Ubuntu images also use iptables rules by default. Allow HTTP/HTTPS traffic:
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 443 -j ACCEPT
sudo netfilter-persistent save

# 3. Install Apache & Enable Rewrite Module
echo "🌐 Installing Apache Web Server..."
sudo apt-get install -y apache2
sudo a2enmod rewrite
sudo a2enmod headers
sudo a2enmod ssl

# 4. Install PHP 8.3 & Required Extensions
echo "🐘 Installing PHP 8.3 & Extensions..."
sudo apt-get install -y php8.3 libapache2-mod-php8.3 php8.3-mysql php8.3-curl \
    php8.3-gd php8.3-mbstring php8.3-xml php8.3-zip php8.3-intl php8.3-bcmath \
    php8.3-gmp php8.3-imagick

# 5. Tune php.ini for Sngine Requirements
echo "⚙️ Configuring PHP settings..."
PHP_INI="/etc/php/8.3/apache2/php.ini"

sudo sed -i 's/upload_max_filesize = .*/upload_max_filesize = 150M/' $PHP_INI
sudo sed -i 's/post_max_size = .*/post_max_size = 150M/' $PHP_INI
sudo sed -i 's/memory_limit = .*/memory_limit = 512M/' $PHP_INI
sudo sed -i 's/max_execution_time = .*/max_execution_time = 300/' $PHP_INI
sudo sed -i 's/max_input_time = .*/max_input_time = 300/' $PHP_INI
sudo sed -i 's/max_input_vars = .*/max_input_vars = 5000/' $PHP_INI
sudo sed -i 's/display_errors = .*/display_errors = Off/' $PHP_INI

# 6. Install MySQL Server
echo "🗄️ Installing MySQL Server..."
sudo apt-get install -y mysql-server

# 7. Configure Apache Virtual Host AllowOverride All (Crucial for .htaccess)
echo "🔧 Configuring Apache VirtualHost..."
sudo tee /etc/apache2/sites-available/sngine.conf > /dev/null <<'EOF'
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/connect.sampidia.com

    <Directory /var/www/html/connect.sampidia.com>
        Options -Indexes +FollowSymLinks +MultiViews
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/sngine_error.log
    CustomLog ${APACHE_LOG_DIR}/sngine_access.log combined
</VirtualHost>
EOF

sudo a2dissite 000-default.conf
sudo a2ensite sngine.conf
sudo systemctl restart apache2
sudo systemctl restart mysql

# 8. Install Certbot (SSL)
echo "🔒 Installing Certbot for Free Let's Encrypt SSL..."
sudo apt-get install -y certbot python3-certbot-apache

echo ""
echo "✅ Server setup complete!"
echo "Next step: Run deploy/import-db.sh to configure the database."
