<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        $faker = Faker::create();

        DB::table('teams')->insert([
            'name' => 'Koç Rams',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#B71C1C',
            'secondary_color_code' => '#000000',
            'alternative_color_code' => '#FFFFFF',
            'img_path' => '/images/koc.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'Uludağ Timsahlar',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#2E7D32',
            'secondary_color_code' => '#FFFFFF',
            'alternative_color_code' => '#000000',
            'img_path' => '/images/uludag.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'Boğaziçi Sultans',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#01579B',
            'secondary_color_code' => '#FFFFFF',
            'alternative_color_code' => '',
            'img_path' => '/images/bogazici.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'Yeditepe Eagles',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#004D40',
            'secondary_color_code' => '#FFFFFF',
            'alternative_color_code' => '#000000',
            'img_path' => '/images/yeditepe.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'Sakarya Tatankaları',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#1B5E20',
            'secondary_color_code' => '#000000',
            'alternative_color_code' => '#FFFFFF',
            'img_path' => '/images/sakarya.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'İTÜ Hornets',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#FFFFFF',
            'secondary_color_code' => '#FBC02D',
            'alternative_color_code' => '#D32F2F',
            'img_path' => '/images/itu.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'Anadolu Rangers',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#800517',
            'secondary_color_code' => '#FFD740',
            'alternative_color_code' => '#FFFFFF',
            'img_path' => '/images/anadolu.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('teams')->insert([
            'name' => 'ODTÜ Falcons',
            'info' => $faker->paragraph(2),
            'primary_color_code' => '#D50000',
            'secondary_color_code' => '#000000',
            'alternative_color_code' => '#FFFFFF',
            'img_path' => '/images/odtu.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
