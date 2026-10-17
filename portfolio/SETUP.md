# PANDUAN LENGKAP INSTALASI & SETUP

## 🚀 Quick Start (Untuk Windows PowerShell)

```powershell
# 1. Navigasi ke folder project
cd e:\belajar\portofolio\portfolio

# 2. Install dependencies (jika belum)
composer install

# 3. Generate APP key
php artisan key:generate

# 4. Buat database SQLite
New-Item -Path "database\database.sqlite" -ItemType File

# 5. Run migrations
php artisan migrate

# 6. Jalankan development server
php artisan serve

# Buka browser: http://localhost:8000
```

---

## 📝 SETUP AUTHENTICATION (PENTING untuk Admin Panel)

### Option 1: Laravel Breeze (Recommended)

```powershell
# Install Breeze
composer require laravel/breeze --dev

# Publish components
php artisan breeze:install blade

# Install npm dependencies (jika perlu)
npm install

# Build assets
npm run dev

# Run migrations
php artisan migrate

# Jalankan server
php artisan serve
```

### Option 2: Laravel UI

```powershell
# Install UI
composer require laravel/ui

# Generate auth scaffolding
php artisan ui bootstrap --auth

# Install dan build
npm install
npm run dev

# Run migrations
php artisan migrate

# Jalankan server
php artisan serve
```

---

## 🗄️ DATABASE SETUP

### SQLite (Default - Recommended untuk Development)

**File `.env`:**
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

**Membuat database:**
```powershell
# Di folder project
New-Item -Path "database\database.sqlite" -ItemType File
```

### MySQL

**Persiapan:**
1. Install MySQL Server
2. Buka MySQL Command Line atau MySQL Workbench
3. Buat database:
```sql
CREATE DATABASE portfolio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

**File `.env`:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

**Run migrations:**
```powershell
php artisan migrate
```

---

## 📸 FILE STORAGE SETUP

### Membuat Symlink (Penting untuk mengakses gambar yang di-upload)

```powershell
# Di folder project
php artisan storage:link
```

Ini akan membuat folder `public/storage` yang link ke `storage/app/public/`

---

## ✍️ SAMPLE DATA (OPTIONAL)

### Tambah data langsung dengan Artisan Tinker:

```powershell
php artisan tinker
```

Kemudian di dalam tinker shell:

```php
// Tambah Project
App\Models\Project::create([
    'title' => 'E-Commerce Platform',
    'description' => 'Platform e-commerce dengan fitur lengkap',
    'technology_stack' => 'Laravel, Vue.js, MySQL, Tailwind',
    'url' => 'https://example.com',
    'order' => 1
]);

// Tambah Skill
App\Models\Skill::create([
    'name' => 'Laravel',
    'category' => 'Backend',
    'proficiency' => 90,
    'icon' => 'fab fa-laravel',
    'order' => 1
]);

App\Models\Skill::create([
    'name' => 'Vue.js',
    'category' => 'Frontend',
    'proficiency' => 85,
    'icon' => 'fab fa-vuejs',
    'order' => 1
]);

// Tambah Experience
App\Models\Experience::create([
    'company' => 'Tech Company',
    'position' => 'Senior Developer',
    'start_date' => '2020-01-15',
    'is_current' => true,
    'location' => 'Jakarta, Indonesia',
    'order' => 1
]);

// Tambah About Content
App\Models\AboutContent::create([
    'key' => 'bio',
    'content' => 'Saya adalah developer berpengalaman dengan passion di bidang web development.'
]);

exit
```

---

## 🔐 AKSES ADMIN PANEL

1. **Register user baru:**
   - Buka `http://localhost:8000/register`
   - Isi form dan submit

2. **Login:**
   - Buka `http://localhost:8000/login`
   - Masukkan credentials

3. **Akses Admin:**
   - Buka `http://localhost:8000/admin/projects`
   - Mulai mengelola portfolio Anda

---

## 🎨 KUSTOMISASI CONTENT

### Homepage
Edit file: `resources/views/index.blade.php`
- Change hero title
- Modify sections
- Update colors

### About Page
Edit file: `resources/views/about.blade.php`
- Update about content via database atau hardcode
- Modify layout

### Contact Page
Edit file: `resources/views/contact.blade.php`
- Update contact information
- Add email action handler
- Link ke social media

### Layout/Navigation
Edit file: `resources/views/layout.blade.php`
- Change logo
- Modify navigation items
- Update social links
- Customize colors

---

## 🎨 MENGUBAH WARNA THEME

Semua file menggunakan Tailwind CSS classes. Ubah:
- `blue-600` → warna lain (red-600, green-600, purple-600, etc)
- `blue-700` → untuk hover states
- `gray-100` → untuk backgrounds
- `gray-900` → untuk dark backgrounds

Example di `layout.blade.php`:
```blade
<!-- Ubah dari -->
<a href="#" class="text-2xl text-blue-600 hover:text-blue-700">

<!-- Menjadi -->
<a href="#" class="text-2xl text-purple-600 hover:text-purple-700">
```

---

## 🚀 TESTING LOCALLY

### Development Server
```powershell
php artisan serve
```
Buka: `http://localhost:8000`

### Dengan Custom Port
```powershell
php artisan serve --port=8080
```
Buka: `http://localhost:8080`

---

## 🐛 COMMON ISSUES & SOLUTIONS

### ❌ Error: SQLSTATE[HY000]: General error
**Masalah**: SQLite tidak aktif
**Solusi**: 
1. Buka file `php.ini`
2. Cari dan uncomment: `extension=pdo_sqlite`
3. Restart Laravel server

### ❌ Error: No application encryption key
**Solusi**:
```powershell
php artisan key:generate
```

### ❌ Gambar tidak muncul
**Solusi**:
```powershell
php artisan storage:link
```

### ❌ Migrations error
**Solusi**:
```powershell
# Reset database
php artisan migrate:fresh

# Atau rollback
php artisan migrate:rollback
```

### ❌ Permission denied storage
**Windows (tidak perlu, skip)**
**Linux/Mac**:
```bash
chmod -R 755 storage bootstrap/cache
```

---

## 📦 USEFUL ARTISAN COMMANDS

```powershell
# Database
php artisan migrate              # Run all migrations
php artisan migrate:fresh        # Fresh migration (reset)
php artisan migrate:rollback     # Undo last batch

# Cache
php artisan cache:clear         # Clear cache
php artisan config:cache        # Cache config
php artisan route:cache         # Cache routes

# Generate
php artisan make:model Model     # Create model
php artisan make:controller Ctrl # Create controller
php artisan make:migration       # Create migration

# Development
php artisan tinker              # Interactive shell
php artisan serve               # Start dev server
```

---

## ✅ CHECKLIST SEBELUM GO PRODUCTION

- [ ] Database properly configured
- [ ] Authentication system working
- [ ] All migrations successful
- [ ] Storage link created
- [ ] Uploads folder writable
- [ ] Test upload image
- [ ] Test create/edit/delete projects
- [ ] Test admin authentication
- [ ] Cache cleared
- [ ] .env APP_DEBUG = false
- [ ] .env APP_ENV = production

---

## 📞 QUICK HELP

**Port 8000 sudah digunakan?**
```powershell
php artisan serve --port=8001
```

**Lihat migration yang berjalan:**
```powershell
php artisan migrate:status
```

**Reset semua migrations:**
```powershell
php artisan migrate:fresh --seed
```

**Lihat routes:**
```powershell
php artisan route:list
```

---

## 🎉 SELAMAT!

Website portfolio Anda siap digunakan. Mulai tambahkan projects, skills, dan experiences dari admin panel!

Untuk dokumentasi lebih lengkap, lihat **README.md** di root folder.
