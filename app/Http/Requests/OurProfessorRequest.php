<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurProfessorRequest extends FormRequest
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
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'post' => 'required|max:20',
            'twitter' => 'nullable|max:50|url',
            'linkedin' => 'nullable|max:50|url',
            'instagram' => 'nullable|max:50|url',
            'facebook' => 'nullable|max:50|url',
        ];
    }
}
