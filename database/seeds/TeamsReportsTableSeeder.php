<?php

use App\TeamReport;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('teams_reports')->truncate();

        for ($i = 1; $i <= 40; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                TeamReport::create([
                    'report_id' => $i,
                    'team_id' => rand(1, 8),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
        }
    }
}
