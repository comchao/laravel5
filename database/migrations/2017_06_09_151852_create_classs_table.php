<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classs', function (Blueprint $table) {
            $table->increments('class_id');
            $table->string('class_name');
            $table->string('time_start');
            $table->string('time_end');
            $table->timestamps();
            $table->integer('tch_id')->unsigned();
            $table->integer('sub_id')->unsigned();
            $table->foreign('tch_id')->references('tch_id')->on('teachers');
            $table->foreign('sub_id')->references('sub_id')->on('subject');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classs');
    }
}
