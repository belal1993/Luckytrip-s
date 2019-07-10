<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_airport', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60);
            $table->string('IATA_Code', 6);
            $table->float('Latitude');
            $table->float('Longitude');
            $table->string('Description', 500);
            $table->string('Terms_and_Conditions',500);
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
        Schema::dropIfExists('_airport');
    }
}
