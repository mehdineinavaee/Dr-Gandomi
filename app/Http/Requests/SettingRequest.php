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
            'tel' => 'max:11',
            'footer_description' => 'max:500',
            'address' => 'max:500',
            'email' => 'max:50|email',
            'phone' => 'max:11',
            'facebook' => 'max:50',
            'instagram' => 'max:50',
            'linkedin' => 'max:50',
            'twitter' => 'max:50',
            'google_map_area' => 'max:1000',
        ];
    }
}
