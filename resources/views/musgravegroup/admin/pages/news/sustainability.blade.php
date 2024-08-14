@extends('musgravegroup.admin.base')

@section('title', 'News Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($news as $item)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $item->title }}</h1>

                <div class="mb-4">
                    @if ($item->media)
                        <img src="{{ asset($item->media->path) }}" alt="Media" class="w-full h-60 object-cover rounded-lg">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder" class="w-full h-60 object-cover rounded-lg">
                    @endif
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Category:</h2>
                    <p>{{ $item->category->name ?? 'Uncategorized' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Description:</h2>
                    <p>{{ $item->small_description }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Content:</h2>
                    <p>{{ $item->content->content ?? 'No content available' }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.news.sustainability.edit', $item->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.news.sustainability.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.news.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to News List</a>
            </div>
        @endforeach
    </div>
@endsection
