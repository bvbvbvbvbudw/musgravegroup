@extends('musgravegroup.admin.base')

@section('title', 'Users applied Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($users as $user)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $user->vacancy->title }} | <a target="_blank" style="color:#30a2b6" href="{{ route('page.careers.vacancies.show', $user->vacancy->url) }}">Show me</a></h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Name:</h2>
                    <p>{{ $user->title }} {{ $user->first_name }} {{ $user->surname }}</p>
                </div>


                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Address:</h2>
                    <p>Address Line 1: {{ $user->address_line_1 }}</p>
                    <p>Address Line 2: {{ $user->address_line_2 ?? '' }}</p>
                    <p>Town: {{ $user->town }}</p>
                    <p>County: {{ $user->country }}</p>
                    <p>Postcode: {{ $user->postcode }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Phone:</h2>
                    <p>(+{{ $user->dial_code }}) {{ $user->phone }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Email:</h2>
                    <p>{{ $user->email }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Age:</h2>
                    <p>{{ $user->is_over_16 ? "Over 16" : "Not over 16" }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Eligible to work in EU:</h2>
                    <p>{{ $user->is_eligible_to_work_in_eu ? "Yes" : "No" }}</p>
                    <p>Details: {{ $user->eligibility_details ?? "" }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Has criminal convictions:</h2>
                    <p>{{ $user->has_criminal_convictions ? "Yes" : "No" }}</p>
                    <p>Details: {{ $user->conviction_details ?? "" }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Role advertised source:</h2>
                    <p>{{ $user->role_advertised_source }}</p>
                </div>

                <a href="{{ route('admin.vacancy.location.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to users List</a>
                <div class="flex space-x-4">
                    <form action="{{ route('admin.users.applied.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
