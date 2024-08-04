@extends('musgravegroup.admin.base')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-semibold mb-6">{{ $title }}</h1>

    <form action="{{ route('admin.news.store') }}" method="POST">
        @csrf

        @foreach ($fields as $field)
            <div class="mb-4">
                <label for="{{ $field['name'] }}" class="block text-gray-700">{{ $field['label'] }}</label>

                @if ($field['type'] === 'text')
                    <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                @elseif ($field['type'] === 'textarea')
                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                              rows="5"
                              class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                              {{ $field['required'] ? 'required' : '' }}></textarea>
                @endif

                @error($field['name'])
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        @endforeach

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Создать</button>
    </form>
@endsection
