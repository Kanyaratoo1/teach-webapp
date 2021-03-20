<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id')->unique();
            $table->bigInteger('teach_id')->nullable()->unsigned();
            $table->string('subject_title');
            $table->date('on_date')->nullable();
            $table->time('on_time')->nullable();
            $table->boolean('is_actived')->nullable()->default(true);
            $table->timestamps();
            $table->foreign('teach_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
