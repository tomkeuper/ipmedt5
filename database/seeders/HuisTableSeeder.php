<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huis')->insert([
            'name' => "Tom's Huis",
            'street' => "Reijerskoop",
            'number' => "34",
            'place' => "Boskoop",
        ]);

        DB::table('huis')->insert([
            'name' => "Dogukan's Huis",
            'street' => "Salviahof",
            'number' => "14",
            'place' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'name' => "Dennis's Huis",
            'street' => "Dillenburgdreef",
            'number' => "10",
            'place' => "Katwijk aan Zee",
        ]);

        DB::table('huis')->insert([
            'name' => "Ebubekir's Huis",
            'street' => "Aleidisstraat",
            'number' => "79E",
            'place' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'name' => "Hasan's Huis",
            'street' => "Pleretstraat",
            'number' => "251",
            'place' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'name' => "Gerrit's Huis",
            'street' => "Sandelingstraat",
            'number' => "88",
            'place' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'name' => "Brenda's Huis",
            'street' => "Gansstraat",
            'number' => "20B",
            'place' => "Utrecht",
        ]);

        DB::table('huis')->insert([
            'name' => "Tijn's Huis",
            'street' => "Poelweg",
            'number' => "11",
            'place' => "Warmond",
        ]);

        DB::table('huis')->insert([
            'name' => "Remy's Huis",
            'street' => "Kelvinsstraat",
            'number' => "51",
            'place' => "Wijchen",
        ]);
    }
}
