<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('registration_id')->unsigned()->index();
            $table->unsignedBigInteger('car_id')->index();
            $table->unsignedBigInteger('owner_id')->index();
            $table->unsignedBigInteger('fuel_id')->index();
            $table->unsignedBigInteger('year_id')->index();
            $table->boolean('air_condition');
            $table->integer('wheels_number')->unsigned();
            $table->boolean('first_health');
            $table->boolean('triangle');
            $table->unsignedBigInteger('color_id')->index();
            $table->integer('kilometers')->unsigned()->index();
            $table->integer('registered_to')->unsigned()->index();
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->foreign('fuel_id')->references('id')->on('fuels')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
