#!/bin/bash

# Portfolio Website Laravel - Quick Setup Script for Linux/Mac
# Run: bash setup.sh

echo ""
echo "==================================="
echo "Portfolio Website Laravel - Setup"
echo "==================================="
echo ""

# Check if in correct directory
if [ ! -f "composer.json" ]; then
    echo "Error: composer.json not found. Please run from project root directory."
    exit 1
fi

# Check PHP
if ! command -v php &> /dev/null; then
    echo "Error: PHP not found. Please install PHP 8.1+"
    exit 1
fi

# Check Composer
if ! command -v composer &> /dev/null; then
    echo "Error: Composer not found. Please install Composer."
    exit 1
fi

echo "[1/7] Checking PHP and Composer..."
php -v
composer --version

echo "[2/7] Installing dependencies..."
composer install

echo "[3/7] Creating .env file..."
if [ ! -f ".env" ]; then
    cp .env.example .env
    echo ".env created"
else
    echo ".env already exists"
fi

echo "[4/7] Generating application key..."
php artisan key:generate

echo "[5/7] Creating SQLite database..."
if [ ! -f "database/database.sqlite" ]; then
    touch database/database.sqlite
    echo "Database file created"
fi

echo "[6/7] Running migrations..."
php artisan migrate

echo "[7/7] Seeding database with sample data..."
php artisan db:seed

echo ""
echo "==================================="
echo "Setup Complete!"
echo "==================================="
echo ""
echo "Next steps:"
echo "1. Run: php artisan serve"
echo "2. Open: http://localhost:8000"
echo ""
echo "Default Credentials:"
echo "Email: admin@example.com"
echo "Password: password"
echo ""
echo "Admin Panel: http://localhost:8000/admin/projects"
echo ""
