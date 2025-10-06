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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max255' ],
            'last_name' => ['required', 'string', 'max255' ],
            
            'email' => ['required', 'string', 'email', 'max:255' ],
            'tel' => ['required', 'numeric', 'digits_between:10,11' ],

        ];
    }
}
