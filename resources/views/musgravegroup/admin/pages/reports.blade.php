@extends('musgravegroup.admin.base')

@section('title', 'Reports Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($reports as $report)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $report->title }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">File:</h2>
                    <p><a target="_blank" href="{{ asset($report->file->path) }}">Open</a></p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Media:</h2>
                    <img src="{{ asset($report->media->path) }}" alt="IMAGE">
                </div>


                <div class="flex space-x-4">
                    <a href="{{ route('admin.reports.edit', $report->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.reports.destroy', $report->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.reports.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to Reports List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $reports->links('pagination::bootstrap-4') }}
    </div>
@endsection
