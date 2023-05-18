<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'bail|required|unique:users|max:255|min:10',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email  không được phép để trống',
            'email.unique' => 'email  không được phép trùng',
            'email.max' => 'email  không được phép quá 255 kí tự',
            'email.min' => 'email không được phép ít hơn 10',
            'name.required' => 'Tên không được phép để trống',
            'password.required' => 'Mật khẩu không được phép để trống',
        ];
    }
}
