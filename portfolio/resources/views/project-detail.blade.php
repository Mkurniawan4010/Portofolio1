@extends('layout')

@section('title', $project->title . ' - My Portofolio Kurniawan')

@section('content')
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4">
        <a href="{{ route('portfolio') }}" class="text-blue-600 hover:text-blue-700 mb-4 inline-block">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>

        <h1 class="text-5xl font-bold mb-4">{{ $project->title }}</h1>

        @if($project->image)
            <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-96 object-cover rounded-lg mb-8">
        @endif

        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div class="md:col-span-2">
                <h2 class="text-2xl font-bold mb-4">Project Description</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    {{ $project->description }}
                </p>

                @if($project->technology_stack)
                    <h3 class="text-xl font-bold mb-4">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2 mb-8">
                        @foreach(explode(',', $project->technology_stack) as $tech)
                            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <div class="bg-gray-100 p-6 rounded-lg sticky top-20">
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    
                    @if($project->url)
                        <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" 
                            class="block w-full bg-blue-600 text-white px-4 py-2 rounded mb-3 text-center hover:bg-blue-700 transition">
                            <i class="fas fa-external-link-alt"></i> Visit Website
                        </a>
                    @endif

                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" 
                            class="block w-full border border-blue-600 text-blue-600 px-4 py-2 rounded mb-3 text-center hover:bg-blue-50 transition">
                            <i class="fab fa-github"></i> View Code
                        </a>
                    @endif

                    <div class="border-t pt-4 mt-4">
                        <p class="text-sm text-gray-600">
                            <strong>Created:</strong><br>
                            {{ $project->created_at->format('F j, Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @if($relatedProjects->count() > 0)
            <hr class="my-12">
            <h2 class="text-3xl font-bold mb-8">Related Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedProjects as $related)
                    <div class="bg-gray-100 rounded-lg overflow-hidden hover:shadow-lg transition">
                        @if($related->image)
                            <img src="{{ asset('images/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover">
                        @else
                            <div class="w-full h-40 bg-gray-300 flex items-center justify-center">
                                <i class="fas fa-image text-2xl text-gray-500"></i>
                            </div>
                        @endif
                        <div class="p-4">
                            <h3 class="font-bold mb-2">{{ $related->title }}</h3>
                            <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $related->description }}</p>
                            <a href="{{ route('project.show', $related->id) }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                                View Project <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
