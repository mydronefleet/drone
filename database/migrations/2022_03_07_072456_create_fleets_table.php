<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->integer('org_id');
            $table->integer('drone')->nullable();
            $table->string('name')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('tail_number')->nullable();
            $table->string('date_purchased')->nullable();
            $table->string('batteries')->nullable();
            $table->string('who_purchased')->nullable();
            $table->string('main_rpics')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('group_own_the_dron')->nullable();
            $table->string('flight_load_out')->nullable();
            $table->string('physical_location')->nullable();
            $table->string('pic')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('long_desc')->nullable();
            $table->string('equipment')->nullable();
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
        Schema::dropIfExists('fleets');
    }
}
