@extends('layout')

@section('title', 'About - My Portofolio Kurniawan')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-12 text-white animate-on-scroll">About Me</h1>

        <div class="grid md:grid-cols-2 gap-12 mb-16 items-center">
            <div class="animate-on-scroll flex justify-center md:justify-end">
                <div class="gradient-border p-2 inline-flex items-center justify-center hover-lift max-w-max tilt-3d" data-tilt-max="15" style="transform-style: preserve-3d;">
                    <div class="overflow-hidden rounded-lg shadow-lg w-64 sm:w-80 md:w-[360px] h-96 sm:h-[420px] md:h-[480px] bg-gray-800 flex items-center justify-center" style="transform: translateZ(30px);">
                        <img
                            src="{{ asset('images/foto_diri/fotoke2.png') }}"
                            alt="Foto Saya"
                            class="w-full h-full object-cover object-center"
                            onerror="this.style.display='none'; document.getElementById('about-photo-placeholder').style.display='flex';"
                        />
                        <div id="about-photo-placeholder" class="hidden items-center justify-center">
                            <i class="fas fa-user-circle text-8xl text-blue-500 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate-on-scroll delay-200 flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4 text-white">M. Kurniawan</h2>
                <p class="text-sm text-blue-400 font-semibold mb-4 uppercase tracking-wider">Fresh Graduate - Informatics</p>
                <p class="text-lg text-gray-300 mb-4 leading-relaxed">
                    {{ $aboutContent['bio'] ?? 'Fresh Graduate S1 Informatika dari Universitas Multi Data Palembang dengan IPK 3.27. Berpengalaman dalam pengembangan aplikasi web, pengelolaan basis data, dan analisis kebutuhan sistem melalui proyek kerja praktik.' }}
                </p>
                <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                    {{ $aboutContent['intro'] ?? 'Aktif berorganisasi sebagai Wakil Kepala Divisi UKM Esport yang mengasah kemampuan kepemimpinan, komunikasi, dan pemecahan masalah. Memiliki Sertifikat Kompetensi LSP serta menguasai Microsoft Excel, HTML, CSS, PHP, MySQL, dan analisis data.' }}
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-3 rounded-lg bg-white/5 border border-white/10">
                        <p class="text-2xl font-bold text-blue-400">3.27</p>
                        <p class="text-xs text-gray-500 mt-1">GPA</p>
                    </div>
                    <div class="text-center p-3 rounded-lg bg-white/5 border border-white/10">
                        <p class="text-2xl font-bold text-purple-400">S1</p>
                        <p class="text-xs text-gray-500 mt-1">Informatics</p>
                    </div>
                    <div class="text-center p-3 rounded-lg bg-white/5 border border-white/10">
                        <p class="text-2xl font-bold text-cyan-400">LSP</p>
                        <p class="text-xs text-gray-500 mt-1">Certified</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <h2 class="text-3xl font-bold mb-8 text-center text-white animate-on-scroll">What I Bring to the Table</h2>
        <div class="grid md:grid-cols-3 gap-6 mb-16">
            <div class="gradient-border p-6 hover-lift animate-on-scroll">
                <div class="text-4xl text-blue-400 mb-4">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Web Development</h3>
                <p class="text-gray-400">Membangun aplikasi web yang fungsional dan efisien menggunakan HTML, CSS, PHP, dan framework modern seperti Laravel.</p>
            </div>
            <div class="gradient-border p-6 hover-lift animate-on-scroll delay-200">
                <div class="text-4xl text-green-400 mb-4">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Database & Data Analysis</h3>
                <p class="text-gray-400">Pengelolaan basis data MySQL dan analisis data menggunakan Microsoft Excel termasuk Pivot Table dan Lookup formulas.</p>
            </div>
            <div class="gradient-border p-6 hover-lift animate-on-scroll delay-300">
                <div class="text-4xl text-purple-400 mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Teamwork & Leadership</h3>
                <p class="text-gray-400">Terlatih bekerja dalam tim dan memimpin divisi melalui pengalaman organisasi, dengan kemampuan komunikasi dan koordinasi yang kuat.</p>
            </div>
        </div>

        <!-- Education Timeline -->
        <h2 class="text-3xl font-bold mb-8 text-center text-white animate-on-scroll">Education</h2>
        <div class="max-w-3xl mx-auto animate-on-scroll">
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-500 via-purple-500 to-cyan-500"></div>

                <!-- S1 -->
                <div class="relative flex gap-6 mb-8 group">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center flex-shrink-0 z-10 group-hover:scale-110 transition-transform shadow-lg shadow-blue-500/20">
                        <i class="fas fa-graduation-cap text-white text-xl"></i>
                    </div>
                    <div class="gradient-border p-5 flex-1 hover-lift">
                        <div class="flex items-center gap-3 mb-1">
                            <h3 class="text-lg font-bold text-white">S1 Informatika</h3>
                            <span class="px-2 py-0.5 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-400 border border-blue-500/30">Graduated 2026</span>
                        </div>
                        <p class="text-blue-400 font-medium mb-1">Universitas Multi Data Palembang</p>
                        <p class="text-gray-500 text-sm">GPA: 3.27 / 4.00</p>
                        <p class="text-gray-400 text-sm mt-2">Fokus pada pengembangan aplikasi web, basis data, dan analisis sistem. Menyelesaikan proyek kerja praktik dalam pengembangan aplikasi.</p>
                    </div>
                </div>

                <!-- SMA -->
                <div class="relative flex gap-6 mb-8 group">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center flex-shrink-0 z-10 group-hover:scale-110 transition-transform shadow-lg shadow-purple-500/20">
                        <i class="fas fa-school text-white text-xl"></i>
                    </div>
                    <div class="gradient-border p-5 flex-1 hover-lift">
                        <h3 class="text-lg font-bold text-white">SMA</h3>
                        <p class="text-purple-400 font-medium">SMA Negeri 7 Palembang</p>
                    </div>
                </div>

                <!-- SMP -->
                <div class="relative flex gap-6 mb-8 group">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-pink-500 to-orange-500 flex items-center justify-center flex-shrink-0 z-10 group-hover:scale-110 transition-transform shadow-lg shadow-pink-500/20">
                        <i class="fas fa-school text-white text-xl"></i>
                    </div>
                    <div class="gradient-border p-5 flex-1 hover-lift">
                        <h3 class="text-lg font-bold text-white">SMP</h3>
                        <p class="text-pink-400 font-medium">SMP Dharma Bhakti</p>
                    </div>
                </div>

                <!-- SD -->
                <div class="relative flex gap-6 group">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center flex-shrink-0 z-10 group-hover:scale-110 transition-transform shadow-lg shadow-orange-500/20">
                        <i class="fas fa-school text-white text-xl"></i>
                    </div>
                    <div class="gradient-border p-5 flex-1 hover-lift">
                        <h3 class="text-lg font-bold text-white">SD</h3>
                        <p class="text-orange-400 font-medium">SD Negeri 213 Palembang</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills & Tools -->
        <h2 class="text-3xl font-bold mb-8 mt-16 text-center text-white animate-on-scroll">Tools & Technologies</h2>
        <div class="max-w-2xl mx-auto animate-on-scroll">
            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fab fa-html5 mr-1 text-orange-400"></i> HTML
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fab fa-css3-alt mr-1 text-blue-400"></i> CSS
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fab fa-php mr-1 text-indigo-400"></i> PHP
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fab fa-laravel mr-1 text-red-400"></i> Laravel
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fas fa-database mr-1 text-cyan-400"></i> MySQL
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fas fa-file-excel mr-1 text-green-400"></i> Microsoft Excel
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fas fa-file-word mr-1 text-blue-400"></i> Microsoft Word
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fas fa-chart-bar mr-1 text-yellow-400"></i> Data Analysis
                </span>
                <span class="px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm font-medium hover:bg-white/10 hover:border-blue-500/30 hover:text-white transition-all cursor-default">
                    <i class="fab fa-git-alt mr-1 text-orange-400"></i> Git
                </span>
            </div>
        </div>
    </div>
</section>
@endsection
