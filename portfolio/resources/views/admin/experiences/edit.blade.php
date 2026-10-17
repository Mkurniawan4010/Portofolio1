@extends('layout')

@section('title', 'Edit Experience - Admin')

@section('content')
<section class="py-16">
    <div class="max-w-2xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-8">Edit Experience</h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST" class="bg-white p-8 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block font-semibold mb-2">Company *</label>
                <input type="text" name="company" value="{{ old('company', $experience->company) }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Position *</label>
                <input type="text" name="position" value="{{ old('position', $experience->position) }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Description</label>
                <textarea name="description" rows="4" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">{{ old('description', $experience->description) }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block font-semibold mb-2">Start Date *</label>
                    <input type="date" name="start_date" value="{{ old('start_date', $experience->start_date->format('Y-m-d')) }}" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="block font-semibold mb-2">End Date</label>
                    <input type="date" name="end_date" value="{{ old('end_date', $experience->end_date ? $experience->end_date->format('Y-m-d') : '') }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Location</label>
                <input type="text" name="location" value="{{ old('location', $experience->location) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">
                    <input type="checkbox" name="is_current" value="1" {{ old('is_current', $experience->is_current) ? 'checked' : '' }} class="mr-2">
                    Currently working here
                </label>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Update Experience
                </button>
                <a href="{{ route('admin.experiences.index') }}" class="border border-gray-300 px-6 py-2 rounded hover:bg-gray-50">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</section>
@endsection
