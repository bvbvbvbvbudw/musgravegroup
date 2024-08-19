<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'file_id' => 'required|mimes:pdf',
            'is_convert' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'file_id.required' => 'The file field is required.',
            'file_id.mimes' => 'The file must be a PDF.',
            'is_convert.boolean' => 'The is convert field must be true or false.',
        ];
    }
}
