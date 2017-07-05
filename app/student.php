<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = 'stu_id';
    protected $table = 'student';                                    //กําหนดชือตารางในฐานข้อมลู
    protected $fillable = ['stu_id', 'stu_name  ', 'stu_position ', 'stu_username ', 'stu_password ',
        'stu_birth ', 'stu_address ', 'stu_phone', 'stu_image','created_at','updated_at'];         //กำหนดชื่อ fillable

    public $timestamps = true;

     //สำพันธ์ระหว่าง n -n ระหวา่าง  teachers subject
    public function classstuden()
    {

    return $this->belongsToMany(classstuden::class, 'classview' , 'stu_id','class_id');


    }
}
