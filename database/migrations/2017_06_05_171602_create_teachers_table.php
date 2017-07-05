<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('tch_id');        //รหัสครู
            $table->string('tch_name');          //ชื่อครู
            $table->string('tch_position');      //ตำแหน่ง
            $table->string('tch_username');      //ชื่อผู้ใช้
            $table->string('tch_password');      //รหัสผ่าน
            $table->string('tch_birth');         //วันเกิด
            $table->string('tch_address');       //ที่อยู่
            $table->string('tch_phone');          //เบอร์โทร
            $table->string('tch_image');          //ไฟล์รูป
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
        Schema::drop('teachers');
    }
}
