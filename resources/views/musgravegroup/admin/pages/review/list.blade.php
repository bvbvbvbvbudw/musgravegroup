@extends('musgravegroup.admin.base')

@section('title', 'Manage ' . ucfirst($model))

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-2xl font-bold mb-6">Manage {{ ucfirst($model) }}</h1>

        @foreach($records as $record)
            <div class="bg-white shadow rounded-lg p-6 mb-4">
                <h2 class="text-xl font-semibold mb-2">{{ $record->title ?? 'Unnamed Record' }}</h2>
                <p class="text-gray-600">Status: {{ $record->status }}</p>

                <div class="flex space-x-4 mt-4">
                    <a href="{{ route('admin.manage.index', ['model' => $model, 'id' => $record->id]) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
