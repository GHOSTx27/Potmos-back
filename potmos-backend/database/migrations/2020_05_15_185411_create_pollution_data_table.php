<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollutionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pollution_data', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->decimal('nh3', 10, 3);
            $table->decimal('ch4', 10, 3);
            $table->decimal('co', 10, 3);
            $table->unsignedInteger('level');
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
        Schema::dropIfExists('pollution_data');
    }
}
