<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Db::table('users')->insert([

        	'role_id'=>'1',
        	'name'=>'popular',
        	'username'=>'popular',
        	'email'=>'popular@gmail.com',
        	'password'=>bcrypt('popular'),

        ]);

         Db::table('users')->insert([

        	'role_id'=>'2',
        	'name'=>'rana',
        	'username'=>'rana',
        	'email'=>'rana@gmail.com',
        	'password'=>bcrypt('rana')

        ]);
    }
}
