@extends('layout')

@section('title', 'Create Project - Admin')

@section('content')
<section class="py-16">
    <div class="max-w-2xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-8">Create New Project</h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow">
            @csrf

            <div class="mb-6">
                <label class="block font-semibold mb-2">Project Title *</label>
                <input type="text" name="title" value="{{ old('title') }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Description *</label>
                <textarea name="description" rows="6" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">{{ old('description') }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Project Image</label>
                <input type="file" name="image" accept="image/*" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                <p class="text-sm text-gray-500 mt-2">Max size: 2MB (JPEG, PNG, JPG, GIF)</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block font-semibold mb-2">Project URL</label>
                    <input type="url" name="url" value="{{ old('url') }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="block font-semibold mb-2">GitHub URL</label>
                    <input type="url" name="github_url" value="{{ old('github_url') }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block font-semibold mb-2">Technology Stack</label>
                    <input type="text" name="technology_stack" value="{{ old('technology_stack') }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600"
                        placeholder="e.g. Laravel, Vue.js, Tailwind">
                    <p class="text-sm text-gray-500 mt-2">Separate with commas</p>
                </div>

                <div>
                    <label class="block font-semibold mb-2">Order</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Create Project
                </button>
                <a href="{{ route('admin.projects.index') }}" class="border border-gray-300 px-6 py-2 rounded hover:bg-gray-50">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</section>
@endsection
