<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserSupplierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'brand_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:1000',
            'mobileTelephone' => 'required|string|max:20',
            'name' => 'required|string|max:255',
            'applicantEmail' => 'required|email|max:255',
            'formData.33' => 'required|string',
            'formData.7495' => 'nullable|string',
            'formData.1312' => 'required|string',
            'product_name' => 'required|string|max:255',
            'type_of_product' => 'required|string|max:255',
            'description_few' => 'nullable|string',
            'manufacturing_your_product' => 'required|string|max:255',
            'product_made' => 'required|string|max:255',
            'market_place' => 'required|string|max:255',
            'products_similar' => 'required|string',
            'product_fit' => 'required|string|max:255',
            'additional_comment' => 'nullable|string',
        ];
    }
}
