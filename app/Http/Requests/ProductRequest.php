<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'name' => [
                'required',
                'min:3',
                Rule::unique('products', 'name')->ignore($this->route('product')),
            ],
            'stock' => [
                'required',
                'numeric',
                'min:0',
            ],
            'collection_id' => [
                'required',
                Rule::exists('collections', 'id'),
            ],
        ];
    }
}
