<?php

use App\Coach;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coaches')->delete();

        $faker = Faker::create();

        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                Coach::create(['first_name' => $faker->firstName('male'),
                    'last_name' => $faker->lastName,
                    'birth_date' => $faker->date($format = 'Y-m-d', $max = '1979-06-09'),
                    'experience' => rand(3, 10),
                    'img_path' => $faker->image('public/images/coaches', 200, 200, 'people', false, true),
                    'coach_type_id' => $j,
                    'team_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
        }
    }
}
