<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('huis')->insert([
            'naam' => "Tom's Huis",
            'straat' => "Reijerskoop",
            'huisnummer' => "34",
            'plaats' => "Boskoop",
        ]);
        \DB::table('huis')->insert([
            'naam' => "Dogukan's Huis",
            'straat' => "Salviahof",
            'huisnummer' => "14",
            'plaats' => "Rotterdam",
        ]);
    }
}
