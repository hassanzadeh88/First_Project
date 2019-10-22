<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequestSetting extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title"=>"required|max:30",
            "author"=>"required",
            "keywords"=>"required",
            "description"=>"required|between:5,500"
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"عنوان فیلد الزامیست",
            "title.max"=>"حداکثر کاراکتر مجاز 30 کاراکتر میباشد",
            "author.required"=>"نام نویسنده الزامیست",
            "keywords.required"=>"وارد کردن کلمات کلیدی الزامیست",
            "description.required"=>" فیلد توضیحات الزامیست",
            "description.between"=>" فیلد توضیحات بین 5 تا 500 کاراکتر میباشد"

        ];
    }
}
