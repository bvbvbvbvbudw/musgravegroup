@extends('musgravegroup.admin.base')

@section('title', 'Podcasts Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($podcasts as $podcast)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $podcast->title }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Spotify url:</h2>
                    <p>{{ $podcast->spotify ?? 'UNdefind' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Apple url:</h2>
                    <p>{{ $podcast->apple }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Buzz url:</h2>
                    <p>{{ $podcast -> buzz }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Small description:</h2>
                    <p>{{ $podcast -> small_description ?? 'No contract available' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Content:</h2>
                    <p>{{ $podcast -> content }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Media:</h2>
                    <img src="{{ asset($podcast->media->path) }}" alt="IMAGE">
                </div>


                <div class="flex space-x-4">
                    <a href="{{ route('admin.podcasts.edit', $podcast->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.podcasts.destroy', $podcast->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.podcasts.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to News List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $podcasts->links('pagination::bootstrap-4') }}
    </div>
@endsection
