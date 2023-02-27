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
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'post' => 'required|max:20',
            'twitter' => 'max:50',
            'linkedin' => 'max:50',
            'instagram' => 'max:50',
            'facebook' => 'max:50',
        ];
    }
}
