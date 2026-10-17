@extends('layout')

@section('title', 'Admin - Projects')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold">Manage Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                <i class="fas fa-plus"></i> Add Project
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
                        <th class="px-6 py-3 text-left font-semibold">Title</th>
                        <th class="px-6 py-3 text-left font-semibold">Technology</th>
                        <th class="px-6 py-3 text-left font-semibold">Order</th>
                        <th class="px-6 py-3 text-left font-semibold">Created</th>
                        <th class="px-6 py-3 text-left font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="px-6 py-3">{{ $project->title }}</td>
                            <td class="px-6 py-3">{{ $project->technology_stack }}</td>
                            <td class="px-6 py-3">{{ $project->order }}</td>
                            <td class="px-6 py-3">{{ $project->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-3">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-blue-600 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
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
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">No projects found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $projects->links() }}
        </div>
    </div>
</section>
@endsection
