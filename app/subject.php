<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $primaryKey = 'sub_id';
    protected $table = 'subject';                               //กําหนดชือตารางในฐานข้อมลู
    protected $fillable = ['sub_id', 'sub_name ', 'sub_unit','created_at','updated_at'];         //กำหนดชื่อ fillable

    public $timestamps = true;
    public function classstuden()
    {
        return $this->hasMany(classstuden::class); //กำหนดความสำพันธ์ 1 to many ไปยัง classstuden


    }

    /* //สำพันธ์ระหว่าง n -n ระหวา่าง  teachers subject
    public function teachers()
    {
        return $this->hasMany(teachers::class); //กำหนดความสำพันธ์ 1 to many ไปยัง classstuden


    }*/


}
