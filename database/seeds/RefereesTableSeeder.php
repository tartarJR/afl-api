<?php

use App\Referee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RefereesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('referees')->truncate();

        $faker = Faker::create();

        for ($j = 1; $j <= 28; $j++) {
            Referee::create(['first_name' => $faker->firstName('male'),
                'last_name' => $faker->lastName,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = '1979-06-09'),
                'experience' => rand(3, 10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

        }
    }
}
