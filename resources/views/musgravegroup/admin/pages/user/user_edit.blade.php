@extends('musgravegroup.admin.base')

@section('title', 'Edit User')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-2xl font-bold mb-4">Edit User: {{ $user->name }}</h1>

        <form action="{{ route('admin.users.store', $user->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role:</label>
                <select name="role" id="role" class="form-select">
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="moderator" {{ $user->role === 'moderator' ? 'selected' : '' }}>Moderator</option>
                </select>
                @error('role')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Role</button>
        </form>

        <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to Users List</a>
    </div>
@endsection
