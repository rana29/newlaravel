<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\thana;

class thanaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->thana() as $thana){
        	thana::create([
        		'district_id'=>$thana['district_id'],
        		'name'=>$thana['name']
        		
        	]);
        }
    }


    private function thana(){
    	$thana=array(
    		array('id'=>'1','district_id'=>'1','name'=>'Dhoar','url'=>'www.dhaka.com'),
    		array('id'=>'1','district_id'=>'1','name'=>'Nawabgong','url'=>'www.dhaka.com'),
    		array('id'=>'1','district_id'=>'1','name'=>'Kearigong','url'=>'www.dhaka.com'),
    		array('id'=>'1','district_id'=>'1','name'=>'Feni','url'=>'www.dhaka.com'),
    		array('id'=>'1','district_id'=>'1','name'=>'Rangmati','url'=>'www.dhaka.com'),
    		array('id'=>'1','district_id'=>'1','name'=>'Shariatpur','url'=>'www.dhaka.com'),
    		
    	);

    	return $thana;
    }
}
