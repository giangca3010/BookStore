<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
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
            //
            'email' =>  'required',
            'name'  => 'required',
            'message' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Trường này là trường bắt buộc phải nhập',
            'email.required'             => 'Trường này là trường bắt buộc phải nhập',
            'message.required'             => 'Trường này là trường bắt buộc phải nhập',
        ];
    }
}
