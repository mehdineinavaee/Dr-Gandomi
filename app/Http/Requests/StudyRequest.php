<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyRequest extends FormRequest
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
            'file' => 'required|mimes:doc,docx,pdf',
            'title' => 'required|max:255',
            'description' => 'nullable|max:5000',
        ];
    }
}
