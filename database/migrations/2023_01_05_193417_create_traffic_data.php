<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class CreateTrafficData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_data', function (Blueprint $table) {
            $table->id();
            $table->dateTime('DateAndTime');
            $table->integer('Junction')->nullable();
            $table->integer('Vehicles')->nullable();
            $table->string('number')->unique();
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
        Schema::dropIfExists('traffic_data');
        Storage::deleteDirectory('tmp');
    }
}
