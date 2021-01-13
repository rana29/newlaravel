<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;


    public function posts(){
    	return $this->hasMany(post::class,'cat_id','id');

}

   public function user(){
    	return $this->hasMany(user::class,'user_id','id');

}
}
