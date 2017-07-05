<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassRepequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'class_name ' => 'required',
            'time_start ' => 'required',
            'time_end' => 'required',
            'tch_id ' => 'required',
            'sub_id ' => 'required ',

        ];
    }

    public function messages()
    {
        return [
            'class_name.required' => 'กรุณากรอกชื่อห้อง',
            'time_start.required' => 'กรุณากรอกเวลาเริ่ม',
            'time_end.required' => 'กรุณากรอกเวลาสิ้นสุด',
            'tch_id.required' => 'กรุณากรอกชื่อครู',
            'sub_id.required' => 'กรุณากรอกชื่อวิชา',

        ];
    }
}
