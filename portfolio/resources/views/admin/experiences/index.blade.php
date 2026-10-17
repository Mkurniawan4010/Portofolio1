@extends('layout')

@section('title', 'Admin - Experiences')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold">Manage Experiences</h1>
            <a href="{{ route('admin.experiences.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                <i class="fas fa-plus"></i> Add Experience
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Position</th>
                        <th class="px-6 py-3 text-left font-semibold">Company</th>
                        <th class="px-6 py-3 text-left font-semibold">Period</th>
                        <th class="px-6 py-3 text-left font-semibold">Status</th>
                        <th class="px-6 py-3 text-left font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $experience)
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="px-6 py-3 font-semibold">{{ $experience->position }}</td>
                            <td class="px-6 py-3">{{ $experience->company }}</td>
                            <td class="px-6 py-3 text-sm">
                                {{ $experience->start_date->format('M Y') }} 
                                @if($experience->end_date)
                                    - {{ $experience->end_date->format('M Y') }}
                                @else
                                    - Now
                                @endif
                            </td>
                            <td class="px-6 py-3">
                                @if($experience->is_current)
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Current</span>
                                @else
                                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded text-xs">Past</span>
                                @endif
                            </td>
                            <td class="px-6 py-3">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">No experiences found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $experiences->links() }}
        </div>
    </div>
</section>
@endsection
