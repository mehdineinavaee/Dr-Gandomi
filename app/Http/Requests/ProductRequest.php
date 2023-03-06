<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'price' => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/|not_in:0|max:50',
            'discount' => 'required|max:3|numeric',
            'edition' => 'required|max:10',
            'description' => 'nullable|max:5000',
        ];
    }
}
