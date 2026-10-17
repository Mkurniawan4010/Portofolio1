@extends('layout')

@section('title', 'Admin - Skills')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold">Manage Skills</h1>
            <a href="{{ route('admin.skills.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                <i class="fas fa-plus"></i> Add Skill
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-6">
            @forelse($skills as $skill)
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $skill->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $skill->category }}</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.skills.edit', $skill->id) }}" class="text-blue-600 hover:text-blue-700">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1">
                            <span class="text-xs font-semibold">Proficiency</span>
                            <span class="text-xs">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-8 text-gray-500">No skills found</div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $skills->links() }}
        </div>
    </div>
</section>
@endsection
