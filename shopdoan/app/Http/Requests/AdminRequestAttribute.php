<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestAttribute extends FormRequest
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
            'atb_name'          =>'required|max:190|min:3|unique:attributes,atb_name,'.$id,
            'atb_type'          =>'required',
            'atb_category_id'   =>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'atb_name.required' =>'Dữ liệu không được để trống',
            'atb_name.unique'   =>'Dữ liệu đã tồn tại',
            'atb_type'          =>'Dữ liệu không được để trống',
            'atb_category_id'   =>'Dữ liệu không được để trống'
        ];
    }
}
