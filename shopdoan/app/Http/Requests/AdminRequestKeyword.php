<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestKeyword extends FormRequest
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
            'k_name'=>'required|max:190|min:3|unique:keywords,k_name,'.$id,
            'k_description' => 'nullable|max:500'
        ];
    }
    public function messages(): array
    {
        return [
            'k_name.required'=>'Dữ liệu không được để trống',
            'k_name.unique'=>'Dữ liệu đã tồn tại',
            'k_name.max'=>'Dữ liệu không được quá 190 ký tự',
            'k_name.min'=>'Dữ liệu phải hơn 3 ký tự'
        ];
    }
}
