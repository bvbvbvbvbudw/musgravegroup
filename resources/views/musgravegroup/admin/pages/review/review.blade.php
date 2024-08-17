@extends('musgravegroup.admin.base')

@section('title', 'Review ' . ucfirst($model))

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="bg-white shadow rounded-lg p-6 mb-6">
            <h1 class="text-2xl font-bold mb-4">{{ $record->title ?? 'Unnamed Record' }}</h1>

            <!-- Вывод полей записи на основе getFields -->
            <table class="table-auto w-full mb-6">
                <tbody>
                @foreach($fields as $field)
                    @if (array_key_exists($field['name'], $record->toArray()))
                        <tr>
                            <td class="font-semibold p-2">{{ ucfirst(str_replace('_', ' ', $field['label'])) }}:</td>
                            <td class="p-2">
                                @if ($field['type'] === 'text' || $field['type'] === 'textarea')
                                    @if ($field['name'] === 'content')
                                        {{ $record->{$field['name']} }}
                                    @else
                                        {{ $record->{$field['name']} }}
                                    @endif
                                @elseif ($field['type'] === 'checkbox')
                                    <input type="checkbox"
                                           {{ $record->{$field['name']} ? 'checked' : '' }} disabled>
                                @elseif ($field['type'] === 'file')
                                    @if (isset($record->media) && isset($record->media->path))
                                        @php
                                            $filePath = url($record->media->path);
                                            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                                            $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                                        @endphp
                                        @if (in_array(strtolower($fileExtension), $imageExtensions))
                                            <img src="{{ $filePath }}" alt="Uploaded image" class="w-32 h-32 object-cover mb-4">
                                        @else
                                            <a href="{{ $filePath }}" target="_blank" class="text-blue-500 underline">Download File</a>
                                        @endif
                                    @endif
                                @elseif ($field['type'] === 'select')
                                    {{ $record->{$field['name']} }}
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach

                <!-- Обработка связанных данных -->
                @foreach($record->getRelations() as $relation => $related)
                    @if ($related instanceof \Illuminate\Database\Eloquent\Collection)
                        @foreach($related as $item)
                            <tr>
                                <td class="font-semibold p-2">{{ ucfirst(str_replace('_', ' ', $relation)) }}:</td>
                                <td class="p-2">
                                    @if (isset($item->content))
                                        {{ $item->content }}
                                    @elseif (isset($item->path))
                                        <img src="{{ asset($item->path) }}" alt="Media" class="w-32 h-32">
                                    @else
                                        <pre>{{ json_encode($item, JSON_PRETTY_PRINT) }}</pre>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="font-semibold p-2">{{ ucfirst(str_replace('_', ' ', $relation)) }}:</td>
                            <td class="p-2">
                                @if (isset($related->content))
                                    {{ $related->content }}
                                @elseif (isset($related->path))
                                    <img src="{{ asset($related->path) }}" alt="Media" class="w-32 h-32">
                                @else
                                    <pre>{{ json_encode($related, JSON_PRETTY_PRINT) }}</pre>
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>

            <p class="text-gray-600 mt-4">Status: {{ $record->status }}</p>

            <div class="flex space-x-4 mt-6">
                <form action="{{ route('admin.manage.approve', [$model, $record->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Approve</button>
                </form>

                <form action="{{ route('admin.manage.reject', [$model, $record->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Reject</button>
                </form>
            </div>

            <a href="{{ route('admin.manage.list', ['model' => $model]) }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to {{ ucfirst($model) }} List</a>
        </div>
    </div>
@endsection
