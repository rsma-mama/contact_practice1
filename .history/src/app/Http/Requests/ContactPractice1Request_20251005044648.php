<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPractice1Request extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max255',],
            'last_name' => ['required', 'string', 'max255',],
            'gender' => ['required', 'in:1,2,3',],
            'email' => ['required', 'string', 'email', 'max:255',],
            'tel1' => ['required', 'numeric', 'digits_between:10,11',],
            'tel2' => ['required', 'numeric', 'digits_between:10,11',],
            'tel3' => ['required', 'numeric', 'digits_between:10,11',],

            'address' => ['required', 'string', 'max255',],
            'building' => ['nullable', 'string', 'max255',],
            'detail' => ['required', 'string', 'max:1000',],

        ];
    }
}
