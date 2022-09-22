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
            $table->string('name');
            $table->string('make');
            $table->string('model');
            $table->string('tail_number');
            $table->string('date_purchased');
            $table->string('batteries');
            $table->string('who_purchased');
            $table->string('main_rpics');
            $table->string('group_own_the_dron');
            $table->string('pic');
            $table->string('short_desc');
            $table->string('long_desc');
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
