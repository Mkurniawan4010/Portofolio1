@extends('layout')

@section('title', 'Home - My Portofolio Kurniawan')

@section('content')
    <!-- Hero Section - Premium Design with Profile Photo -->
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/4 -left-20 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 py-16 md:py-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                <!-- Left: Text Content -->
                <div class="flex-1 text-center lg:text-left order-2 lg:order-1">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-sm mb-6 animate-on-scroll">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                        <span class="text-sm text-gray-300">Available for opportunities</span>
                    </div>

                    <!-- Greeting -->
                    <div class="mb-4 animate-on-scroll">
                        <span class="inline-block text-xl md:text-2xl font-medium text-gray-300">
                            Hi, I'm
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 font-bold relative">
                                M. Kurniawan
                                <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 rounded-full"></span>
                            </span>
                        </span>
                    </div>

                    <!-- Main Title with Gradient -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight animate-on-scroll">
                        <span class="text-white">Building </span>
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-cyan-400">
                            Digital
                        </span>
                        <br class="hidden sm:block">
                        <span class="text-white">Solutions for the Future</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg md:text-xl text-gray-400 mb-3 max-w-xl mx-auto lg:mx-0 animate-on-scroll delay-100">
                        Fresh Graduate in Information Systems passionate about technology, digital innovation, and continuous learning.
                    </p>

                    <!-- Description -->
                    <p class="text-base md:text-lg text-gray-500 mb-8 max-w-lg mx-auto lg:mx-0 animate-on-scroll delay-200">
                        From web development and database management to system analysis, I enjoy creating solutions that are functional, efficient, and impactful. Ready to bring enthusiasm, adaptability, and a growth mindset to every opportunity.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 animate-on-scroll delay-300">
                        <a href="#certificates" class="group relative px-7 py-3.5 rounded-xl font-semibold text-white overflow-hidden transition-all duration-300 hover:shadow-[0_0_40px_rgba(59,130,246,0.4)]">
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 opacity-80 group-hover:opacity-100 transition-opacity"></span>
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 blur-lg opacity-50 group-hover:opacity-80 transition-opacity"></span>
                            <span class="relative flex items-center gap-2">
                                <i class="fas fa-rocket"></i>
                                View My Work
                            </span>
                        </a>

                        <a href="{{ route('contact') }}" class="group relative px-7 py-3.5 rounded-xl font-semibold text-white overflow-hidden transition-all duration-300">
                            <span class="absolute inset-0 bg-white/5 border border-white/20 group-hover:border-white/40 transition-colors"></span>
                            <span class="absolute inset-0 bg-white/5 blur-lg opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            <span class="relative flex items-center gap-2">
                                <i class="fas fa-paper-plane"></i>
                                Get In Touch
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Right: Profile Photo -->
                <div class="order-1 lg:order-2 flex-shrink-0 animate-on-scroll delay-200">
                    <div class="relative">
                        <!-- Floating Animation Wrapper -->
                        <div class="animate-float tilt-3d" data-tilt-max="15" data-tilt-scale="1.05">
                            <!-- Glassmorphism Frame -->
                            <div class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 lg:w-[360px] lg:h-[360px] rounded-full p-1 bg-gradient-to-br from-blue-500 via-purple-500 to-cyan-500" style="transform-style: preserve-3d;">
                                <!-- Inner Glass Effect -->
                                <div class="w-full h-full rounded-full bg-gray-900/80 backdrop-blur-xl border-4 border-gray-800/50 overflow-hidden shadow-2xl" style="transform: translateZ(30px);">
                                    <!-- Profile Image or Placeholder -->
                                    <img
                                        src="{{ asset('images/foto_diri/foto.png') }}"
                                        alt="Profile Photo"
                                        class="w-full h-full object-cover"
                                        onerror="this.style.display='none'; document.getElementById('profile-placeholder').style.display='flex';"
                                    >
                                    <!-- Placeholder (shown when no image) -->
                                    <div id="profile-placeholder" class="w-full h-full hidden items-center justify-center bg-gradient-to-br from-gray-800 to-gray-900">
                                        <div class="text-center">
                                            <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full bg-gradient-to-br from-blue-500/30 to-purple-500/30 flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-user text-4xl sm:text-5xl md:text-6xl text-gray-400"></i>
                                            </div>
                                            <p class="text-xs sm:text-sm text-gray-500 px-2">Your Photo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Glow Effect Behind -->
                            <div class="absolute inset-0 -m-4 bg-gradient-to-br from-blue-500/40 via-purple-500/40 to-cyan-500/40 rounded-full blur-2xl opacity-60 animate-pulse-slow"></div>

                            <!-- Decorative Elements -->
                            <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-blue-500 animate-ping"></div>
                            <div class="absolute -bottom-2 -left-2 w-4 h-4 rounded-full bg-purple-500"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden md:block">
                <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-2">
                    <div class="w-1.5 h-3 bg-white/50 rounded-full animate-scroll-dot"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-24 relative">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-medium mb-4 animate-on-scroll">
                    Technical Expertise
                </span>
                <h2 class="text-4xl font-bold text-white mb-4 animate-on-scroll">
                    Skills & Technologies
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto animate-on-scroll delay-100">
                    A comprehensive toolkit built over years of professional development
                </p>
            </div>

            @php
                $groupedSkills = $skills->groupBy('category');
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($groupedSkills as $category => $categorySkills)
                    <div class="group gradient-border p-6 hover-lift animate-on-scroll relative overflow-hidden tilt-3d" data-tilt-max="10" style="transform-style: preserve-3d;">
                        <!-- Hover glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <div class="relative z-10" style="transform: translateZ(20px);">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center">
                                    <i class="fas fa-layer-group text-blue-400"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-white">{{ $category }}</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach($categorySkills as $skill)
                                    <span class="inline-flex items-center gap-1.5 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white px-3 py-1.5 rounded-lg text-sm font-medium border border-white/10 hover:border-white/20 transition-all duration-200 cursor-default">
                                        @if($skill->icon)
                                            <i class="{{ $skill->icon }} text-xs"></i>
                                        @endif
                                        {{ $skill->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="py-24 relative">
        <!-- Section bg effect -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-blue-500/5 to-transparent"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-400 text-sm font-medium mb-4 animate-on-scroll">
                    Achievements
                </span>
                <h2 class="text-4xl font-bold text-white mb-4 animate-on-scroll">
                    Certifications & Awards
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto animate-on-scroll delay-100">
                    Continuous learning and professional development
                </p>
            </div>

            @if($certificates->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                    @foreach($certificates as $cert)
                        <div class="group gradient-border overflow-hidden hover-lift animate-on-scroll tilt-3d" data-tilt-max="10" style="transform-style: preserve-3d;">
                            @if($cert->image)
                                <div class="h-48 bg-gray-800/50 overflow-hidden relative cursor-pointer" onclick="openLightbox('{{ asset('images/' . $cert->image) }}', '{{ $cert->name }}', '{{ $cert->issuer }}')" style="transform: translateZ(15px); transform-style: preserve-3d;">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent z-10"></div>
                                    <img src="{{ asset('images/' . $cert->image) }}" alt="{{ $cert->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm">
                                            <i class="fas fa-search-plus text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="h-48 bg-gradient-to-br from-blue-600/20 to-purple-600/20 flex items-center justify-center relative overflow-hidden" style="transform: translateZ(15px); transform-style: preserve-3d;">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10"></div>
                                    <i class="fas fa-certificate text-blue-400 text-5xl relative z-10" style="transform: translateZ(10px);"></i>
                                </div>
                            @endif
                            <div class="p-5" style="transform: translateZ(25px);">
                                <h3 class="font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">{{ $cert->name }}</h3>
                                <p class="text-sm text-purple-400 font-semibold mb-2">{{ $cert->issuer }}</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    {{ $cert->issue_date->format('d M Y') }}
                                </div>
                                @if($cert->description)
                                    <p class="text-sm text-gray-400 mt-3 line-clamp-2">{{ $cert->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center animate-on-scroll delay-300">
                    <a href="{{ route('certificates') }}" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl font-semibold transition-all duration-300 hover:gap-3 bg-white/5 border border-white/10 text-white hover:border-blue-500/50 hover:text-blue-400">
                        View All Certificates
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            @else
                <div class="text-center text-gray-500 py-8">
                    <p>Belum ada sertifikat</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Organizations Section -->
    <section class="py-24 relative">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-sm font-medium mb-4 animate-on-scroll">
                    Leadership
                </span>
                <h2 class="text-4xl font-bold text-white mb-4 animate-on-scroll">
                    Organizations & Achievements
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto animate-on-scroll delay-100">
                    Building teams and making impact through collaboration
                </p>
            </div>

            @if($organizations->count() > 0)
                <div class="space-y-4 mb-10">
                    @foreach($organizations as $org)
                        <div class="group gradient-border p-6 hover-lift animate-on-scroll tilt-3d" data-tilt-max="8" style="transform-style: preserve-3d;">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4" style="transform: translateZ(20px);">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors">{{ $org->position }}</h3>
                                        @if($org->is_active)
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 border border-green-500/30">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                                                Active
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-500/20 text-gray-400 border border-gray-500/30">
                                                Completed
                                            </span>
                                        @endif
                                    </div>
                                    <p class="text-blue-400 font-medium mb-2">{{ $org->name }}</p>
                                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                                        <span class="flex items-center gap-1">
                                            <i class="fas fa-calendar-alt"></i>
                                            {{ $org->start_date->format('M Y') }} -
                                            @if($org->end_date)
                                                {{ $org->end_date->format('M Y') }}
                                            @else
                                                Present
                                            @endif
                                        </span>
                                    </div>
                                    @if($org->description)
                                        <p class="text-gray-400 mt-3">{{ $org->description }}</p>
                                    @endif
                                </div>
                                @if($org->achievement)
                                    <div class="md:w-1/3">
                                        <div class="bg-gradient-to-r from-green-500/10 to-emerald-500/10 border border-green-500/20 rounded-lg p-4">
                                            <div class="flex items-start gap-2">
                                                <i class="fas fa-trophy text-yellow-400 mt-1"></i>
                                                <div>
                                                    <p class="text-xs text-gray-500 uppercase tracking-wider">Achievement</p>
                                                    <p class="text-green-400 font-medium">{{ $org->achievement }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center animate-on-scroll delay-300">
                    <a href="{{ route('organizations') }}" class="inline-flex items-center gap-2 px-8 py-3 rounded-xl font-semibold transition-all duration-300 hover:gap-3 bg-white/5 border border-white/10 text-white hover:border-purple-500/50 hover:text-purple-400">
                        View All Achievements
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            @else
                <div class="text-center text-gray-500 py-8">
                    <p>Belum ada data organisasi</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-24 relative">
        <!-- Section bg effect -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-cyan-500/5 to-transparent"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-sm font-medium mb-4 animate-on-scroll">
                    Career
                </span>
                <h2 class="text-4xl font-bold text-white mb-4 animate-on-scroll">
                    Work Experience
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto animate-on-scroll delay-100">
                    Professional journey and the lessons learned along the way
                </p>
            </div>

            @if($experiences->count() > 0)
                <div class="space-y-4">
                    @foreach($experiences as $exp)
                        <div class="group gradient-border p-6 border-l-4 border-l-blue-500 hover-lift animate-on-scroll tilt-3d" data-tilt-max="8" style="transform-style: preserve-3d;">
                            <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-4" style="transform: translateZ(20px);">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="text-2xl font-bold text-white group-hover:text-cyan-400 transition-colors">{{ $exp->position }}</h3>
                                        @if($exp->is_current)
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/20 text-cyan-400 border border-cyan-500/30">
                                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                                                CURRENT
                                            </span>
                                        @endif
                                    </div>
                                    <p class="text-lg text-blue-400 font-semibold mb-3">{{ $exp->company }}</p>
                                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-1">
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $exp->location }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <i class="fas fa-calendar-alt"></i>
                                            {{ $exp->start_date->format('M Y') }} -
                                            @if($exp->end_date)
                                                {{ $exp->end_date->format('M Y') }}
                                            @else
                                                Present
                                            @endif
                                        </span>
                                    </div>
                                    @if($exp->description)
                                        <p class="text-gray-300 leading-relaxed">{{ $exp->description }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center text-gray-500 py-8">
                    <p>Belum ada pengalaman kerja</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- CTA Background -->
        <div class="absolute inset-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-600/20 via-purple-600/20 to-cyan-600/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-3xl mx-auto px-4 text-center relative z-10 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                Let's Build Something
                <span class="block mt-2 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-cyan-400">
                    Amazing Together
                </span>
            </h2>
            <p class="text-xl text-gray-400 mb-10 max-w-xl mx-auto">
                I'm always excited to discuss new projects, creative ideas, or opportunities to be part of your vision.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="group relative px-10 py-4 rounded-xl font-bold text-lg text-white overflow-hidden transition-all duration-300 hover:shadow-[0_0_60px_rgba(59,130,246,0.5)]">
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 opacity-90 group-hover:opacity-100 transition-opacity"></span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></span>
                    <span class="relative flex items-center gap-3">
                        <i class="fas fa-paper-plane"></i>
                        Start a Conversation
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection

<style>
    /* Additional Hero Animations */
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slide-up {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scroll-dot {
        0%, 100% {
            transform: translateY(0);
            opacity: 1;
        }
        50% {
            transform: translateY(8px);
            opacity: 0.5;
        }
    }

    .animate-fade-in {
        animation: fade-in 0.8s ease-out forwards;
    }

    .animate-slide-up {
        opacity: 0;
        animation: slide-up 0.8s ease-out forwards;
    }

    .delay-100 { animation-delay: 100ms; }
    .delay-200 { animation-delay: 200ms; }
    .delay-300 { animation-delay: 300ms; }
    .delay-400 { animation-delay: 400ms; }
    .delay-500 { animation-delay: 500ms; }

    .animate-scroll-dot {
        animation: scroll-dot 2s ease-in-out infinite;
    }

    /* Line clamp for descriptions */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Button shine effect */
    @keyframes shine {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }

    .group:active::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: shine 0.5s ease-out;
    }
</style>