<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('student', function (Blueprint $table) {
            $table->increments('stu_id');        //รหัสครู
            $table->string('stu_name');          //ชื่อนักเรียน
            $table->string('stu_position');      //ตำแหน่ง
            $table->string('stu_username');      //ชื่อผู้ใช้
            $table->string('stu_password');      //รหัสผ่าน
            $table->string('stu_birth');         //วันเกิด
            $table->string('stu_address');       //ที่อยู่
            $table->string('stu_phone');          //เบอร์โทร
            $table->string('stu_image');          //ไฟล์รูป
            $table->string('stu_class');
            $table->timestamps();



        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('student');

    }
}
