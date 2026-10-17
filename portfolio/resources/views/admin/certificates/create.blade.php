@extends('layout')

@section('title', 'Create Certificate - Admin')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">
        <i class="fas fa-certificate text-blue-600 mr-2"></i>Tambah Sertifikat Baru
    </h1>

    <div class="bg-white rounded-lg shadow p-8">
        <form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Sertifikat *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('name') border-red-500 @enderror">
                @error('name')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="issuer" class="block text-gray-700 font-semibold mb-2">Penerbit/Organisasi *</label>
                <input type="text" id="issuer" name="issuer" value="{{ old('issuer') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('issuer') border-red-500 @enderror">
                @error('issuer')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="issue_date" class="block text-gray-700 font-semibold mb-2">Tanggal Penerbitan *</label>
                <input type="date" id="issue_date" name="issue_date" value="{{ old('issue_date') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('issue_date') border-red-500 @enderror">
                @error('issue_date')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Gambar Sertifikat</label>
                <input type="file" id="image" name="image" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600 @error('image') border-red-500 @enderror">
                <p class="text-gray-500 text-sm mt-2">Format: JPG, PNG, GIF | Max: 2MB</p>
                @error('image')
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
                <a href="{{ route('admin.certificates.index') }}" class="bg-gray-500 text-white px-8 py-2 rounded-lg font-semibold hover:bg-gray-600 transition">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
