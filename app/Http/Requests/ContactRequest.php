<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'email' => 'required|max:50|email',
            'phone_number' => 'required|digits:11|numeric',
            'msg_subject' => 'nullable|max:100',
            'message' => 'required|max:2000',
        ];
    }
}
