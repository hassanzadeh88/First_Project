<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createContactRequest extends FormRequest
{

    public function rules()
    {
        return [
            "fullname"=>"min:5",
            "email"=>"email",
            "comment"=>"max:1000"
        ];
    }
    public function messages()
    {
        return [
          "fullname.min"=>"حداقل کاراکتر برای نام 5 کاراکتر میباشد",
          "email.email"=>"فرمت ایمیل وارد شده صحیح نمیباشد",
          "comment.max"=>"حداکثر کاراکتر مجاز برای نظرات 1000 کاراکتر میباشد"
        ];
    }
}
