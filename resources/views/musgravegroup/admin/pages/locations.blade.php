@extends('musgravegroup.admin.base')

@section('title', 'Locations Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($locations as $location)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $location->location }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Locaton:</h2>
                    <p>{{ $location->location }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.vacancy.location.edit', $location->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.vacancy.location.destroy', $location->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.vacancy.location.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to locations List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $locations->links('pagination::bootstrap-4') }}
    </div>
@endsection
