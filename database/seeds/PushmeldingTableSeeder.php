<?php

use Illuminate\Database\Seeder;

class PushmeldingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pushmelding')->insert([
            "alarm" => "disabled",
            "type" => "inbraakalarm",
        ]);

        DB::table('pushmelding')->insert([
            "alarm" => "disabled",
            "type" => "paniekknop",
        ]);

        DB::table('pushmelding')->insert([
            "alarm" => "disabled",
            "type" => "andere soort?",
        ]);
    }
}
