<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/**
 * @property string $password 
 * @property string $email 
 */
class UserRequestNewPassword extends FormRequest
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
            'password'=>'required',
            'password_confirm'=>'required|same:password',
        ];
    
    }
    public function messages()
    {
        return [
            
            'password.required'         =>'Dữ liệu không được để trống',
            'password_confirm.same'     =>'Mật khấu không khớp',
            'password_confirm.required' =>'Dữ liệu không được để trống',
        ];
    }
}
