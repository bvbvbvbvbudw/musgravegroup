<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserSupplierRequest extends FormRequest
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
            'brand_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:1000',
            'mobileTelephone' => 'required|string|max:20', // updated to match the log
            'name' => 'required|string|max:255',
            'applicantEmail' => 'required|email|max:255', // updated to match the log
            'formData.33' => 'nullable|string', // specific validation for formData fields
            'formData.7495' => 'nullable|string',
            'formData.1312' => 'nullable|string',
            'product_name' => 'nullable|string|max:255',
            'type_of_product' => 'nullable|string|max:255', // updated to match the log
            'description_few' => 'nullable|string',
            'manufacturing_your_product' => 'nullable|string', // updated to string
            'product_made' => 'nullable|string|max:255',
            'market_place' => 'nullable|string|max:255',
            'products_similar' => 'nullable|string',
            'product_fit' => 'nullable|string|max:255',
            'additional_comment' => 'nullable|string',
        ];
    }
}
