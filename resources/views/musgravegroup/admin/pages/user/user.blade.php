@extends('musgravegroup.admin.base')

@section('title', 'Users Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($users as $user)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $user->name }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Role:</h2>
                    <p>{{ $user->role ?? 'None' }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to Users List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
