<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_class_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->date('at_date')->nullable();
            $table->time('at_time')->nullable();
            $table->integer('rounds')->nullable()->default(1);
            $table->boolean('is_absent')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('class_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_class_rooms');
    }
}
