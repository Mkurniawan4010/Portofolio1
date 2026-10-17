@extends('layout')

@section('title', 'Portfolio - My Work')

@section('content')
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-4">My Portofolio Kurniawan</h1>
        <p class="text-center text-gray-600 mb-12 text-lg">
            Explore some of my recent projects and work
        </p>

        @if($projects->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($projects as $project)
                    <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-1">
                        @if($project->image)
                            <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                                <i class="fas fa-image text-4xl text-gray-500"></i>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>
                            @if($project->technology_stack)
                                <div class="mb-4">
                                    <div class="flex flex-wrap gap-2">
                                        @foreach(explode(',', $project->technology_stack) as $tech)
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                                                {{ trim($tech) }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="flex gap-3">
                                <a href="{{ route('project.show', $project->id) }}" class="flex-1 text-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    View Details
                                </a>
                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="flex-1 text-center border border-blue-600 text-blue-600 px-4 py-2 rounded hover:bg-blue-50 transition">
                                        <i class="fab fa-github"></i> GitHub
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $projects->links() }}
            </div>
        @else
            <div class="bg-white rounded-lg p-12 text-center">
                <i class="fas fa-inbox text-6xl text-gray-400 mb-4"></i>
                <p class="text-xl text-gray-600">No projects yet. Check back soon!</p>
            </div>
        @endif
    </div>
</section>
@endsection
