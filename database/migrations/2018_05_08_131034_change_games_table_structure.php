<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeGamesTableStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->string('home_team_result')->nullable()->change();
            $table->string('away_team_result')->nullable()->change();
            $table->integer('home_team_scored')->nullable()->change();
            $table->integer('away_team_scored')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->string('home_team_result')->nullable(false)->change();
            $table->string('away_team_result')->nullable(false)->change();
            $table->integer('home_team_scored')->nullable(false)->change();
            $table->integer('away_team_scored')->nullable(false)->change();
        });
    }
}
