<?php
/**
 * Created by PhpStorm.
 * User: chaowalitchaoprakhon
 * Date: 06/13/2017
 * Time: 11:49
 */

namespace App\Http\Requests;


class ClassStudenRepequest
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
            'class_id ' => 'required',
            'stu_id' => 'required ',

        ];
    }

    public function messages()
    {
        return [
            'class_id.required' => 'กรุณากรอกชื่อวิชา',
            'stu_id.required' => 'กรุณากรอกชื่อนักเรียน',


        ];
    }
}
