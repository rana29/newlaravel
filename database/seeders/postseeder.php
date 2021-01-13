<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\post;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Factory::create();

            foreach(range(1,20) as $index){
        	$name=$faker->name;
        	post::create([
        	'user_id'=>rand(1,20),
        	'cat_id'=>rand(1,20),
        	'title'=>$faker->title,
        	'description'=>$faker->sentence,
        	'image'=>$faker->imageUrl(),
        	'slug'=>strtolower($name),
        	
        	
        	
        	]);
    }
}
}
