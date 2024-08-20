@extends('musgravegroup.admin.base')

@section('title', 'Vacancy Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($vacancies as $vacancy)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $vacancy->title }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Type:</h2>
                    <p>{{ $vacancy->type ?? '' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Location:</h2>
                    <p>{{ $vacancy->location->location ?? '' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Category:</h2>
                    <p>{{ $vacancy->category->category ?? '' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Contract type:</h2>
                    <p>{{ $vacancy->contract_type ?? 'No contract available' }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">End date:</h2>
                    <p>{{ $vacancy->end_date }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Content:</h2>
                    <p>{!! $vacancy->content->content !!}</p>
                </div>

                @if($vacancy->is_closed)
                    <h2 style="color:red; font-weight: bold">CLOSED</h2>
                @endif


                <div class="flex space-x-4">
                    <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.vacancy.destroy', $vacancy->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.vacancy.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to vacancies List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $vacancies->links('pagination::bootstrap-4') }}
    </div>
@endsection
