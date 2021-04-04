<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class allowedUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('allowed_users')->insert([
            'user_id' => "1",
            'huis_id' => "1",
        ]);

        \DB::table('allowed_users')->insert([
            'user_id' => "2",
            'huis_id' => "1",
        ]);
    }
}
