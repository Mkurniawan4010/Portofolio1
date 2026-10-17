<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Organization;
use App\Models\AboutContent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Test User untuk login
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Seed Skills - Backend
        Skill::create([
            'name' => 'Laravel',
            'category' => 'Backend',
            'proficiency' => 95,
            'description' => 'Expert in Laravel framework, building scalable APIs and web applications',
            'icon' => 'fab fa-laravel',
            'order' => 1,
        ]);

        Skill::create([
            'name' => 'PHP',
            'category' => 'Backend',
            'proficiency' => 90,
            'description' => 'Strong PHP fundamentals and best practices',
            'icon' => 'fab fa-php',
            'order' => 2,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'category' => 'Backend',
            'proficiency' => 85,
            'description' => 'Database design, optimization, and query writing',
            'icon' => 'fas fa-database',
            'order' => 3,
        ]);

        // Seed Skills - Frontend
        Skill::create([
            'name' => 'Vue.js',
            'category' => 'Frontend',
            'proficiency' => 88,
            'description' => 'Building dynamic and interactive user interfaces',
            'icon' => 'fab fa-vuejs',
            'order' => 1,
        ]);

        Skill::create([
            'name' => 'React',
            'category' => 'Frontend',
            'proficiency' => 82,
            'description' => 'Component-based frontend development with React',
            'icon' => 'fab fa-react',
            'order' => 2,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'category' => 'Frontend',
            'proficiency' => 92,
            'description' => 'Expert JavaScript ES6+, async programming, and DOM manipulation',
            'icon' => 'fab fa-js',
            'order' => 3,
        ]);

        Skill::create([
            'name' => 'Tailwind CSS',
            'category' => 'Frontend',
            'proficiency' => 88,
            'description' => 'Utility-first CSS framework for rapid UI development',
            'icon' => 'fas fa-palette',
            'order' => 4,
        ]);

        // Seed Skills - Tools & Other
        Skill::create([
            'name' => 'Git & GitHub',
            'category' => 'Tools',
            'proficiency' => 90,
            'description' => 'Version control and collaboration',
            'icon' => 'fab fa-git',
            'order' => 1,
        ]);

        Skill::create([
            'name' => 'Docker',
            'category' => 'Tools',
            'proficiency' => 75,
            'description' => 'Containerization and deployment',
            'icon' => 'fab fa-docker',
            'order' => 2,
        ]);

        Skill::create([
            'name' => 'REST API',
            'category' => 'Tools',
            'proficiency' => 90,
            'description' => 'Building and consuming RESTful APIs',
            'icon' => 'fas fa-plug',
            'order' => 3,
        ]);

        Skill::create([
            'name' => 'Microsoft Word',
            'category' => 'Tools',
            'proficiency' => 85,
            'description' => 'Document creation and formatting',
            'icon' => 'fas fa-file-word',
            'order' => 4,
        ]);

        Skill::create([
            'name' => 'Microsoft Excel',
            'category' => 'Tools',
            'proficiency' => 80,
            'description' => 'Data analysis, formulas, and pivot tables',
            'icon' => 'fas fa-file-excel',
            'order' => 5,
        ]);

        // Seed Certificates
        Certificate::create([
            'name' => 'Excel Rumus Lookup dan Pivot Table untuk Administrasi Perkantoran',
            'issuer' => 'yureka edukasi cipta ',
            'issue_date' => '2023-06-15',
            'description' => 'Completed training on Microsoft Excel focusing on Lookup functions and Pivot Tables for data processing, reporting, and office administration. Gained practical skills in organizing, analyzing, and presenting data efficiently.',
            'order' => 1,
        ]);

        Certificate::create([
            'name' => 'Webinar Nasional TIK - IoT Engineer Profesi Bidang IT Strategis di Era Digital',
            'issuer' => 'Maestro Academy',
            'issue_date' => '2023-03-10',
            'description' => 'Participated in a national webinar discussing the role of IoT Engineers, emerging technology trends, and career opportunities in the digital era. Enhanced understanding of Internet of Things (IoT) applications and industry developments.',
            'order' => 2,
        ]);

        Certificate::create([
            'name' => 'Webinar Literasi Keamanan Digital',
            'issuer' => 'Maestro Academy',
            'issue_date' => '2025-11-15',
            'description' => 'Participated in a Digital Security Literacy webinar focused on cybersecurity awareness, data privacy protection, safe internet practices, and digital risk mitigation. Enhanced understanding of information security principles and responsible digital technology usage.',
            'order' => 3,
        ]);

        Certificate::create([
            'name' => 'Database Design and SQL',
            'issuer' => 'Pluralsight',
            'issue_date' => '2022-09-20',
            'description' => 'In-depth knowledge of database design principles, normalization, and advanced SQL queries.',
            'order' => 4,
        ]);

        Certificate::create([
            'name' => 'Git and GitHub Fundamentals',
            'issuer' => 'LinkedIn Learning',
            'issue_date' => '2022-06-15',
            'description' => 'Version control mastery including branching strategies and collaborative workflows.',
            'order' => 5,
        ]);

        Certificate::create([
            'name' => 'RESTful API Design',
            'issuer' => 'Postman Academy',
            'issue_date' => '2022-03-10',
            'description' => 'Best practices in designing and testing RESTful APIs with proper documentation.',
            'order' => 6,
        ]);

        // Seed Organizations & Achievements
        Organization::create([
            'name' => 'Web Developer Association Indonesia',
            'position' => 'Anggota Aktif',
            'start_date' => '2021-01-15',
            'end_date' => null,
            'is_active' => true,
            'description' => 'Aktif mengikuti meetup dan workshop. Berbagi pengetahuan tentang web development terbaru.',
            'achievement' => 'Berbicara di 3 meetup tentang Laravel Best Practices. Diikuti lebih dari 100 developer.',
            'order' => 1,
        ]);

        Organization::create([
            'name' => 'Open Source Community',
            'position' => 'Kontributor Aktif',
            'start_date' => '2022-06-01',
            'end_date' => null,
            'is_active' => true,
            'description' => 'Berkontribusi pada beberapa project open source. Membantu maintenance dan improvement.',
            'achievement' => 'Total 50+ pull requests accepted. 2 package yang saya maintain dengan 5k+ stars.',
            'order' => 2,
        ]);

        Organization::create([
            'name' => 'Universitas Negeri Jakarta',
            'position' => 'Ketua Divisi IT - Student Organization',
            'start_date' => '2019-09-01',
            'end_date' => '2020-08-31',
            'is_active' => false,
            'description' => 'Memimpin 15 orang developer dalam mengerjakan project untuk universitas.',
            'achievement' => 'Sukses deliver 3 web application yang digunakan oleh 2000+ mahasiswa.',
            'order' => 3,
        ]);

        Organization::create([
            'name' => 'Tech Workshop Indonesia',
            'position' => 'Trainer/Mentor',
            'start_date' => '2021-01-15',
            'end_date' => null,
            'is_active' => true,
            'description' => 'Mengajar dan membimbing 50+ developer junior. Fokus pada Laravel dan web fundamentals.',
            'achievement' => '90% alumni menjadi developer profesional dan bekerja di perusahaan top.',
            'order' => 4,
        ]);

        // Seed Experiences
        Experience::create([
            'company' => 'Tech Startup Indonesia',
            'position' => 'Senior Full Stack Developer',
            'description' => 'Led development of microservices architecture. Mentored junior developers. Implemented CI/CD pipelines and improved application performance by 40%.',
            'start_date' => '2022-03-01',
            'end_date' => null,
            'is_current' => true,
            'location' => 'Jakarta, Indonesia',
            'order' => 1,
        ]);

        Experience::create([
            'company' => 'Digital Agency',
            'position' => 'Full Stack Developer',
            'description' => 'Developed web applications for 20+ clients. Worked with Laravel, Vue.js, and MySQL. Managed projects from requirement gathering to deployment.',
            'start_date' => '2021-06-01',
            'end_date' => '2022-02-28',
            'is_current' => false,
            'location' => 'Surabaya, Indonesia',
            'order' => 2,
        ]);

        Experience::create([
            'company' => 'Web Development Company',
            'position' => 'Junior Developer',
            'description' => 'Started career building static and dynamic websites. Learned Laravel basics and began working with databases.',
            'start_date' => '2020-01-15',
            'end_date' => '2021-05-31',
            'is_current' => false,
            'location' => 'Bandung, Indonesia',
            'order' => 3,
        ]);

        // Seed About Content
        AboutContent::create([
            'key' => 'bio',
            'content' => 'Saya adalah Full Stack Developer dengan passion yang tinggi terhadap web development. Memiliki pengalaman lebih dari 4 tahun dalam membangun aplikasi web yang scalable, user-friendly, dan performant. Lulusan S1 Informatika dengan sertifikat internasional.',
        ]);

        AboutContent::create([
            'key' => 'intro',
            'content' => 'Saya senang menghadapi tantangan baru dan terus belajar teknologi terbaru. Dalam setiap project, saya fokus pada kualitas code, user experience, dan best practices. Mari kita bekerja sama untuk mewujudkan ide Anda!',
        ]);
    }
}
