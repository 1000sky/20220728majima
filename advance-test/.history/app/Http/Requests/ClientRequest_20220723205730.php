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
            'zip-code' => 'required|max:8|/^[a-zA-Z0-9\-]+$/u',
            'address' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'building-name' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'comment' => 'required|max:120',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'zip-code.required' => '郵便番号を入力してください',
            'registered_at.date' => '日付の形式で入力してください'
        ];
    }
}
