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
            'zip-code' => 'required|max:8',
            'address' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'building-name' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'comment' => 'required',
            'registered_at' => 'date|nullable',
        
        ];
    }
}
