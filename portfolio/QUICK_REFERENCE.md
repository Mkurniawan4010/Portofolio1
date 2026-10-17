# ⚡ QUICK REFERENCE CARD

## 🚀 SETUP (Copy & Paste)

### Windows (PowerShell)
```powershell
cd e:\belajar\portofolio\portfolio
setup.bat
php artisan serve
```

### Linux/Mac
```bash
cd ~/portfolio
bash setup.sh
php artisan serve
```

---

## 🔐 AUTHENTICATION (After Setup)

```bash
# Install Breeze
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install && npm run dev
php artisan migrate
```

---

## 📍 KEY URLS

| Purpose | URL |
|---------|-----|
| Home | `http://localhost:8000/` |
| About | `http://localhost:8000/about` |
| Portfolio | `http://localhost:8000/portfolio` |
| Contact | `http://localhost:8000/contact` |
| Register | `http://localhost:8000/register` |
| Login | `http://localhost:8000/login` |
| Admin | `http://localhost:8000/admin/projects` |

---

## 👤 DEFAULT CREDENTIALS

```
Email: admin@example.com
Password: password
```

*(Setelah seed database)*

---

## 📁 IMPORTANT FILES

| File | Purpose |
|------|---------|
| `app/Http/Controllers/HomeController.php` | Public pages logic |
| `app/Http/Controllers/Admin/*Controller.php` | Admin pages logic |
| `resources/views/layout.blade.php` | Master template |
| `resources/views/index.blade.php` | Homepage |
| `routes/web.php` | All routes |
| `.env` | Configuration |
| `database/seeders/DatabaseSeeder.php` | Sample data |

---

## 🗄️ DATABASE TABLES

- **projects** - Portfolio projects
- **skills** - Developer skills
- **experiences** - Work experience
- **about_content** - Bio & intro

---

## 🛠️ ARTISAN COMMANDS

```bash
# Server
php artisan serve
php artisan serve --port=8001

# Database
php artisan migrate
php artisan migrate:fresh
php artisan db:seed

# Cache
php artisan cache:clear
php artisan config:cache

# Interactive
php artisan tinker

# Storage
php artisan storage:link
```

---

## 🎨 CUSTOMIZE

### Change Primary Color
Edit `layout.blade.php`:
```blade
blue-600  →  red-600  (or your color)
blue-700  →  red-700
```

### Update Logo
Edit `layout.blade.php`:
```blade
<i class="fas fa-code"></i> Your Name
```

### Update Contact Info
Edit `contact.blade.php`:
```blade
your.email@example.com
+62 123 4567 8901
Jakarta, Indonesia
```

---

## ❌ TROUBLESHOOTING

| Error | Fix |
|-------|-----|
| Port 8000 in use | `php artisan serve --port=8001` |
| Database error | `php artisan migrate:fresh` |
| Images not showing | `php artisan storage:link` |
| View not found | Check file name (case-sensitive) |
| Migration error | Check PHP version (8.1+) |

---

## 📚 DOCUMENTATION

| File | Read For |
|------|----------|
| INDEX.md | Start here |
| README.md | Full documentation |
| SETUP.md | Setup issues |
| FEATURES.md | Features list |
| FILES_STRUCTURE.md | File explanations |

---

## ✅ SETUP CHECKLIST

- [ ] Run setup script
- [ ] Install authentication
- [ ] Seed database
- [ ] Create admin account
- [ ] Login to admin
- [ ] Add 1 project
- [ ] Add 1 skill
- [ ] Add 1 experience
- [ ] View on homepage

---

## 🎯 ADMIN OPERATIONS

### Add Project
1. Login
2. Admin → Projects → + Add Project
3. Fill form + upload image
4. Submit

### Add Skill
1. Login
2. Admin → Skills → + Add Skill
3. Name, Category, Proficiency
4. Submit

### Add Experience
1. Login
2. Admin → Experiences → + Add Experience
3. Company, Position, Dates
4. Submit

---

## 🚀 DEPLOYMENT

```bash
# Before deploy
php artisan config:cache
php artisan route:cache
php artisan view:cache

# On server
php artisan migrate --force
php artisan storage:link

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

---

## 📞 HELP

**File**: `SETUP.md` - untuk setup issues
**File**: `README.md` - untuk dokumentasi lengkap
**File**: `FILES_STRUCTURE.md` - untuk penjelasan file

---

**Printed: June 2026**
**Keep this card nearby for quick reference!** 🚀
