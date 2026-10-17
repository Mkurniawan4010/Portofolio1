@extends('layout')

@section('title', 'Edit Skill - Admin')

@section('content')
<section class="py-16">
    <div class="max-w-2xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-8">Edit Skill</h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST" class="bg-white p-8 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block font-semibold mb-2">Skill Name *</label>
                <input type="text" name="name" value="{{ old('name', $skill->name) }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Category *</label>
                <input type="text" name="category" value="{{ old('category', $skill->category) }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Proficiency Level (1-100)</label>
                <input type="number" name="proficiency" value="{{ old('proficiency', $skill->proficiency) }}" min="1" max="100" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Description</label>
                <textarea name="description" rows="4" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">{{ old('description', $skill->description) }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Icon (Font Awesome class)</label>
                <input type="text" name="icon" value="{{ old('icon', $skill->icon) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Update Skill
                </button>
                <a href="{{ route('admin.skills.index') }}" class="border border-gray-300 px-6 py-2 rounded hover:bg-gray-50">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</section>
@endsection
