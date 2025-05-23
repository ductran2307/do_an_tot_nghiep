<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/**
 * 
 * @property \Illuminate\Http\UploadedFile|null $sd_image
 * 
 */
class AdminRequestSlide extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        
        return [
            'sd_title'          =>'required',
            'sd_link'          =>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'sd_title.required' =>'Dữ liệu không được để trống',
            'sd_link.required' =>'Dữ liệu không được để trống'
         
        ];
    }
}
