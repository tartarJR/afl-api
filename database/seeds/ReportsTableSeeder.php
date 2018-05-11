<?php

use App\Report;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('reports')->truncate();

        $faker = Faker::create();

        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                Report::create(['title' => $faker->text(15),
                    'content' => $faker->paragraph(1),
                    'img_path' => $faker->image('public/images/reports', 200, 200, 'sports', false, true),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
        }

    }
}
