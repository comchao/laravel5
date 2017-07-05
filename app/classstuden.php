<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classstuden extends Model
{
    protected $primaryKey = 'class_id';
    protected $table = 'classs';
    protected $fillable = ['class_id', 'class_name ', 'time_start ','time_end ','tch_id','sub_id','updated_at','created_at' ];
    public $timestamps = true;

    //ความสำพันธ์ subject
    public function subject()
    {
        return $this->belongsTo(subject::class, 'sub_id');

    }

    //ความสำพันธ์ teacher
    public function teachers()
    {
        return $this->belongsTo(teachers::class, 'tch_id');  //belongsTo คือ n



    }

    public function student()
    {
        return $this->belongsToMany(student::class, 'classview' , 'class_id','stu_id' );


    }


    }
