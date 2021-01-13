<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;


    public function catagory(){
    	return $this->belongsTo(Catagory::class,'cat_id','id');//cat_id holo foreign key ,catagory holo model, 
    }

     public function user(){
    	return $this->belongsTo(Catagory::class,'user_id','id');//cat_id holo foreign key ,catagory holo model, 
    }
}
