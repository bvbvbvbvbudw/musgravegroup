@extends('musgravegroup.admin.base')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-semibold mb-6">{{ $title }}</h1>

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($item))
            @method('PUT')
        @endif

        @foreach ($fields as $field)
            <div class="mb-4">
                <label for="{{ $field['name'] }}" class="block text-gray-700">{{ $field['label'] }}</label>

                @if ($field['type'] === 'text')
                    <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           value="{{ old($field['name'], $item->{$field['name']} ?? '') }}"
                           class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                @elseif ($field['type'] === 'textarea')
                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                              rows="5"
                              class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                              {{ $field['required'] ? 'required' : '' }}>{{ old($field['name'], $item->{$field['name']} ?? '') }}</textarea>
                @elseif ($field['type'] === 'checkbox')
                    <input type="checkbox" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           {{ old($field['name'], $item->{$field['name']} ?? '') ? 'checked' : '' }}
                           class="mt-2 @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                @elseif ($field['type'] === 'file')
                    <input type="file" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                @elseif ($field['type'] === 'select')
                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                            class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                        <!-- Options should be populated here -->
                    </select>
                @endif

                @error($field['name'])
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        @endforeach

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">{{ isset($item) ? 'Update' : 'Create' }}</button>
    </form>
@endsection
