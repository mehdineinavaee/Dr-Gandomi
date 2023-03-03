<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'description' => 'max:5000',
            'duration' => 'max:50',
            'start_dates' => 'date|max:10|min:10',
            'fee' => 'regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/|not_in:0|max:50',
            'language' => 'max:50',
            'seats_available' => 'max:10|numeric',
        ];
    }
}
