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
            'description' => 'nullable|max:5000',
            'duration' => 'nullable|max:50',
            'start_dates' => 'nullable|date|min:10|max:10',
            'fee' => 'nullable|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/|not_in:0|max:50',
            'language' => 'nullable|max:50',
            'seats_available' => 'nullable|digits_between:0,10|numeric',
        ];
    }
}
