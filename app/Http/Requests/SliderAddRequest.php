<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:sliders|max:255',
            'description' => 'required|max:1000',
            'image_path' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Tên không được phép để trống',
            'name.unique' => 'Tên không được phép trùng',
            'name.max' => 'Tên không được phép quá 255 kí tự',
            'description.required' => 'Mô tả không được phép để trống',
            'description.max' => 'Mô tả không được phép quá 1000',
            'image_path.required' => 'Hình ảnh không được phép để trống',
        ];
    }
}
