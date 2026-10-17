@extends('layout')

@section('title', 'Manage Certificates - Admin')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-4xl font-bold text-gray-900">
            <i class="fas fa-certificate text-blue-600 mr-2"></i>Kelola Sertifikat
        </h1>
        <a href="{{ route('admin.certificates.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            <i class="fas fa-plus mr-2"></i>Tambah Sertifikat
        </a>
    </div>

    @if($certificates->count() > 0)
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Penerbit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Order</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach($certificates as $cert)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-900 font-semibold">
                                @if($cert->image)
                                    <img src="{{ asset('images/' . $cert->image) }}" alt="{{ $cert->name }}" class="w-10 h-10 rounded mr-2 inline-block">
                                @endif
                                {{ $cert->name }}
                            </td>
                            <td class="px-6 py-4 text-gray-700">{{ $cert->issuer }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $cert->issue_date->format('d M Y') }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $cert->order }}</td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.certificates.edit', $cert) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600 transition">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.certificates.destroy', $cert) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600 transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($certificates->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $certificates->links() }}
            </div>
        @endif
    @else
        <div class="bg-gray-50 rounded-lg p-12 text-center">
            <i class="fas fa-inbox text-6xl text-gray-300 mb-4"></i>
            <p class="text-gray-500 text-lg">Belum ada sertifikat. <a href="{{ route('admin.certificates.create') }}" class="text-blue-600 font-semibold hover:underline">Buat satu sekarang</a></p>
        </div>
    @endif
</div>
@endsection
