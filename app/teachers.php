<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $primaryKey = 'tch_id';
    protected $table = 'teachers';  //กําหนดชือตารางในฐานข้อมลู
    protected $fillable = ['tch_id','tch_name','tch_position','tch_username','tch_password',
        'tch_birth','tch_address','tch_phontch_namee','tch_image','created_at','updated_at'];
    public $timestamps = true;

    public function classstuden()
    {
        return $this->hasMany(classstuden::class); //กำหนดความสำพันธ์ 1 to many ไปยัง classstuden



    }
   /* //สำพันธ์ระหว่าง n -n ระหวา่าง  teachers subject
    public function subject()
    {
        return $this->hasMany(subject::class);

    }*/


}
