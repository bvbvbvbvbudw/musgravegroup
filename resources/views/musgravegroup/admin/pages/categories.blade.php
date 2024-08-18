@extends('musgravegroup.admin.base')

@section('title', 'Category Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($categories as $category)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $category->category }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Category:</h2>
                    <p>{{ $category->category }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.vacancy.category.edit', $category->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.vacancy.category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.vacancy.category.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to News List</a>
            </div>
        @endforeach
    </div>
@endsection
