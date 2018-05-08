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
            $table->unsignedInteger('home_team_result')->nullable()->change();
            $table->unsignedInteger('away_team_result')->nullable()->change();
            $table->unsignedInteger('home_team_scored')->nullable()->change();
            $table->unsignedInteger('away_team_scored')->nullable()->change();
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
            $table->unsignedInteger('home_team_result')->nullable(false)->change();
            $table->unsignedInteger('away_team_result')->nullable(false)->change();
            $table->unsignedInteger('home_team_scored')->nullable(false)->change();
            $table->unsignedInteger('away_team_scored')->nullable(false)->change();
        });
    }
}
