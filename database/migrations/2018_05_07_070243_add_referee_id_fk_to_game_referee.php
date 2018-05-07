<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefereeIdFkToGameReferee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_referees', function (Blueprint $table) {
            $table->foreign('referee_id')->references('id')->on('referees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_referees', function (Blueprint $table) {
            $table->dropForeign('referee_id');
        });
    }
}
