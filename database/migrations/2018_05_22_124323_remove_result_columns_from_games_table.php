<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveResultColumnsFromGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function ($table) {
            $table->dropColumn('home_team_result');
            $table->dropColumn('away_team_result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function ($table) {
            $table->integer('home_team_result');
            $table->integer('away_team_result');
        });
    }
}
