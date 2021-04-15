<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tom',
            'email' => 's111305@student.hsleiden.nl',
            'password' => bcrypt('tom'),
            'token' => 'CC 18 88 22' // RFID tag
        ]);

        DB::table('users')->insert([
            'name' => 'Dogukan',
            'email' => 's1122842@student.hsleiden.nl',
            'password' => bcrypt('dogukan'),
            'token' => '54 A2 EC 2E' // RFID card
        ]);

        DB::table('users')->insert([
            'name' => 'Tijn',
            'email' => 's1114748@student.hsleiden.nl',
            'password' => "xcvxcv",
            'token' => '54 A2 EC 2G' // RFID card
        ]);
    }
}
