-- ============================================================
-- Laravel Portfolio - Database Setup for InfinityFree (MySQL)
-- Generated: 2026-06-14
-- Import file ini via phpMyAdmin di InfinityFree
-- ============================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ------------------------------------------------------------
-- 1. users
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password` varchar(255) NOT NULL,
    `remember_token` varchar(100) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 2. password_reset_tokens
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
    `email` varchar(255) NOT NULL,
    `token` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 3. sessions
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `sessions` (
    `id` varchar(255) NOT NULL,
    `user_id` bigint unsigned DEFAULT NULL,
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text,
    `payload` longtext NOT NULL,
    `last_activity` int NOT NULL,
    PRIMARY KEY (`id`),
    KEY `sessions_user_id_index` (`user_id`),
    KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 4. cache
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `cache` (
    `key` varchar(255) NOT NULL,
    `value` mediumtext NOT NULL,
    `expiration` int NOT NULL,
    PRIMARY KEY (`key`),
    KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 5. cache_locks
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `cache_locks` (
    `key` varchar(255) NOT NULL,
    `owner` varchar(255) NOT NULL,
    `expiration` int NOT NULL,
    PRIMARY KEY (`key`),
    KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 6. jobs
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobs` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `queue` varchar(255) NOT NULL,
    `payload` longtext NOT NULL,
    `attempts` tinyint unsigned NOT NULL,
    `reserved_at` int unsigned DEFAULT NULL,
    `available_at` int unsigned NOT NULL,
    `created_at` int unsigned NOT NULL,
    PRIMARY KEY (`id`),
    KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 7. job_batches
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `job_batches` (
    `id` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `total_jobs` int NOT NULL,
    `pending_jobs` int NOT NULL,
    `failed_jobs` int NOT NULL,
    `failed_job_ids` longtext NOT NULL,
    `options` mediumtext,
    `cancelled_at` int DEFAULT NULL,
    `created_at` int NOT NULL,
    `finished_at` int DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 8. failed_jobs
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `failed_jobs` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `uuid` varchar(255) NOT NULL,
    `connection` text NOT NULL,
    `queue` text NOT NULL,
    `payload` longtext NOT NULL,
    `exception` longtext NOT NULL,
    `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 9. projects
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `projects` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `image` varchar(255) DEFAULT NULL,
    `url` varchar(255) DEFAULT NULL,
    `github_url` varchar(255) DEFAULT NULL,
    `technology_stack` varchar(255) DEFAULT NULL,
    `order` int NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 10. skills
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `skills` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `category` varchar(255) NOT NULL,
    `proficiency` int NOT NULL DEFAULT 50,
    `description` text,
    `icon` varchar(255) DEFAULT NULL,
    `order` int NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 11. experiences
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `experiences` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `company` varchar(255) NOT NULL,
    `position` varchar(255) NOT NULL,
    `description` text,
    `start_date` date NOT NULL,
    `end_date` date DEFAULT NULL,
    `is_current` tinyint(1) NOT NULL DEFAULT 0,
    `location` varchar(255) DEFAULT NULL,
    `order` int NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 12. about_content
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `about_content` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `key` varchar(255) NOT NULL,
    `content` text NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `about_content_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 13. certificates
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `certificates` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `issuer` varchar(255) NOT NULL,
    `issue_date` date NOT NULL,
    `description` text,
    `image` varchar(255) DEFAULT NULL,
    `order` int NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 14. organizations
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `organizations` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `position` varchar(255) NOT NULL,
    `start_date` date NOT NULL,
    `end_date` date DEFAULT NULL,
    `is_active` tinyint(1) NOT NULL DEFAULT 0,
    `description` text,
    `achievement` text,
    `order` int NOT NULL DEFAULT 0,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- SEED DATA
-- ============================================================

-- Users
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'M. Kurniawan', 'kurniawan@example.com', '2026-06-07 03:34:42', '$2y$12$3pZpdXz.pICApyCGM8mHxu33pNqUxRcNSeMcbfo9u07SNDpqpwzRa', NULL, '2026-06-14 12:00:00', '2026-06-14 12:00:00');

-- Skills
INSERT INTO `skills` (`id`, `name`, `category`, `proficiency`, `description`, `icon`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'Backend', 95, 'Expert in Laravel framework, building scalable APIs and web applications', 'fab fa-laravel', 1, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(2, 'PHP', 'Backend', 90, 'Strong PHP fundamentals and best practices', 'fab fa-php', 2, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(3, 'MySQL', 'Backend', 85, 'Database design, optimization, and query writing', 'fas fa-database', 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(4, 'Vue.js', 'Frontend', 88, 'Building dynamic and interactive user interfaces', 'fab fa-vuejs', 1, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(5, 'React', 'Frontend', 82, 'Component-based frontend development with React', 'fab fa-react', 2, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(6, 'JavaScript', 'Frontend', 92, 'Expert JavaScript ES6+, async programming, and DOM manipulation', 'fab fa-js', 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(7, 'Tailwind CSS', 'Frontend', 88, 'Utility-first CSS framework for rapid UI development', 'fas fa-palette', 4, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(8, 'Git & GitHub', 'Tools', 90, 'Version control and collaboration', 'fab fa-git', 1, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(9, 'Docker', 'Tools', 75, 'Containerization and deployment', 'fab fa-docker', 2, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(10, 'REST API', 'Tools', 90, 'Building and consuming RESTful APIs', 'fas fa-plug', 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(11, 'Microsoft Word', 'Tools', 85, 'Document creation and formatting', 'fas fa-file-word', 4, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(12, 'Microsoft Excel', 'Tools', 80, 'Data analysis, formulas, and pivot tables', 'fas fa-file-excel', 5, '2026-06-07 03:34:42', '2026-06-07 03:34:42');

-- Experiences
INSERT INTO `experiences` (`id`, `company`, `position`, `description`, `start_date`, `end_date`, `is_current`, `location`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Tech Startup Indonesia', 'Senior Full Stack Developer', 'Led development of microservices architecture. Mentored junior developers. Implemented CI/CD pipelines and improved application performance by 40%.', '2022-03-01', NULL, 1, 'Jakarta, Indonesia', 1, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(2, 'Digital Agency', 'Full Stack Developer', 'Developed web applications for 20+ clients. Worked with Laravel, Vue.js, and MySQL. Managed projects from requirement gathering to deployment.', '2021-06-01', '2022-02-28', 0, 'Surabaya, Indonesia', 2, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(3, 'Web Development Company', 'Junior Developer', 'Started career building static and dynamic websites. Learned Laravel basics and began working with databases.', '2020-01-15', '2021-05-31', 0, 'Bandung, Indonesia', 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42');

-- About Content
INSERT INTO `about_content` (`id`, `key`, `content`, `created_at`, `updated_at`) VALUES
(1, 'bio', 'Fresh Graduate S1 Informatika dari Universitas Multi Data Palembang dengan IPK 3.27. Berpengalaman dalam pengembangan aplikasi web, pengelolaan basis data, dan analisis kebutuhan sistem melalui proyek kerja praktik.', '2026-06-07 03:34:42', '2026-06-14 12:00:00'),
(2, 'intro', 'Aktif berorganisasi sebagai Wakil Kepala Divisi UKM Esport yang mengasah kemampuan kepemimpinan, komunikasi, dan pemecahan masalah. Memiliki Sertifikat Kompetensi LSP serta menguasai Microsoft Excel, HTML, CSS, PHP, MySQL, dan analisis data. Siap berkontribusi dalam lingkungan kerja profesional.', '2026-06-07 03:34:42', '2026-06-14 12:00:00');

-- Certificates
INSERT INTO `certificates` (`id`, `name`, `issuer`, `issue_date`, `description`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Excel Rumus Lookup dan Pivot Table untuk Administrasi Perkantoran', 'YEC Yureka Edukasi Cipta', '2026-06-04', 'Mengikuti pelatihan Microsoft Excel dengan fokus pada penggunaan fungsi Lookup dan Pivot Table untuk pengolahan data, pembuatan laporan, dan administrasi perkantoran.', 'certificates/f7gkUIZ3TV7wqqyEHcyu7vNEsIQZc177Zw8m5ZV4.jpg', 1, '2026-06-07 03:34:42', '2026-06-14 04:01:40'),
(2, 'Nasional TIK: IoT Engineer Profesi Bidang IT Strategis di Era Digital', 'Maestro Academy', '2026-03-10', 'Participated in a national webinar discussing the role of IoT Engineers, emerging technology trends, and career opportunities in the digital era.', 'certificates/FWokZ1yKdglT6SjHmpCNDzsUhsbOek6yV1OxpnSS.jpg', 2, '2026-06-07 03:34:42', '2026-06-14 04:07:07'),
(3, 'JavaScript Mastery', 'Coursera', '2022-12-05', 'Advanced JavaScript concepts including ES6+, async programming, and functional programming.', NULL, 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(4, 'Database Design and SQL', 'Pluralsight', '2022-09-20', 'In-depth knowledge of database design principles, normalization, and advanced SQL queries.', NULL, 4, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(5, 'Git and GitHub Fundamentals', 'LinkedIn Learning', '2022-06-15', 'Version control mastery including branching strategies and collaborative workflows.', NULL, 5, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(6, 'RESTful API Design', 'Postman Academy', '2022-03-10', 'Best practices in designing and testing RESTful APIs with proper documentation.', NULL, 6, '2026-06-07 03:34:42', '2026-06-07 03:34:42');

-- Organizations
INSERT INTO `organizations` (`id`, `name`, `position`, `start_date`, `end_date`, `is_active`, `description`, `achievement`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer Association Indonesia', 'Anggota Aktif', '2021-01-15', NULL, 1, 'Aktif mengikuti meetup dan workshop. Berbagi pengetahuan tentang web development terbaru.', 'Berbicara di 3 meetup tentang Laravel Best Practices. Diikuti lebih dari 100 developer.', 1, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(2, 'Open Source Community', 'Kontributor Aktif', '2022-06-01', NULL, 1, 'Berkontribusi pada beberapa project open source. Membantu maintenance dan improvement.', 'Total 50+ pull requests accepted. 2 package yang saya maintain dengan 5k+ stars.', 2, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(3, 'Universitas Negeri Jakarta', 'Ketua Divisi IT - Student Organization', '2019-09-01', '2020-08-31', 0, 'Memimpin 15 orang developer dalam mengerjakan project untuk universitas.', 'Sukses deliver 3 web application yang digunakan oleh 2000+ mahasiswa.', 3, '2026-06-07 03:34:42', '2026-06-07 03:34:42'),
(4, 'Tech Workshop Indonesia', 'Trainer/Mentor', '2021-01-15', NULL, 1, 'Mengajar dan membimbing 50+ developer junior. Fokus pada Laravel dan web fundamentals.', '90% alumni menjadi developer profesional dan bekerja di perusahaan top.', 4, '2026-06-07 03:34:42', '2026-06-07 03:34:42');

-- Migrations tracking table
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) NOT NULL,
    `batch` int NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('0001_01_01_000000_create_users_table', 1),
('0001_01_01_000001_create_cache_table', 1),
('0001_01_01_000002_create_jobs_table', 1),
('2024_01_01_000001_create_projects_table', 1),
('2024_01_01_000002_create_skills_table', 1),
('2024_01_01_000003_create_experiences_table', 1),
('2024_01_01_000004_create_about_content_table', 1),
('2026_06_07_032903_create_certificates_table', 1),
('2026_06_07_032907_create_organizations_table', 1);

SET FOREIGN_KEY_CHECKS = 1;
