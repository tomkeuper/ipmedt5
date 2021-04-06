<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensors')->insert([
            'name' => 'Water'
        ]);
        
        DB::table('sensors')->insert([
            'name' => 'Gas'
        ]);

        DB::table('sensors')->insert([
            'name' => 'Temperatuur'
        ]);

        DB::table('sensors')->insert([
            'name' => 'Vochtigheid'
        ]);
    }
}
