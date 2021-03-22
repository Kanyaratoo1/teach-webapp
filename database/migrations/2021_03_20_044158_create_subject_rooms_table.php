<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('teach_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->date('room_date')->nullable();
            $table->time('room_time')->nullable();
            $table->boolean('is_active')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('teach_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('subject_rooms');
    }
}
