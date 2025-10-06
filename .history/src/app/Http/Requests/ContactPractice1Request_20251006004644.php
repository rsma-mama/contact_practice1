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
     * バリデーション前にtelを結合
     */
    protected function prepareForValidation()
    {
        $this->merge([
            // 3つのフォームの値を結合して1つのtelにする
            'tel' => $this->tel1 . $this->tel2 . $this->tel3,
        ]);
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
            'tel' => ['required', 'numeric', 'digits_between:10,11',],
            'address' => ['required', 'string', 'max255',],
            'building' => ['nullable', 'string', 'max255',],
            'inquiry_type' => ['required'],
            'detail' => ['required', 'string', 'max:1000',],

        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' =>'電話番号は数字で入力してください',
            'tel.digits_between' => ''
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
