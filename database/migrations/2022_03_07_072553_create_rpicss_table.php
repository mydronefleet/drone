<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpicssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpicss', function (Blueprint $table) {
            $table->id();
            $table->integer('org_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('tail_number')->nullable();
            $table->date('date_of_ceretified')->nullable();
            $table->date('certificate_exp')->nullable();
            $table->string('mission_type')->nullable();
            $table->string('callsign')->nullable();
            $table->string('pic')->nullable();
            $table->string('certificate')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('long_desc')->nullable();
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
        Schema::dropIfExists('rpicss');
    }
}
