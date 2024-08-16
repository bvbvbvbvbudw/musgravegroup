<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacancyRequest extends FormRequest
{
    public function authorize()
    {
        // Определяем, имеет ли пользователь право отправлять этот запрос
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'contract_type' => 'required|string|max:255',
//            'end_date' => 'required|date|after:today',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',

            'type.required' => 'The type field is required.',
            'type.string' => 'The type must be a string.',
            'type.max' => 'The type may not be greater than 255 characters.',

            'location.string' => 'The location must be a string.',
            'location.max' => 'The location may not be greater than 255 characters.',

            'contract_type.required' => 'The contract type field is required.',
            'contract_type.string' => 'The contract type must be a string.',
            'contract_type.max' => 'The contract type may not be greater than 255 characters.',

            'content.required' => 'The content field is required.',
            'content.string' => 'The content must be a string.',
        ];
    }
}
