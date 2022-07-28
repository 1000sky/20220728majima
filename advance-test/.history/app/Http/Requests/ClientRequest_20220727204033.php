<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;

        if ($this->path() == '/contact') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|max:8|/^[a-zA-Z0-9\-]+$/u',
            'address' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'building_name' => 'regex:/^[a-zA-Z0-9]+$/',
            'opinion' => 'required|max:120',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.max:8' => '郵便番号は8文字で入力してください',
            'postcode./^[a-zA-Z0-9\-]+$/u' => '郵便番号は半角数字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max:120' => 'ご意見は120文字以内で入力してください'
        ];
    }
}
