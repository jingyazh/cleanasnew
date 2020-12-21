<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'masters',
            
            'email' => 'silverbead0815@outlook.com',
            'password' => bcrypt('test'),
            'fname' => 'imad',
            'lname' => 'bro',

            'roleno' => '0',
            // 'parentno' => '0'            
        ]);

        DB::table('users')->insert([
            'name' => 'reseller1',
            'email' => 'reseller1@orderpanel.com',
            'password' => bcrypt('test'),
            'fname' => 'silver',
            'lname' => 'bead',            
            // 'username' => 'oms',

            'roleno' => '2',
            'parentno' => '1'
        ]);   

    }
}
