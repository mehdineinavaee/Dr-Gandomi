<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeOneRequest extends FormRequest
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
            'welcome' => 'nullable|max:100',
            'slogan' => 'nullable|max:100',
        ];
    }
}
