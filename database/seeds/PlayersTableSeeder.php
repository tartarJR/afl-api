<?php

use App\Player;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('players')->truncate();

        $faker = Faker::create();

        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 15; $j++) {
                for ($k = 1; $k <= 3; $k++) {

                    Player::create(['first_name' => $faker->firstName('male'),
                        'last_name' => $faker->lastName,
                        'birth_date' => $faker->date($format = 'Y-m-d', $max = '1998-01-01'),
                        'nationality' => $faker->country,
                        'hometown' => $faker->city,
                        'height' => rand(165, 210),
                        'weight' => rand(65, 140),
                        'jersey_number' => rand(1, 99),
                        'experience' => rand(3, 10),
                        'img_path' => $faker->image('public/images/players', 200, 200, 'people', false, true),
                        'primary_position_id' => $j,
                        'team_id' => $i,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

                }
            }
        }
    }
}
