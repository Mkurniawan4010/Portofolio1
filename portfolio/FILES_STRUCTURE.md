# 📁 PENJELASAN FILE & FOLDER PENTING

## 🎯 File Dokumentasi

### README.md
**Lokasi**: Root folder
**Isi**: 
- Overview project
- Fitur utama
- Teknologi yang digunakan
- Instalasi step by step
- Routes documentation
- Database schema
- Troubleshooting

### SETUP.md
**Lokasi**: Root folder
**Isi**:
- Quick start commands
- Database setup (SQLite/MySQL)
- Authentication setup
- Storage configuration
- Sample data insertion
- Common issues & solutions

### FEATURES.md
**Lokasi**: Root folder
**Isi**:
- Daftar fitur lengkap
- Halaman publik & admin
- Database schema detail
- Workflows
- Deployment checklist

### SUMMARY.md
**Lokasi**: Root folder
**Isi**:
- Project overview
- File struktur lengkap
- Quick start
- Customization guide
- Next steps

---

## 🔧 Setup Scripts

### setup.bat
**Untuk**: Windows
**Fungsi**: Automated setup
```bash
# Run dari project root
setup.bat
```
**Apa yang dilakukan:**
1. Check PHP & Composer
2. Install dependencies
3. Copy .env
4. Generate key
5. Create database
6. Run migrations
7. Seed data

### setup.sh
**Untuk**: Linux/Mac
**Fungsi**: Automated setup
```bash
# Run dari project root
bash setup.sh
```
**Apa yang dilakukan**: Sama dengan setup.bat

---

## 📂 Folder Struktur

### `app/Http/Controllers/`
**File**: HomeController.php
- `index()` - Homepage dengan skills & projects
- `about()` - About page
- `portfolio()` - Portfolio listing dengan pagination
- `project()` - Project detail
- `contact()` - Contact page

**Folder**: `Admin/`
- `ProjectController.php` - Project CRUD
- `SkillController.php` - Skill CRUD
- `ExperienceController.php` - Experience CRUD

### `app/Models/`
- `Project.php` - Model untuk projects table
- `Skill.php` - Model untuk skills table
- `Experience.php` - Model untuk experiences table
- `AboutContent.php` - Model untuk about_content table

### `database/migrations/`
- `*_create_projects_table.php` - Projects table schema
- `*_create_skills_table.php` - Skills table schema
- `*_create_experiences_table.php` - Experiences table schema
- `*_create_about_content_table.php` - About content table schema

### `database/seeders/`
- `DatabaseSeeder.php` - Contains sample data (3 projects, 11 skills, 3 experiences)

### `resources/views/`
Master Layout:
- `layout.blade.php` - Master template dengan navbar & footer

Public Pages:
- `index.blade.php` - Homepage
- `about.blade.php` - About page
- `portfolio.blade.php` - Portfolio listing
- `project-detail.blade.php` - Project detail
- `contact.blade.php` - Contact page

Admin Folder: `admin/`
- `projects/index.blade.php` - Projects list
- `projects/create.blade.php` - Create project form
- `projects/edit.blade.php` - Edit project form
- `skills/index.blade.php` - Skills list
- `skills/create.blade.php` - Create skill form
- `skills/edit.blade.php` - Edit skill form
- `experiences/index.blade.php` - Experiences list
- `experiences/create.blade.php` - Create experience form
- `experiences/edit.blade.php` - Edit experience form

### `routes/`
- `web.php` - Semua routes (public & admin)

---

## 🗄️ Database

### Tables & Fields

#### **projects**
```sql
id (PK)
title (required, string)
description (required, text)
image (optional, string - path to storage)
url (optional, string - external link)
github_url (optional, string - github link)
technology_stack (optional, string - comma separated)
order (integer, default 0 - for sorting)
created_at (timestamp)
updated_at (timestamp)
```

#### **skills**
```sql
id (PK)
name (required, string)
category (required, string) - Backend/Frontend/Tools/etc
proficiency (integer, 1-100)
description (optional, text)
icon (optional, string) - Font Awesome class
order (integer, default 0)
created_at (timestamp)
updated_at (timestamp)
```

#### **experiences**
```sql
id (PK)
company (required, string)
position (required, string)
description (optional, text)
start_date (required, date)
end_date (optional, date)
is_current (boolean, default false)
location (optional, string)
order (integer, default 0)
created_at (timestamp)
updated_at (timestamp)
```

#### **about_content**
```sql
id (PK)
key (unique, string) - 'bio', 'intro', etc
content (required, text)
created_at (timestamp)
updated_at (timestamp)
```

---

## 🌐 Routes

### Public Routes
```php
GET  /                    HomeController@index
GET  /about              HomeController@about
GET  /portfolio          HomeController@portfolio
GET  /portfolio/{id}     HomeController@project
GET  /contact            HomeController@contact
```

### Authentication Routes (dari Breeze/UI)
```php
GET  /login              - Login page
POST /login              - Submit login
GET  /register           - Register page
POST /register           - Submit registration
POST /logout             - Logout
```

### Admin Routes (Protected dengan auth middleware)
```php
GET    /admin/projects                ProjectController@index
GET    /admin/projects/create         ProjectController@create
POST   /admin/projects                ProjectController@store
GET    /admin/projects/{id}/edit      ProjectController@edit
PUT    /admin/projects/{id}           ProjectController@update
DELETE /admin/projects/{id}           ProjectController@destroy

GET    /admin/skills/*                SkillController@* (same pattern)
GET    /admin/experiences/*           ExperienceController@* (same pattern)
```

---

## 🎨 Styling & Assets

### Tailwind CSS
**CDN**: https://cdn.tailwindcss.com
**Used in**: Semua `.blade.php` files
**Main classes**:
- Colors: `blue-600`, `gray-100`, `white`, etc
- Spacing: `px-4`, `py-2`, `gap-4`, etc
- Layouts: `grid`, `flex`, `max-w-6xl`, etc
- Responsive: `md:`, `lg:`, `hidden md:flex`, etc

### Font Awesome
**Version**: 6.4.0
**CDN**: https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/
**Icons**:
- Social: `fab fa-github`, `fab fa-linkedin`, etc
- UI: `fas fa-bars`, `fas fa-arrow-left`, etc
- Features: `fas fa-code`, `fas fa-database`, etc

---

## 🔒 Security Features

- ✅ CSRF tokens di form (dari Laravel)
- ✅ Authentication middleware untuk admin routes
- ✅ Input validation di setiap form
- ✅ Authorization implicit (auth middleware)
- ✅ Password hashing (bcrypt)
- ✅ SQL injection prevention (eloquent ORM)

---

## 💾 Storage

### File Upload Locations
```
storage/
├── app/
│   ├── public/
│   │   └── projects/
│   │       └── {project-images}
└── logs/

public/
└── storage/ (symlink ke storage/app/public)
```

### Access Uploaded Files
```blade
<img src="{{ asset('storage/projects/image.jpg') }}">
```

---

## 🚀 Deployment

### Production Checklist
1. ✅ Setup .env untuk production
2. ✅ Setup database di server
3. ✅ Setup storage directory permissions
4. ✅ Run migrations di server
5. ✅ Setup storage symlink
6. ✅ Configure web server (Nginx/Apache)
7. ✅ Setup SSL certificate
8. ✅ Configure email (untuk contact form)

### Commands untuk Production
```bash
# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Cache config
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Run migrations
php artisan migrate --force

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

---

## 📊 Contoh Data Format

### Project
```json
{
  "title": "E-Commerce Platform",
  "description": "Lengkap deskripsi project...",
  "technology_stack": "Laravel, Vue.js, MySQL",
  "url": "https://example.com",
  "github_url": "https://github.com/user/project",
  "order": 1
}
```

### Skill
```json
{
  "name": "Laravel",
  "category": "Backend",
  "proficiency": 95,
  "icon": "fab fa-laravel",
  "order": 1
}
```

### Experience
```json
{
  "company": "Tech Company",
  "position": "Senior Developer",
  "start_date": "2022-01-01",
  "end_date": null,
  "is_current": true,
  "location": "Jakarta"
}
```

---

## 📝 Tips & Best Practices

1. **File Naming**: 
   - PascalCase untuk Classes
   - snake_case untuk migrations
   - kebab-case untuk routes

2. **Database**:
   - Always use migrations
   - Add timestamps untuk audit trail
   - Use soft deletes jika perlu

3. **Views**:
   - Extract reusable components
   - Use @include untuk partials
   - Keep logic minimal (use controllers)

4. **Assets**:
   - Upload images teroptimasi
   - Use CDN untuk external files
   - Compress images sebelum upload

5. **Security**:
   - Never hardcode credentials
   - Always validate input
   - Use prepared statements (Eloquent handles this)

---

## 🆘 Quick Troubleshooting

| Error | Solution |
|-------|----------|
| View not found | Check file name & case sensitivity |
| Database error | Run `php artisan migrate` |
| Image not showing | Run `php artisan storage:link` |
| 403 Forbidden | Check folder permissions |
| Auth not working | Install Breeze/UI & run migrations |
| Port 8000 in use | Use `php artisan serve --port=8001` |

---

Semoga dokumentasi ini membantu! Untuk pertanyaan lebih lanjut, lihat dokumentasi Laravel resmi. 📚
