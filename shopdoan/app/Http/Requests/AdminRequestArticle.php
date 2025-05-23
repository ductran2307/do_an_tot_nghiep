<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/**
 
 * @property \Illuminate\Http\UploadedFile|null $a_avatar
 * @property string|null $a_position_1
 * @property string|null $a_position_2
 */
class AdminRequestArticle extends FormRequest
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
            'a_name'=>'required|max:190|min:3|unique:articles,a_name,'.$id,
            'a_description'=>'required',
            'a_menu_id'=>'required',
            'a_content'=>'required',
            
         
        ];
    }
}
