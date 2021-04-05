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
            'naam' => "Tom's Huis",
            'straat' => "Reijerskoop",
            'huisnummer' => "34",
            'plaats' => "Boskoop",
        ]);

        DB::table('huis')->insert([
            'naam' => "Dogukan's Huis",
            'straat' => "Salviahof",
            'huisnummer' => "14",
            'plaats' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'naam' => "Dennis's Huis",
            'straat' => "Dillenburgdreef",
            'huisnummer' => "10",
            'plaats' => "Katwijk aan Zee",
        ]);

        DB::table('huis')->insert([
            'naam' => "Ebubekir's Huis",
            'straat' => "Aleidisstraat",
            'huisnummer' => "79E",
            'plaats' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'naam' => "Hasan's Huis",
            'straat' => "Pleretstraat",
            'huisnummer' => "251",
            'plaats' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'naam' => "Gerrit's Huis",
            'straat' => "Sandelingstraat",
            'huisnummer' => "88",
            'plaats' => "Rotterdam",
        ]);

        DB::table('huis')->insert([
            'naam' => "Brenda's Huis",
            'straat' => "Gansstraat",
            'huisnummer' => "20B",
            'plaats' => "Utrecht",
        ]);

        DB::table('huis')->insert([
            'naam' => "Tijn's Huis",
            'straat' => "Poelweg",
            'huisnummer' => "11",
            'plaats' => "Warmond",
        ]);

        DB::table('huis')->insert([
            'naam' => "Remy's Huis",
            'straat' => "Kelvinsstraat",
            'huisnummer' => "51",
            'plaats' => "Wijchen",
        ]);
    }
}
