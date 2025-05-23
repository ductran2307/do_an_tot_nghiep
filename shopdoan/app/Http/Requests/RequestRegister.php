<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            'email'=>'required|max:190|min:3|unique:users,email,'.$id,
            'name'=>'required',
            'phone'=>'required|unique:users,phone,'.$id,
            'password'=>'required',
        ];
    
    }
    public function messages()
    {
        return [
            'email.required'=>'Dữ liệu không được để trống',
            'email.unique'=>'Dữ liệu đã tồn tại',
            'name.required'=>'Dữ liệu không được để trống',
            'phone.unique'=>'Dữ liệu đã tồn tại',
            'phone.required'=>'Dữ liệu không được để trống',
            'password.required'=>'Dữ liệu không được để trống',
        ];
    }
}
