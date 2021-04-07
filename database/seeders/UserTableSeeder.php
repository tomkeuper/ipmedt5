<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([

            'name' => 'Tom',
            
            'email' => 's111305@student.hsleiden.nl',
            
            'password' => bcrypt('tom'),
            
            
        ]);
            
            
            
        \DB::table('users')->insert([
            
            'name' => 'Dogukan',
            
            'email' => 's1122842@student.hsleiden.nl',
            
            'password' => bcrypt('dogukan'),
            
            
        ]);
    }
}
