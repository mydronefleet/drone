<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
			$table->id();
			$table->integer('mission_id');
            $table->string('mission_name')->nullable();
            $table->string('was_rpic')->nullable();
            $table->string('flight_delayed')->nullable();
            $table->string('explaination')->nullable();
            $table->string('who_was')->nullable();
            $table->string('deviat')->nullable();
            $table->string('flight_plan')->nullable();
            $table->string('next_flight')->nullable();
            $table->longText('explain_why')->nullable();
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
        Schema::dropIfExists('flights');
    }
}
