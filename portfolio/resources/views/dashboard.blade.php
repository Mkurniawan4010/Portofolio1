<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-lg shadow-lg p-6 mb-8">
                <h3 class="text-2xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p class="opacity-90">Gunakan panel kontrol ini untuk memperbarui dan mengelola konten di situs portofolio Anda.</p>
                <div class="mt-4 flex gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="bg-white text-blue-600 font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition inline-flex items-center gap-2">
                        <span>Lihat Website Utama</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation Grid -->
            <h4 class="text-lg font-semibold text-gray-700 mb-4">Pilih Menu Manajemen:</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($sections as $section)
                    <!-- Card -->
                    <div class="bg-white overflow-hidden shadow-md sm:rounded-lg border border-gray-100 hover:shadow-lg transition duration-200">
                        <div class="p-6 flex flex-col h-full justify-between">
                            <div>
                                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="{{ $section['icon'] }} text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $section['title'] }}</h3>
                                <p class="text-sm text-gray-600 mb-4">{{ $section['description'] }}</p>
                            </div>
                            <div class="mt-4">
                                <a href="{{ $section['route'] }}" class="text-blue-600 hover:text-blue-700 font-semibold text-sm inline-flex items-center gap-1">
                                    <span>Kelola {{ $section['title'] }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

