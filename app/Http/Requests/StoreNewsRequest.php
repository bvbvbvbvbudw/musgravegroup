<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'small_description' => 'nullable|string',
            'is_popular' => 'nullable',
//            'media_id' => 'required|exists:media,id',
            'brand_id' => 'nullable|exists:brands,id',
            'is_convert' => 'nullable',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'small_description.string' => 'The small description must be a string.',
            'is_popular.boolean' => 'The is popular field must be true or false.',
            'media_id.required' => 'The media field is required.',
            'media_id.exists' => 'The selected media is invalid.',
            'brand_id.exists' => 'The selected brand is invalid.',
            'content.required' => 'The content field is required.',
            'content.string' => 'The content must be a string.',
        ];
    }
}
