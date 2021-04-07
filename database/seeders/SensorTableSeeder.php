<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sensors')->insert([
            'naam' => "Paniek Knop",
            'huis_id' => "1",
            'enabled' => "true",
            'sensor_id' => "1"
        ]);


        
    }
}
