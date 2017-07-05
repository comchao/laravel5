<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStujectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('subject', function (Blueprint $table) {
            $table->increments('sub_id');        //รหัสครู
            $table->string('sub_name');          //ชื่อนักเรียน
            $table->string('sub_unit');      //ตำแหน่ง
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
        //
    }
}
