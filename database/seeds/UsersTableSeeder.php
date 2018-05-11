<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();

        DB::table('users')->insert([
            'first_name' => 'Mustafa Ogün',
            'last_name' => 'Öztürk',
            'email' => 'mustafaogun.ozturk@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $faker = Faker::create();

        $users = array(
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 5, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 7, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['first_name' => $faker->firstName('male'), 'last_name' => $faker->lastName, 'email' => $faker->email, 'password' => bcrypt('password'), 'role_id' => 2, 'team_id' => 8, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        );

        foreach ($users as $user) {
            User::create($user);
        }


    }
}
