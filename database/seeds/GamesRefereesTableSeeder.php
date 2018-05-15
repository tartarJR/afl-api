<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesRefereesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('games_referees')->truncate();

        $k = 1;

        for ($i = 1; $i <= 28; $i++) {
            for ($j = 1; $j <= 7; $j++) {

                DB::table('games_referees')->insert([
                    'game_id' => $i,
                    'referee_id' => $k,
                    'referee_type_id' => $j,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

                $k++;

                if ($k == 29) {
                    $k = 1;
                }
            }
        }

    }
}
