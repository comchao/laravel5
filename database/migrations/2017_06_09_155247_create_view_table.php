<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view', function (Blueprint $table) {
            $table->increments('view_id');
            $table->timestamps();
            $table->integer('class_id')->unsigned();
            $table->integer('stu_id')->unsigned();
            $table->foreign('class_id')->references('class_id')->on('classs');
            $table->foreign('stu_id')->references('stu_id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view');
    }
}
