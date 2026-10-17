@extends('layout')

@section('title', 'Organisasi & Prestasi - My Portofolio Kurniawan')

@section('content')
    <!-- Header -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold mb-2 text-white animate-on-scroll">
                <i class="fas fa-briefcase mr-3 text-blue-500"></i>Organisasi & Prestasi
            </h1>
            <p class="text-gray-400 animate-on-scroll delay-200">Pengalaman saya dalam organisasi dan pencapaian yang telah diraih</p>
        </div>
    </section>

    <!-- Organizations List -->
    <section class="py-8">
        <div class="max-w-4xl mx-auto px-4">
            @if($organizations->count() > 0)
                <div class="space-y-6 mb-8">
                    @foreach($organizations as $org)
                        <div class="gradient-border p-6 overflow-hidden hover-lift animate-on-scroll tilt-3d" data-tilt-max="8" style="transform-style: preserve-3d;">
                            <div class="flex justify-between items-start mb-3" style="transform: translateZ(20px);">
                                <div>
                                    <h3 class="text-2xl font-bold text-white">{{ $org->position }}</h3>
                                    <p class="text-blue-400 font-semibold text-lg">{{ $org->name }}</p>
                                </div>
                                <div class="text-right">
                                    @if($org->is_active)
                                        <span class="inline-block bg-green-500/20 text-green-400 px-4 py-2 rounded-full font-bold border border-green-500/30">
                                            <i class="fas fa-circle text-green-400 mr-2"></i>AKTIF
                                        </span>
                                    @else
                                        <span class="inline-block bg-gray-500/20 text-gray-400 px-4 py-2 rounded-full font-semibold border border-gray-500/30">
                                            <i class="fas fa-check-circle text-gray-400 mr-2"></i>SELESAI
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-4 mb-4 text-gray-500">
                                <div>
                                    <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                                    <span>{{ $org->start_date->format('d M Y') }} -
                                        @if($org->end_date)
                                            {{ $org->end_date->format('d M Y') }}
                                        @else
                                            Sekarang
                                        @endif
                                    </span>
                                </div>
                            </div>

                            @if($org->description)
                                <div class="mb-4 text-gray-300 leading-relaxed">
                                    <p>{{ $org->description }}</p>
                                </div>
                            @endif

                            @if($org->achievement)
                                <div class="bg-green-500/10 border-l-4 border-green-500 px-4 py-3 rounded-r mt-4">
                                    <div class="flex items-start">
                                        <i class="fas fa-star text-green-400 mr-3 mt-1 flex-shrink-0"></i>
                                        <div>
                                            <p class="font-semibold text-green-400">Pencapaian Utama:</p>
                                            <p class="text-green-300 mt-1">{{ $org->achievement }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($organizations->hasPages())
                    <div class="mt-12 flex justify-center animate-on-scroll delay-300">
                        {{ $organizations->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-16">
                    <i class="fas fa-inbox text-6xl text-gray-700 mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada data organisasi yang ditambahkan</p>
                </div>
            @endif
        </div>
    </section>



    <!-- CTA Section -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4 text-center animate-on-scroll">
            <h2 class="text-2xl font-bold text-white mb-4">Mari kita kolaborasi! 🚀</h2>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 rounded-lg font-semibold transition hover-lift glow-blue bg-gradient-to-r from-blue-600 to-blue-700 text-white">
                Hubungi Saya
            </a>
        </div>
    </section>
@endsection