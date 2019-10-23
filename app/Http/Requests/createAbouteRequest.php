<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAbouteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "about"=>"required|between:10,3000",
            "font"=>"required",
            "color"=>"required"
        ];
    }
    public function messages()
    {
        return [
            "about.required"=>"مقدار پاراگراف الزامیست",
            "font.required"=>"سایز فونت الزامیست",
            "color.required"=>"انتخاب رنگ الزامیست",
            "about.between"=>"مقدارمجاز برای پاراگراف بین 10 تا 3000 کاراکتر میباشد"
        ];
    }
}
