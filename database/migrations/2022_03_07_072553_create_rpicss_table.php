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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tail_number');
            $table->string('date_of_ceretified');
            $table->string('mission_type');
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
        Schema::dropIfExists('rpicss');
    }
}
