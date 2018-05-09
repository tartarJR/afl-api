<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->delete();

        DB::table('positions')->insert([
            'name' => 'Center',
            'code' => 'C',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Offensive Guard',
            'code' => 'OG',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Offensive Tackle',
            'code' => 'OT',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Quarterback',
            'code' => 'QB',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Running Back',
            'code' => 'RB',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Full Back',
            'code' => 'FB',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Wide Receiver',
            'code' => 'WR',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Tight End',
            'code' => 'TE',
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Defensive Tackle',
            'code' => 'DT',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Defensive End',
            'code' => 'DE',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Middle Linebacker',
            'code' => 'MLB',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Outside Linebacker',
            'code' => 'OLB',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Free Safety',
            'code' => 'FS',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Strong Safety',
            'code' => 'SS',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Cornerback',
            'code' => 'CB',
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Kicker',
            'code' => 'K',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Holder',
            'code' => 'H',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Long Snapper ',
            'code' => 'LS',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Punter',
            'code' => 'P',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Kickoff Specialist',
            'code' => 'KOS',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Kick Returner',
            'code' => 'KR',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Punt Returner',
            'code' => 'PR',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Upback',
            'code' => 'UB',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Gunner',
            'code' => 'GN',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('positions')->insert([
            'name' => 'Jammer',
            'code' => 'JM',
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
