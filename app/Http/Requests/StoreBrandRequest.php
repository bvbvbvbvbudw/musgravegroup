<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'name' => 'required|string',
            'url' => 'required|string',
            'small_description' => 'nullable|string',
            'media_bg_id' => 'nullable',
            'media_logo_id' => 'nullable',
            'is_convert' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'small_description.string' => 'The small description must be a string.',
            'media_bg_id.exists' => 'The selected media background is invalid.',
            'media_logo_id.exists' => 'The selected media logo is invalid.',
            'is_convert.boolean' => 'The is convert field must be true or false.',
        ];
    }
}
