<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\catagory;


class catagoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker =Factory::create();

            foreach(range(1,10) as $index){
        	$name=$faker->name;
        	catagory::create([
        	'user_id'=>rand(1,10),
        	'name'=>$name,
        	'slug'=>strtolower($name),
        	
        	'status'=>'active'
        	
        	]);
    }
}
}
