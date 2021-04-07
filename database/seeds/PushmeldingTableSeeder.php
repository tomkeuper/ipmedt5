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
            "title" => "testtitel",
            "message" => "test bericht dat nergens over gaat",
            "type" => "inbraakalarm",
        ]);

        DB::table('pushmelding')->insert([
            "title" => "testtitel",
            "message" => "test bericht dat nergens over gaat",
            "type" => "paniekknop",
        ]);
    }
}
