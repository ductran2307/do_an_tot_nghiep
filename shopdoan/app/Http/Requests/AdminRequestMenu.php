<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestMenu extends FormRequest
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
            'mn_name'=>'required|max:190|min:3|unique:menus,mn_name,'.$id
        ];
    }
    public function messages(): array
    {
        return [
            'mn_name.required'=>'Dữ liệu không được để trống',
            'mn_name.unique'=>'Dữ liệu đã tồn tại',
            'mn_name.max'=>'Dữ liệu không được quá 190 ký tự',
            'mn_name.min'=>'Dữ liệu phải hơn 3 ký tự'
        ];
    }
}