<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\district;

class districtseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->district() as $district){
        	district::create([
        		'division_id'=>$district['division_id'],
        		'name'=>$district['name']
        		
        	]);
        }
    }


    private function district(){
    	$district=array(
    		array('id'=>'1','division_id'=>'1','name'=>'Rangimati','url'=>'www.dhaka.com'),
    		array('id'=>'1','division_id'=>'1','name'=>'Nawabgong','url'=>'www.dhaka.com'),
    		array('id'=>'1','division_id'=>'1','name'=>'Kearigong','url'=>'www.dhaka.com'),
    		array('id'=>'1','division_id'=>'1','name'=>'Feni','url'=>'www.dhaka.com'),
    		array('id'=>'1','division_id'=>'1','name'=>'Rangmati','url'=>'www.dhaka.com'),
    		array('id'=>'1','division_id'=>'1','name'=>'Shariatpur','url'=>'www.dhaka.com'),
    		
    	);

    	return $district;
    }
}
