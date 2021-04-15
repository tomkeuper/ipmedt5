<?php

use Illuminate\Database\Seeder;

class BeveiligingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beveiliging')->insert([
            'huis_id' => '1'
        ]);
    }
}
