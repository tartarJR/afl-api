<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRefereeTypeIdFkToGameReferee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_referees', function (Blueprint $table) {
            $table->foreign('referee_type_id')->references('id')->on('referee_types');
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
            $table->dropForeign('referee_type_id');
        });
    }
}
