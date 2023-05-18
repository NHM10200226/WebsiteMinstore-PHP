<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'customer_name' => 'required',
            'customer_email' => 'bail|required|unique:customers',
            'customer_phone' => 'required',
            'customer_address' => 'required',
            'customer_password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Không được phép để trống',
            'customer_email.unique' => 'Email đã tồn tại',
            'customer_phone.required' => 'Không được phép để trống',
            'customer_address.required' => 'Không được phép để trống',
            'customer_password.required' => 'Không được phép để trống',
        ];
    }
}
