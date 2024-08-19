@extends('musgravegroup.admin.base')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-semibold mb-6">{{ $title }}</h1>
    @if (session('status'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($model))
            @method('PUT')
        @endif

        @foreach ($fields as $field)
            <div class="mb-4">
                <label for="{{ $field['name'] }}" class="block text-gray-700">{{ $field['label'] }}</label>

                @if ($field['type'] === 'text')
                    <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           value="{{ old($field['name'], $model->{$field['name']} ?? '') }}"
                           class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>

                @elseif ($field['type'] === 'textarea')
                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                              rows="5"
                              class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                              {{ $field['required'] ? 'required' : '' }}>{{ old($field['name'], $model->{$field['name']} ?? '') }}</textarea>

                @elseif ($field['type'] === 'checkbox')
                    <input type="checkbox" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           {{ old($field['name'], $model->{$field['name']} ?? false) ? 'checked' : '' }}
                           class="mt-2 @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                @elseif ($field['type'] === 'file')
                    @if (isset($model->media) && isset($model->media->path))
                        @php
                            $filePath = url($model->media->path);
                            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                            $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                        @endphp
                        @if (in_array(strtolower($fileExtension), $imageExtensions))
                            <img src="{{ $filePath }}" alt="Uploaded image" class="w-32 h-32 object-cover mb-4">
                        @else
                            <a href="{{ $filePath }}" target="_blank" class="text-blue-500 underline">Download File</a>
                        @endif
                    @endif
                    <input type="file" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                           class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>

                @elseif ($field['type'] === 'select')
                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}"
                            class="w-full mt-2 p-2 border rounded @error($field['name']) border-red-500 @enderror"
                        {{ $field['required'] ? 'required' : '' }}>
                        <option value="">Select a brand</option>
                        @foreach ($field['options'] as $value => $label)
                            <option value="{{ $value }}"
                                {{ old($field['name'], $model->{$field['name']} ?? '') == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                @endif

                @error($field['name'])
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        @endforeach

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">
            {{ isset($model) ? 'Update' : 'Create' }}
        </button>
    </form>
    <style>
        .cke_notifications_area {
            display: none!important;
        }
    </style>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(function (textarea) {
                CKEDITOR.replace(textarea);
            });
        })
    </script>
@endsection
