<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "alt"=>"required|max:30",
            "caption"=>"required|between:5,100",
            "image"=>"required|max:5000|mimes:jpeg,jpg,png"
        ];
    }
    public function messages()
    {
        return[
          "alt.required"=>"مقدار فیلد الزامیست",
          "alt.max"=>"مقدار مجاز فیلد حدکثر 30 کاراکتر میباشد",
          "caption.required"=>"مقدار فیلد عنوان الزامیست",
          "image.required"=>"انتخاب تصویر صورت نگرفته است",
          "image.max"=>"حداکثر سایز تصویر 5 مگابایت میباشد",
          "image.mimes"=>"فرمت تصویر غیرقابل قبول است",
          "caption.between"=>"مقدار فیلد عنوان حداقل 5 کاراکتر و حداکثر 100 کاراکتر است",
        ];
    }
}
