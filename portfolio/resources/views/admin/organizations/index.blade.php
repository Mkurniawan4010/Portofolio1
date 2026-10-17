@extends('layout')

@section('title', 'Manage Organizations - Admin')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-4xl font-bold text-gray-900">
            <i class="fas fa-briefcase text-blue-600 mr-2"></i>Kelola Organisasi & Prestasi
        </h1>
        <a href="{{ route('admin.organizations.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            <i class="fas fa-plus mr-2"></i>Tambah Organisasi
        </a>
    </div>

    @if($organizations->count() > 0)
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Posisi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Organisasi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Periode</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach($organizations as $org)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-900 font-semibold">{{ $org->position }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $org->name }}</td>
                            <td class="px-6 py-4 text-gray-700 text-sm">
                                {{ $org->start_date->format('M Y') }} - 
                                @if($org->end_date)
                                    {{ $org->end_date->format('M Y') }}
                                @else
                                    Sekarang
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($org->is_active)
                                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-circle text-green-600 mr-1"></i>Aktif
                                    </span>
                                @else
                                    <span class="inline-block bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-check-circle text-gray-600 mr-1"></i>Selesai
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.organizations.edit', $org) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600 transition">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.organizations.destroy', $org) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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

        @if($organizations->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $organizations->links() }}
            </div>
        @endif
    @else
        <div class="bg-gray-50 rounded-lg p-12 text-center">
            <i class="fas fa-inbox text-6xl text-gray-300 mb-4"></i>
            <p class="text-gray-500 text-lg">Belum ada organisasi. <a href="{{ route('admin.organizations.create') }}" class="text-blue-600 font-semibold hover:underline">Buat satu sekarang</a></p>
        </div>
    @endif
</div>
@endsection
