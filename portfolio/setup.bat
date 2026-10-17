@echo off
REM Portfolio Website Laravel - Quick Setup Script for Windows
REM Run this script from the project directory

echo.
echo ===================================
echo Portfolio Website Laravel - Setup
echo ===================================
echo.

REM Check if in correct directory
if not exist "composer.json" (
    echo Error: composer.json not found. Please run from project root directory.
    exit /b 1
)

echo [1/7] Checking PHP and Composer...
php -v > nul 2>&1
if errorlevel 1 (
    echo Error: PHP not found. Please install PHP 8.1+ and add to PATH.
    exit /b 1
)
composer --version > nul 2>&1
if errorlevel 1 (
    echo Error: Composer not found. Please install Composer.
    exit /b 1
)

echo [2/7] Installing dependencies...
call composer install

echo [3/7] Creating .env file...
if not exist ".env" (
    copy ".env.example" ".env"
    echo .env created
) else (
    echo .env already exists
)

echo [4/7] Generating application key...
call php artisan key:generate

echo [5/7] Creating SQLite database...
if not exist "database\database.sqlite" (
    type nul > "database\database.sqlite"
    echo Database file created
)

echo [6/7] Running migrations...
call php artisan migrate

echo [7/7] Seeding database with sample data...
call php artisan db:seed

echo.
echo ===================================
echo Setup Complete!
echo ===================================
echo.
echo Next steps:
echo 1. Run: php artisan serve
echo 2. Open: http://localhost:8000
echo.
echo Default Credentials:
echo Email: admin@example.com
echo Password: password
echo.
echo Admin Panel: http://localhost:8000/admin/projects
echo.
pause
