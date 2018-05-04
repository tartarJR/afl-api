<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('season_id');
            $table->unsignedInteger('week_id');
            $table->unsignedInteger('home_team_id');
            $table->unsignedInteger('away_team_id');
            $table->dateTime('game_date_time');
            $table->string('place');
            $table->tinyInteger('is_played');
            $table->string('game_summary')->nullable($value = true);
            $table->string('home_team_result');
            $table->string('away_team_result');
            $table->integer('home_team_scored');
            $table->integer('away_team_scored');
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
        Schema::dropIfExists('games');
    }
}
