<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePodcastRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'spotify' => 'nullable|url|max:255',
            'apple' => 'nullable|url|max:255',
            'buzz' => 'nullable|url|max:255',
            'small_description' => 'required|string',
            'content' => 'required|string',
        ];
    }

    /**
     * Get the custom messages for the validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The title is required.',
            'url.required' => 'The URL is required.',
            'url.url' => 'The URL must be a valid URL.',
            'media_id.exists' => 'The selected media is invalid.',
        ];
    }
}
