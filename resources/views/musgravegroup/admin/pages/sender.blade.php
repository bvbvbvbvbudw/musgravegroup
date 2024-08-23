@extends('musgravegroup.admin.base')

@section('title', 'Users vacancy Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($users as $user)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $user->title }} {{ $user->forenames }} {{ $user->surname }}</h1>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Telephone:</h2>
                    <p>{{ $user->telephone }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Email:</h2>
                    <p>{{ $user->email }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Preferred Categories(ID):</h2>
                    <p>{{ implode(', ', $user->preferred_categories) }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Preferred Locations(ID):</h2>
                    <p>{{ implode(', ', $user->preferred_locations) }}</p>
                </div>

                <form action="{{ route('admin.users.sender.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                        Delete User
                    </button>
                </form>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
