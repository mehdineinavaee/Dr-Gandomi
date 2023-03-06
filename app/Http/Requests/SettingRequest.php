<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'phone_number' => 'nullable|digits:11|numeric',
            'footer_description' => 'nullable|max:500',
            'address' => 'nullable|max:500',
            'email' => 'nullable|max:50|email',
            'tel' => 'nullable|digits:11|numeric',
            'facebook' => 'nullable|max:50|url',
            'instagram' => 'nullable|max:50|url',
            'linkedin' => 'nullable|max:50|url',
            'twitter' => 'nullable|max:50|url',
            'google_map_area' => 'nullable|max:1000',
        ];
    }
}
