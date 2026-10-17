@extends('layout')

@section('title', 'Create Organization - Admin')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">
        <i class="fas fa-briefcase text-blue-600 mr-2"></i>Tambah Organisasi Baru
    </h1>

    <div class="bg-white rounded-lg shadow p-8">
        <form action="{{ route('admin.organizations.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Organisasi/Perusahaan *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('name') border-red-500 @enderror">
                @error('name')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="position" class="block text-gray-700 font-semibold mb-2">Posisi/Jabatan *</label>
                <input type="text" id="position" name="position" value="{{ old('position') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('position') border-red-500 @enderror">
                @error('position')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="start_date" class="block text-gray-700 font-semibold mb-2">Tanggal Mulai *</label>
                    <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('start_date') border-red-500 @enderror">
                    @error('start_date')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="end_date" class="block text-gray-700 font-semibold mb-2">Tanggal Selesai</label>
                    <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('end_date') border-red-500 @enderror">
                    <p class="text-gray-500 text-sm mt-2">Kosongkan jika masih aktif</p>
                    @error('end_date')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="is_active" class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded">
                    <span class="text-gray-700 font-semibold">Organisasi ini masih aktif</span>
                </label>
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi Tanggung Jawab</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="achievement" class="block text-gray-700 font-semibold mb-2">Pencapaian/Kontribusi Utama</label>
                <textarea id="achievement" name="achievement" rows="3" placeholder="Apa pencapaian terbesar Anda di organisasi ini?" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('achievement') border-red-500 @enderror">{{ old('achievement') }}</textarea>
                @error('achievement')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="order" class="block text-gray-700 font-semibold mb-2">Urutan Tampil</label>
                <input type="number" id="order" name="order" value="{{ old('order', 0) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('order') border-red-500 @enderror">
                @error('order')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    <i class="fas fa-check mr-2"></i>Simpan
                </button>
                <a href="{{ route('admin.organizations.index') }}" class="bg-gray-500 text-white px-8 py-2 rounded-lg font-semibold hover:bg-gray-600 transition">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
