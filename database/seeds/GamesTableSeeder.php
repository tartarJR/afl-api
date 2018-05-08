<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->delete();

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 1,
            'home_team_id' => 1,
            'away_team_id' => 2,
            'game_date_time' => Carbon::create('2018', '02', '24', '13', '30'),
            'place' => 'Rams Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 1,
            'home_team_id' => 8,
            'away_team_id' => 4,
            'game_date_time' => Carbon::create('2018', '02', '25', '13', '30'),
            'place' => 'Devrim Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 1,
            'home_team_id' => 3,
            'away_team_id' => 6,
            'game_date_time' => Carbon::create('2018', '02', '25', '13', '30'),
            'place' => 'Uçaksavar Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 1,
            'home_team_id' => 7,
            'away_team_id' => 5,
            'game_date_time' => Carbon::create('2018', '02', '24', '13', '30'),
            'place' => 'Eskişehir Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 2,
            'home_team_id' => 4,
            'away_team_id' => 1,
            'game_date_time' => Carbon::create('2018', '03', '03', '13', '30'),
            'place' => 'Eagles Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 2,
            'home_team_id' => 2,
            'away_team_id' => 3,
            'game_date_time' => Carbon::create('2018', '03', '03', '13', '30'),
            'place' => 'Timsah Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 2,
            'home_team_id' => 8,
            'away_team_id' => 7,
            'game_date_time' => Carbon::create('2018', '03', '03', '13', '30'),
            'place' => 'Devrim Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 2,
            'home_team_id' => 6,
            'away_team_id' => 5,
            'game_date_time' => Carbon::create('2018', '03', '03', '13', '30'),
            'place' => 'Hornet Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 3,
            'home_team_id' => 1,
            'away_team_id' => 3,
            'game_date_time' => Carbon::create('2018', '03', '25', '13', '30'),
            'place' => 'Rams Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 3,
            'home_team_id' => 4,
            'away_team_id' => 7,
            'game_date_time' => Carbon::create('2018', '03', '25', '13', '30'),
            'place' => 'Eagles Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 3,
            'home_team_id' => 5,
            'away_team_id' => 2,
            'game_date_time' => Carbon::create('2018', '03', '25', '13', '30'),
            'place' => 'Tatanka Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 3,
            'home_team_id' => 8,
            'away_team_id' => 6,
            'game_date_time' => Carbon::create('2018', '03', '25', '13', '30'),
            'place' => 'Devrim Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 4,
            'home_team_id' => 7,
            'away_team_id' => 1,
            'game_date_time' => Carbon::create('2018', '04', '01', '13', '30'),
            'place' => 'Rangers Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 4,
            'home_team_id' => 5,
            'away_team_id' => 3,
            'game_date_time' => Carbon::create('2018', '04', '01', '13', '30'),
            'place' => 'Tatanka Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 4,
            'home_team_id' => 6,
            'away_team_id' => 4,
            'game_date_time' => Carbon::create('2018', '04', '01', '13', '30'),
            'place' => 'Hornet Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 4,
            'home_team_id' => 8,
            'away_team_id' => 2,
            'game_date_time' => Carbon::create('2018', '04', '01', '13', '30'),
            'place' => 'Devrim Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 5,
            'home_team_id' => 1,
            'away_team_id' => 5,
            'game_date_time' => Carbon::create('2018', '04', '22', '15', '30'),
            'place' => 'Rams Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 5,
            'home_team_id' => 7,
            'away_team_id' => 6,
            'game_date_time' => Carbon::create('2018', '04', '22', '15', '30'),
            'place' => 'Rangers Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 5,
            'home_team_id' => 3,
            'away_team_id' => 8,
            'game_date_time' => Carbon::create('2018', '04', '22', '15', '30'),
            'place' => 'Uçaksavar Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 5,
            'home_team_id' => 2,
            'away_team_id' => 4,
            'game_date_time' => Carbon::create('2018', '04', '22', '15', '30'),
            'place' => 'Timsah Areana',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 6,
            'home_team_id' => 6,
            'away_team_id' => 1,
            'game_date_time' => Carbon::create('2018', '05', '06', '17', '00'),
            'place' => 'Hornet Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 6,
            'home_team_id' => 5,
            'away_team_id' => 8,
            'game_date_time' => Carbon::create('2018', '05', '06', '17', '00'),
            'place' => 'Tatanka Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 6,
            'home_team_id' => 2,
            'away_team_id' => 7,
            'game_date_time' => Carbon::create('2018', '05', '06', '17', '00'),
            'place' => 'Timsah Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 6,
            'home_team_id' => 4,
            'away_team_id' => 3,
            'game_date_time' => Carbon::create('2018', '05', '06', '17', '00'),
            'place' => 'Eagles Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 7,
            'home_team_id' => 8,
            'away_team_id' => 1,
            'game_date_time' => Carbon::create('2018', '05', '20', '18', '30'),
            'place' => 'Devrim Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 7,
            'home_team_id' => 2,
            'away_team_id' => 6,
            'game_date_time' => Carbon::create('2018', '05', '20', '18', '30'),
            'place' => 'Timsah Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 7,
            'home_team_id' => 5,
            'away_team_id' => 4,
            'game_date_time' => Carbon::create('2018', '05', '20', '18', '30'),
            'place' => 'Tatanka Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert([
            'season_id' => 3,
            'week_id' => 7,
            'home_team_id' => 7,
            'away_team_id' => 3,
            'game_date_time' => Carbon::create('2018', '05', '20', '18', '30'),
            'place' => 'Rangers Arena',
            'is_played' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
