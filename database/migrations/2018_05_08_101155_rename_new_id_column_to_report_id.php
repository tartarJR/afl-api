<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameNewIdColumnToReportId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams_reports', function (Blueprint $table) {
            $table->renameColumn('new_id', 'report_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams_reports', function (Blueprint $table) {
            $table->renameColumn('report_id', 'new_id');
        });
    }
}
