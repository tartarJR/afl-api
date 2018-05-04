<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('hometown');
            $table->string('height');
            $table->string('weight');
            $table->string('jersey_number');
            $table->string('experience');
            $table->string('img_path');
            $table->unsignedInteger('primary_position_id');
            $table->unsignedInteger('secondary_position_id')->nullable($value = true);
            $table->unsignedInteger('team_id');
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
        Schema::dropIfExists('players');
    }
}
