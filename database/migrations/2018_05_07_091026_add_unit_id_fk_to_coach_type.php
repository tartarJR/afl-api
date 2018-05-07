<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitIdFkToCoachType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coach_types', function (Blueprint $table) {
            $table->unsignedInteger('unit_id')->after('type')->nullable($value = true);
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coach_types', function (Blueprint $table) {
            $table->dropForeign('coach_types_unit_id_foreign');
            $table->dropColumn('unit_id');
        });
    }
}
