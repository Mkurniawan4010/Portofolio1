@extends('layout')

@section('title', 'Sertifikat - My Portofolio Kurniawan')

@section('content')
    <!-- Header -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold mb-2 text-white animate-on-scroll">
                <i class="fas fa-certificate mr-3 text-blue-500"></i>Sertifikat & Penghargaan
            </h1>
            <p class="text-gray-400 animate-on-scroll delay-200">Kumpulan sertifikat dan penghargaan yang telah saya raih</p>
        </div>
    </section>

    <!-- Certificates Grid -->
    <section class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            @if($certificates->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @foreach($certificates as $cert)
                        <div class="gradient-border overflow-hidden hover-lift animate-on-scroll">
                            @if($cert->image)
                                <div class="h-48 bg-gray-800/50 overflow-hidden rounded-t-lg relative cursor-pointer group" onclick="openLightbox('{{ asset('images/' . $cert->image) }}', '{{ $cert->name }}', '{{ $cert->issuer }}')">
                                    <img src="{{ asset('images/' . $cert->image) }}" alt="{{ $cert->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm">
                                            <i class="fas fa-search-plus text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="h-48 bg-gradient-to-br from-blue-600/30 to-purple-600/30 flex items-center justify-center rounded-t-lg">
                                    <i class="fas fa-certificate text-blue-400 text-6xl opacity-80"></i>
                                </div>
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $cert->name }}</h3>
                                <p class="text-blue-400 font-semibold text-lg mb-3">{{ $cert->issuer }}</p>
                                <div class="flex items-center text-gray-500 mb-4">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <span class="text-sm">{{ $cert->issue_date->format('d F Y') }}</span>
                                </div>
                                @if($cert->description)
                                    <p class="text-gray-400 text-sm leading-relaxed">{{ $cert->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($certificates->hasPages())
                    <div class="mt-12 flex justify-center animate-on-scroll delay-300">
                        {{ $certificates->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-16">
                    <i class="fas fa-inbox text-6xl text-gray-700 mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada sertifikat yang ditambahkan</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4 text-center animate-on-scroll">
            <h2 class="text-2xl font-bold text-white mb-4">Tertarik untuk berkolaborasi?</h2>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 rounded-lg font-semibold transition hover-lift glow-blue bg-gradient-to-r from-blue-600 to-blue-700 text-white">
                Hubungi Saya
            </a>
        </div>
    </section>
@endsection