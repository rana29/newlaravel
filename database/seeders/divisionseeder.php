<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\division;

class divisionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->division() as $division){
        	division::create([
        		'name'=>$division['name'],
        		'url'=>$division['url']
        		
        	]);
        }
    }

    private function division(){
    	$division=array(
    		array('id'=>'1','name'=>'Dhaka','url'=>'www.dhaka.com'),
    		array('id'=>'2','name'=>'Chittagong','url'=>'www.chittagong.com'),
    		array('id'=>'3','name'=>'Rajshai','url'=>'www.rajshai.com'),
    		array('id'=>'4','name'=>'Khulna','url'=>'www.khulna.com'),
    		array('id'=>'5','name'=>'Barisal','url'=>'www.barisal.com'),
    		array('id'=>'6','name'=>'Rangpur','url'=>'www.rangpur.com'),
    		array('id'=>'7','name'=>'Jessore','url'=>'www.jessore.com')
    	);

    	return $division;
    }
}
