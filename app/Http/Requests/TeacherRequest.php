<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //เปลี่ยนให้เป็น true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
               'tch_name'=> 'required',
               'tch_position'=> 'required',
               'tch_username'=> 'required',
               'tch_password'=> 'required',
               'tch_birth'=> 'required',
               'tch_address'=> 'required',
               'tch_phone'=> 'required',
               'tch_image'=> 'mimes:jpeg,jpg,png',
            ];

    }

    public function messages()
    {
        return [
            'tch_name.required' => 'กรุณากรอกชื่อครู',
            'tch_position.required' => 'กรุณากรอกตำแหน่ง',
            'tch_username.required' => 'กรุณากรอกชื่อผู้ใช้งาน',
            'tch_password.required' => 'กรุณากรอกรหัสผ่าน',
            'tch_birth.required' => 'กรุณากรอกวันเกิด',
            'tch_address.required' => 'กรุณากรอกที่อยู่',
            'tch_phone.required' => 'กรุณากรอกเบอร์มือถือ',
            'tch_image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกลุ jpeg,jpg,png',

        ];


    }


}
