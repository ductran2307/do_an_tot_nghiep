<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/**
 * @property array $attribute
 * @property \Illuminate\Http\UploadedFile|null $pro_avatar
 *  @property array $keywords
 */
class AdminRequestProduct extends FormRequest
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
            'pro_name'=>'required|max:190|min:3|unique:products,pro_name,'.$id,
            'pro_price'=>'required',
            'pro_sale'=>'required',
            'pro_description'=>'required',
            'pro_category_id'=>'required',
            'pro_content'=>'required',
            'pro_country'=>'required',
            'pro_energy'=>'required',
            'pro_resistant'=>'required',
            'pro_number'=>'required'
            // 'attribute[]'=>'required'
            // 'pro_avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        ];
    }
}
