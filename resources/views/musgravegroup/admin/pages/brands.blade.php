@extends('musgravegroup.admin.base')

@section('title', 'Brands Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($brands as $brand)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $brand->title }}</h1>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Name:</h2>
                    <p>{{ $brand->name }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Url:</h2>
                    <p><a target="_blank" href="{{ $brand->url }}">{{ $brand->url }}</a></p>
                </div>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Small description:</h2>
                    <p>{{ $brand->small_description }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Logo:</h2>
                    <img src="{{ asset($brand->logo->path) }}" alt="IMAGE">
                </div>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Background:</h2>
                    <img src="{{ asset($brand->bg->path) }}" alt="IMAGE">
                </div>


                <div class="flex space-x-4">
                    <a href="{{ route('admin.brands.edit', $brand->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.brands.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to brands List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $brands->links('pagination::bootstrap-4') }}
    </div>
@endsection
