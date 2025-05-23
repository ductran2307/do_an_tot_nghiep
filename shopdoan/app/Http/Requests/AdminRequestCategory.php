<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = request()->route('id');
        return [
            'c_name'=>'required|max:190|min:3|unique:categories,c_name,'.$id
        ];
    }
    public function messages(): array
    {
        return [
            'c_name.required'=>'Dữ liệu không được để trống',
            'c_name.unique'=>'Dữ liệu đã tồn tại',
            'c_name.max'=>'Dữ liệu không được quá 190 ký tự',
            'c_name.min'=>'Dữ liệu phải hơn 3 ký tự'
        ];
    }
}
