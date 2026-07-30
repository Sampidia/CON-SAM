#!/bin/bash
# ==============================================================================
# Sngine Database Import Script
# Creates the MySQL database, user, and imports the 472MB SQL dump
# ==============================================================================

set -e

DB_NAME=${1:-"sngine_db"}
DB_USER=${2:-"sngine_user"}
DB_PASS=${3:-"StrongPassword123!"}
SQL_FILE=${4:-"/home/afigo/Documents/My-App/connect sampidia/u0526974_connect.sql"}

echo "🗄️ Initializing MySQL Database Setup..."
echo "Database Name: $DB_NAME"
echo "Database User: $DB_USER"

# Create Database and User
sudo mysql -e "CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
sudo mysql -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';"
sudo mysql -e "GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'localhost';"
sudo mysql -e "FLUSH PRIVILEGES;"

echo "✅ Database and user created successfully."

if [ -f "$SQL_FILE" ]; then
    echo "📥 Importing $SQL_FILE into $DB_NAME (this may take a couple of minutes)..."
    sudo mysql "$DB_NAME" < "$SQL_FILE"
    echo "🎉 Database import completed successfully!"
else
    echo "⚠️ SQL file not found at $SQL_FILE. Please provide the path to your .sql file."
fi
