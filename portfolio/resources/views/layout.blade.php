<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portofolio Kurniawan')</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%23111827'/%3E%3Ctext x='50%25' y='55%25' dominant-baseline='middle' text-anchor='middle' font-family='monospace' font-weight='bold' font-size='14' fill='%23818cf8'%3E%26lt;/%26gt;%3C/text%3E%3C/svg%3E">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===================== */
        /* DARK THEME BASE STYLES */
        /* ===================== */
        html {
            scroll-behavior: smooth;
        }

        body {
            background: #0a0a0f;
            background-image:
                radial-gradient(ellipse at 20% 20%, rgba(59, 130, 246, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 80%, rgba(139, 92, 246, 0.06) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(6, 182, 212, 0.04) 0%, transparent 70%);
            min-height: 100vh;
            color: #e5e7eb;
            overflow-x: hidden;
        }

        /* Animated Background Mesh */
        .bg-mesh {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .bg-mesh::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 30%, rgba(59, 130, 246, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(139, 92, 246, 0.12) 0%, transparent 40%),
                radial-gradient(circle at 60% 20%, rgba(6, 182, 212, 0.1) 0%, transparent 35%);
            animation: meshMove 20s ease-in-out infinite;
        }

        @keyframes meshMove {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(2%, 2%) rotate(1deg); }
            50% { transform: translate(0, 4%) rotate(0deg); }
            75% { transform: translate(-2%, 2%) rotate(-1deg); }
        }

        /* Grid Pattern Overlay */
        .grid-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            background-image:
                linear-gradient(rgba(59, 130, 246, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(59, 130, 246, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            mask-image: radial-gradient(ellipse at center, black 30%, transparent 70%);
        }

        /* ===================== */
        /* PARTICLE CANVAS STYLES */
        /* ===================== */
        #particles-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        /* ===================== */
        /* ANIMATION CLASSES */
        /* ===================== */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1), transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Staggered delay classes */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }
        .delay-600 { transition-delay: 600ms; }
        .delay-700 { transition-delay: 700ms; }
        .delay-800 { transition-delay: 800ms; }

        /* ===================== */
        /* ENTRANCE ANIMATIONS */
        /* ===================== */
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scale-in {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.6;
                transform: scale(1);
            }
            50% {
                opacity: 0.8;
                transform: scale(1.05);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .animate-scale-in {
            animation: scale-in 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        /* Gradient text animation */
        .gradient-text-animated {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #06b6d4, #3b82f6);
            background-size: 300% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            animation: shimmer 4s linear infinite;
        }

        /* Float animation for profile photo */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        /* Hover effects with neon glow */
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-lift:hover {
            transform: translateY(-5px);
        }

        .glow-blue { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
        .glow-purple { box-shadow: 0 0 20px rgba(139, 92, 246, 0.3); }
        .glow-cyan { box-shadow: 0 0 20px rgba(6, 182, 212, 0.3); }

        /* Premium button styles */
        .btn-premium {
            position: relative;
            overflow: hidden;
        }

        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-premium:hover::before {
            left: 100%;
        }

        /* Enhanced gradient border */
        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.9), rgba(31, 41, 55, 0.7));
            border-radius: 0.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 0.75rem;
            padding: 1px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #06b6d4);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0.4;
            transition: opacity 0.3s ease;
        }

        .gradient-border:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .gradient-border:hover::before {
            opacity: 0.8;
        }

        /* ===================== */
        /* NEON TEXT EFFECTS */
        /* ===================== */
        .neon-text {
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.5),
                         0 0 20px rgba(59, 130, 246, 0.3),
                         0 0 30px rgba(59, 130, 246, 0.2);
        }

        .neon-text-purple {
            text-shadow: 0 0 10px rgba(139, 92, 246, 0.5),
                         0 0 20px rgba(139, 92, 246, 0.3),
                         0 0 30px rgba(139, 92, 246, 0.2);
        }

        /* ===================== */
        /* CUSTOM SCROLLBAR */
        /* ===================== */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0f;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #8b5cf6);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #60a5fa, #a78bfa);
        }

        /* ===================== */
        /* DARK CARD STYLES */
        /* ===================== */
        .dark-card {
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.8) 0%, rgba(31, 41, 55, 0.6) 100%);
            border: 1px solid rgba(59, 130, 246, 0.2);
            backdrop-filter: blur(10px);
        }

        .dark-card:hover {
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.15);
        }

        /* ===================== */
        /* NAVBAR STYLES */
        /* ===================== */
        .navbar-glass {
            background: rgba(10, 10, 15, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            transition: all 0.3s ease;
        }

        .navbar-glass.scrolled {
            background: rgba(10, 10, 15, 0.85);
            border-bottom: 1px solid rgba(59, 130, 246, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .nav-link {
            position: relative;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 0;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #06b6d4);
            border-radius: 2px;
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: #fff;
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-logo {
            transition: all 0.3s ease;
        }

        .nav-logo:hover {
            transform: scale(1.02);
            text-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
        }

        /* Mobile menu button */
        .menu-toggle {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .menu-toggle:hover {
            background: rgba(59, 130, 246, 0.15);
        }

        .menu-toggle i {
            transition: transform 0.3s ease;
        }

        .menu-toggle.active i {
            transform: rotate(90deg);
        }

        /* ===================== */
        /* FOOTER STYLES */
        /* ===================== */
        .footer-dark {
            background: linear-gradient(180deg, transparent, rgba(17, 24, 39, 0.95));
            border-top: 1px solid rgba(255, 255, 255, 0.06);
        }

        .social-icon {
            color: rgba(255, 255, 255, 0.6);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .social-icon:hover {
            color: #fff;
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.8);
            transform: translateY(-3px);
            background: rgba(59, 130, 246, 0.2);
        }

        /* ===================== */
        /* ===================== */
        /* RESPONSIVE GRADIENT BORDERS - Already defined above */
        /* ===================== */
        }

        /* ===================== */
        /* MOBILE MENU */
        /* ===================== */
        #mobile-menu {
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(59, 130, 246, 0.15);
        }

        .mobile-nav-link {
            color: #9ca3af;
            transition: all 0.3s ease;
        }

        .mobile-nav-link:hover {
            color: #3b82f6;
            padding-left: 8px;
        }

        /* ===================== */
        /* 3D TILT EFFECT STYLES */
        /* ===================== */
        .tilt-3d {
            transform-style: preserve-3d;
            will-change: transform;
        }
    </style>
</head>
<body class="text-gray-200">
    <!-- Animated Background -->
    <div class="bg-mesh"></div>
    <div class="grid-pattern"></div>
    <canvas id="particles-canvas"></canvas>

    <!-- Navbar -->
    <nav class="navbar-glass fixed top-0 left-0 right-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="nav-logo text-2xl font-bold text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-cyan-400">
                    <i class="fas fa-code mr-2 text-white"></i>Portfolio
                </span>
            </a>
            <ul class="hidden md:flex items-center gap-1">
                <li><a href="{{ route('home') }}" class="nav-link mx-2">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link mx-2">About</a></li>
                <li><a href="{{ route('certificates') }}" class="nav-link mx-2">Sertifikat</a></li>
                <li><a href="{{ route('organizations') }}" class="nav-link mx-2">Organisasi</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link mx-2">Contact</a></li>
                @auth
                    <li><a href="{{ route('admin.skills.index') }}" class="nav-link mx-2">Admin</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="nav-link mx-2">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
            <button class="md:hidden menu-toggle text-white" onclick="toggleMenu()">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <ul class="flex flex-col gap-1 px-4 pb-4">
                <li><a href="{{ route('home') }}" class="mobile-nav-link block py-2">Home</a></li>
                <li><a href="{{ route('about') }}" class="mobile-nav-link block py-2">About</a></li>
                <li><a href="{{ route('certificates') }}" class="mobile-nav-link block py-2">Sertifikat</a></li>
                <li><a href="{{ route('organizations') }}" class="mobile-nav-link block py-2">Organisasi</a></li>
                <li><a href="{{ route('contact') }}" class="mobile-nav-link block py-2">Contact</a></li>
                @auth
                    <li><a href="{{ route('admin.skills.index') }}" class="mobile-nav-link block py-2">Admin</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="mobile-nav-link py-2">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-dark text-white py-16 mt-12 relative overflow-hidden">
        <!-- Footer decorative elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            <!-- Logo -->
            <div class="mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-cyan-400 text-2xl font-bold">
                    <i class="fas fa-code mr-2 text-white"></i>Portfolio
                </span>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center gap-4 mb-8">
                <a href="https://github.com/Mkurniawan4010" target="_blank" rel="noopener noreferrer" class="social-icon w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-white/10 border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/m-kurniawan-kurniawan-7abaa0407/" target="_blank" rel="noopener noreferrer" class="social-icon w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-white/10 border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://x.com/Kurnia1_444?s=20" target="_blank" rel="noopener noreferrer" class="social-icon w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-white/10 border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/k_wwan4/?utm_source=ig_web_button_share_sheet" target="_blank" rel="noopener noreferrer" class="social-icon w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-white/10 border border-white/10 hover:border-pink-500/30 transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <!-- Tagline -->
            <p class="text-gray-500 text-sm mb-3">
                Crafting digital experiences through clean code and modern web technologies.
            </p>

            <!-- Divider -->
            <div class="w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent mb-6"></div>

            <!-- Copyright -->
            <p class="text-gray-600 text-sm">
                &copy; 2026 M.Kurniawan <span class="text-gray-500">gamerfreewebwan</span>
            </p>
        </div>
    </footer>

    <!-- Certificate Image Lightbox -->
    <div id="cert-lightbox" class="fixed inset-0 z-[9999] bg-black/90 backdrop-blur-sm flex items-center justify-center p-4 hidden opacity-0 transition-opacity duration-300" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300 transition z-10 w-12 h-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20">
            <i class="fas fa-times"></i>
        </button>
        <img id="cert-lightbox-img" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl transform scale-95 transition-transform duration-300">
        <div id="cert-lightbox-caption" class="absolute bottom-6 left-1/2 -translate-x-1/2 text-center text-white max-w-lg px-4">
            <p class="font-semibold text-lg"></p>
            <p class="text-gray-400 text-sm mt-1"></p>
        </div>
    </div>

    <script>
        // =====================
        // CERTIFICATE LIGHTBOX
        // =====================
        function openLightbox(imgSrc, title, issuer) {
            const lightbox = document.getElementById('cert-lightbox');
            const img = document.getElementById('cert-lightbox-img');
            const caption = document.getElementById('cert-lightbox-caption');

            img.src = imgSrc;
            img.alt = title;
            caption.children[0].textContent = title;
            caption.children[1].textContent = issuer;

            lightbox.classList.remove('hidden');
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                img.classList.remove('scale-95');
                img.classList.add('scale-100');
            });

            document.body.style.overflow = 'hidden';
        }

        function closeLightbox(event) {
            if (event.target === event.currentTarget || event.currentTarget.tagName === 'BUTTON') {
                const lightbox = document.getElementById('cert-lightbox');
                const img = document.getElementById('cert-lightbox-img');

                lightbox.classList.add('opacity-0');
                img.classList.remove('scale-100');
                img.classList.add('scale-95');

                setTimeout(() => {
                    lightbox.classList.add('hidden');
                    img.src = '';
                    document.body.style.overflow = '';
                }, 300);
            }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const lightbox = document.getElementById('cert-lightbox');
                if (!lightbox.classList.contains('hidden')) {
                    closeLightbox({ target: lightbox, currentTarget: lightbox });
                }
            }
        });

        // =====================
        // MOBILE MENU TOGGLE
        // =====================
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const btn = document.querySelector('.menu-toggle');
            menu.classList.toggle('hidden');
            btn.classList.toggle('active');
        }

        // =====================
        // NAVBAR SCROLL EFFECT
        // =====================
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-glass');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // =====================
        // INTERSECTION OBSERVER
        // =====================
        document.addEventListener('DOMContentLoaded', function() {
            // Animation observer that replays on each scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add visible class when entering viewport
                        entry.target.classList.add('visible');
                    } else {
                        // Remove visible class when exiting to allow replay
                        entry.target.classList.remove('visible');
                    }
                });
            }, observerOptions);

            // Observe all elements with animate-on-scroll class
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Re-observe elements when they become invisible to enable replay
            const replayObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting && entry.target.classList.contains('visible')) {
                        // Small delay before removing to ensure smooth transition
                        setTimeout(() => {
                            entry.target.classList.remove('visible');
                        }, 100);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                replayObserver.observe(el);
            });
        });

        // =====================
        // PARTICLE SYSTEM
        // =====================
        class ParticleSystem {
            constructor() {
                this.canvas = document.getElementById('particles-canvas');
                this.ctx = this.canvas.getContext('2d');
                this.particles = [];
                this.mouse = { x: null, y: null };
                this.maxParticles = 80;
                this.connectionDistance = 120;
                this.mouseDistance = 150;

                this.init();
                this.bindEvents();
                this.animate();
            }

            init() {
                this.resize();
                this.createParticles();
            }

            resize() {
                this.canvas.width = window.innerWidth;
                this.canvas.height = window.innerHeight;
            }

            createParticles() {
                this.particles = [];
                const colors = ['#3b82f6', '#8b5cf6', '#06b6d4', '#60a5fa', '#a78bfa'];

                for (let i = 0; i < this.maxParticles; i++) {
                    this.particles.push({
                        x: Math.random() * this.canvas.width,
                        y: Math.random() * this.canvas.height,
                        vx: (Math.random() - 0.5) * 0.8,
                        vy: (Math.random() - 0.5) * 0.8,
                        radius: Math.random() * 2 + 1,
                        color: colors[Math.floor(Math.random() * colors.length)],
                        alpha: Math.random() * 0.5 + 0.3
                    });
                }
            }

            bindEvents() {
                window.addEventListener('resize', () => {
                    this.resize();
                    this.createParticles();
                });

                window.addEventListener('mousemove', (e) => {
                    this.mouse.x = e.clientX;
                    this.mouse.y = e.clientY;
                });

                window.addEventListener('mouseleave', () => {
                    this.mouse.x = null;
                    this.mouse.y = null;
                });
            }

            updateParticles() {
                this.particles.forEach(particle => {
                    // Update position
                    particle.x += particle.vx;
                    particle.y += particle.vy;

                    // Bounce off edges
                    if (particle.x < 0 || particle.x > this.canvas.width) particle.vx *= -1;
                    if (particle.y < 0 || particle.y > this.canvas.height) particle.vy *= -1;

                    // Mouse interaction
                    if (this.mouse.x !== null && this.mouse.y !== null) {
                        const dx = this.mouse.x - particle.x;
                        const dy = this.mouse.y - particle.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < this.mouseDistance) {
                            const force = (this.mouseDistance - distance) / this.mouseDistance;
                            const angle = Math.atan2(dy, dx);

                            particle.vx += Math.cos(angle) * force * 0.15;
                            particle.vy += Math.sin(angle) * force * 0.15;
                        }
                    }

                    // Speed limit
                    const speed = Math.sqrt(particle.vx * particle.vx + particle.vy * particle.vy);
                    if (speed > 2) {
                        particle.vx = (particle.vx / speed) * 2;
                        particle.vy = (particle.vy / speed) * 2;
                    }
                });
            }

            drawParticles() {
                this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

                // Draw particles
                this.particles.forEach(particle => {
                    this.ctx.beginPath();
                    this.ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                    this.ctx.fillStyle = particle.color;
                    this.ctx.globalAlpha = particle.alpha;
                    this.ctx.fill();

                    // Glow effect
                    this.ctx.beginPath();
                    this.ctx.arc(particle.x, particle.y, particle.radius * 2, 0, Math.PI * 2);
                    this.ctx.fillStyle = particle.color;
                    this.ctx.globalAlpha = particle.alpha * 0.3;
                    this.ctx.fill();
                });

                this.ctx.globalAlpha = 1;
            }

            drawConnections() {
                for (let i = 0; i < this.particles.length; i++) {
                    for (let j = i + 1; j < this.particles.length; j++) {
                        const dx = this.particles[i].x - this.particles[j].x;
                        const dy = this.particles[i].y - this.particles[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < this.connectionDistance) {
                            const opacity = (this.connectionDistance - distance) / this.connectionDistance * 0.3;

                            this.ctx.beginPath();
                            this.ctx.moveTo(this.particles[i].x, this.particles[i].y);
                            this.ctx.lineTo(this.particles[j].x, this.particles[j].y);

                            // Gradient line
                            const gradient = this.ctx.createLinearGradient(
                                this.particles[i].x, this.particles[i].y,
                                this.particles[j].x, this.particles[j].y
                            );
                            gradient.addColorStop(0, `rgba(59, 130, 246, ${opacity})`);
                            gradient.addColorStop(0.5, `rgba(139, 92, 246, ${opacity})`);
                            gradient.addColorStop(1, `rgba(6, 182, 212, ${opacity})`);

                            this.ctx.strokeStyle = gradient;
                            this.ctx.lineWidth = 1;
                            this.ctx.stroke();
                        }
                    }
                }
            }

            drawMouseConnections() {
                if (this.mouse.x === null || this.mouse.y === null) return;

                this.particles.forEach(particle => {
                    const dx = this.mouse.x - particle.x;
                    const dy = this.mouse.y - particle.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < this.mouseDistance) {
                        const opacity = (this.mouseDistance - distance) / this.mouseDistance * 0.5;

                        this.ctx.beginPath();
                        this.ctx.moveTo(this.mouse.x, this.mouse.y);
                        this.ctx.lineTo(particle.x, particle.y);

                        this.ctx.strokeStyle = `rgba(59, 130, 246, ${opacity})`;
                        this.ctx.lineWidth = 1;
                        this.ctx.stroke();
                    }
                });
            }

            animate() {
                this.updateParticles();
                this.drawParticles();
                this.drawConnections();
                this.drawMouseConnections();
                requestAnimationFrame(() => this.animate());
            }
        }

        // 3D Tilt Effect Class
        class VanillaTilt3D {
            constructor(element, options = {}) {
                this.element = element;
                this.width = null;
                this.height = null;
                this.left = null;
                this.top = null;
                this.updateCall = null;
                
                this.settings = {
                    max: options.max || 12,
                    perspective: options.perspective || 1000,
                    easing: options.easing || "cubic-bezier(.03,.98,.52,.99)",
                    scale: options.scale || 1.02,
                    speed: options.speed || 300,
                    reset: options.reset !== false,
                };

                this.onMouseEnter = this.onMouseEnter.bind(this);
                this.onMouseMove = this.onMouseMove.bind(this);
                this.onMouseLeave = this.onMouseLeave.bind(this);
                
                this.addEventListeners();
            }
            
            addEventListeners() {
                this.element.addEventListener("mouseenter", this.onMouseEnter);
                this.element.addEventListener("mousemove", this.onMouseMove);
                this.element.addEventListener("mouseleave", this.onMouseLeave);
            }
            
            onMouseEnter() {
                this.updateElementPosition();
                this.element.style.transition = `transform ${this.settings.speed}ms ${this.settings.easing}`;
            }
            
            onMouseMove(event) {
                if (this.updateCall !== null) {
                    cancelAnimationFrame(this.updateCall);
                }
                this.event = event;
                this.updateCall = requestAnimationFrame(() => this.update());
            }
            
            onMouseLeave() {
                if (this.updateCall !== null) {
                    cancelAnimationFrame(this.updateCall);
                }
                if (this.settings.reset) {
                    this.element.style.transition = `transform ${this.settings.speed}ms ${this.settings.easing}`;
                    this.element.style.transform = `perspective(${this.settings.perspective}px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                }
            }
            
            updateElementPosition() {
                const rect = this.element.getBoundingClientRect();
                this.width = this.element.offsetWidth;
                this.height = this.element.offsetHeight;
                this.left = rect.left;
                this.top = rect.top;
            }
            
            update() {
                const x = (this.event.clientX - this.left) / this.width;
                const y = (this.event.clientY - this.top) / this.height;
                
                const tiltX = (this.settings.max / 2 - x * this.settings.max).toFixed(2);
                const tiltY = (y * this.settings.max - this.settings.max / 2).toFixed(2);
                
                this.element.style.transform = `perspective(${this.settings.perspective}px) rotateX(${tiltY}deg) rotateY(${tiltX}deg) scale3d(${this.settings.scale}, ${this.settings.scale}, ${this.settings.scale})`;
                this.updateCall = null;
            }
        }

        // Initialize particle system & 3D Tilt
        document.addEventListener('DOMContentLoaded', () => {
            new ParticleSystem();
            
            // Initialize Tilt for all elements with class 'tilt-3d'
            document.querySelectorAll('.tilt-3d').forEach(el => {
                new VanillaTilt3D(el, {
                    max: parseFloat(el.getAttribute('data-tilt-max')) || 12,
                    scale: parseFloat(el.getAttribute('data-tilt-scale')) || 1.03,
                    perspective: parseInt(el.getAttribute('data-tilt-perspective')) || 1000
                });
            });
        });
    </script>
</body>
</html>