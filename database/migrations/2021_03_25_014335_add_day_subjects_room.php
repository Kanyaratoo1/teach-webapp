<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDaySubjectsRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subject_rooms', function (Blueprint $table) {
            $table->boolean('sun_day')->nullable()->default(false);
            $table->boolean('mon_day')->nullable()->default(false);
            $table->boolean('tue_day')->nullable()->default(false);
            $table->boolean('wed_day')->nullable()->default(false);
            $table->boolean('thu_day')->nullable()->default(false);
            $table->boolean('fri_day')->nullable()->default(false);
            $table->boolean('sat_day')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_rooms', function (Blueprint $table) {
            //
        });
    }
}
