<?php

use Illuminate\Database\Seeder;

class AfstandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('afstandsensor')->insert([
            'sensor_on' => 'true'
        ]);
    }
}
