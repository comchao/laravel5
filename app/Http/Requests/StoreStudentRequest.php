<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'stu_name' => 'required',
            'stu_position' => 'required',
            'stu_username' => 'required',
            'stu_password' => 'required',
            'stu_birth' => 'required',
            'stu_address' => 'required',
            'stu_phone' => 'required',
            'stu_image' => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'stu_name.required' => 'กรุณากรอกชื่อครู',
            'stu_position.required' => 'กรุณากรอกตำแหน่ง',
            'stu_username.required' => 'กรุณากรอกชื่อผู้ใช้งาน',
            'stu_password.required' => 'กรุณากรอกรหัสผ่าน',
            'stu_birth.required' => 'กรุณากรอกวันเกิด',
            'stu_address.required' => 'กรุณากรอกที่อยู่',
            'stu_phone.required' => 'กรุณากรอกเบอร์มือถือ',
            'stu_image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกลุ jpeg,jpg,png',

        ];
    }
}
