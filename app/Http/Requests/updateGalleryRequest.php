<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "image"=>"max:5000|mimes:jpg,jpeg,png"
        ];
    }
    public function messages()
    {
        return [
            "image.max"=>"حداکثر حجم فایل ارسالی باید 5 مگابایت باشد",
            "image.mimes"=>"فرمت عکس موردنظر باید png , jpeg ,jpg باشد"
        ];
    }
}
