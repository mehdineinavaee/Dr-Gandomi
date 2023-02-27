<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'date' => 'required|date|max:10',
            'day' => 'required|max:20',
            'hour' => 'required|max:11',
            'location' => 'required|max:300',
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
        ];
    }
}
