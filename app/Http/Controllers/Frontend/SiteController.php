<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use session;
use Auth;

use App\Models\User;
use App\Models\post;
use App\Models\catagory;
use App\Models\division;
use App\Models\district;

class SiteController extends Controller
{
    public function index(){
      $post=post::with('user','catagory')
      //->select('slug','cat_id')
      //->where('status','active')
      ->orderBy('id','desc')
      ->take(5)->get();
      //return $post;

       //$catagory=catagory::with('posts')
      //->select('id','name','slug')->orderBy('name','desc')->get(); ata globally share kora sae app service provider
      //return $catagory;

    	return view('Frontend.home',compact('post'));
    }


     public function single_post($slug){

      $single=post::with('user','catagory')->where('slug',$slug)->first();
       //return $single;
      $catagory=catagory::where('status','active')->orderBy('name','desc')->get();

    	return view('Frontend.components.single_post',compact('single','catagory'));
    }



     public function catagory_post($slug){

       
       $slug=catagory::where('slug',$slug)->pluck('id');//ata shodo id ta newwr jonno
       //return $slug;

       $cat=post::with('user')// user holo post table a relation with user er method er name
      //->select('slug','cat_id')
      ->where('cat_id',$slug)//  $slug holo oporae declare kora veriable
      ->orderBy('id','desc')
      ->get();

      //return $cat;

      $catagory=catagory::where('status','active')->select('name','slug')->orderBy('name','desc')->get();
      return view('Frontend.catagory_post',compact('catagory','cat'));
    }



     public function view_register(){

    	return view('Frontend.auth.view_register');
    }





     public function save_register(Request $request){
     	//print_r($_POST);
     	//return $request;
     	//dd($request->file);

    	$request->validate([

        'name' =>'required|string',
        'email' =>'required|email',
        'password' =>'required',
        /*'image' =>'required|image',*/

    	]);


  /*    if ($request->hasfile('image')){

      $image=$request->file('image');
    

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      
      $image->storeAs('image',$name);
      
    }*/
      try{

      	User::create([

        	'name'  =>$request->name,
        	'email' =>$request->email,
        	'password'  =>bcrypt($request->password),
        ]);

      session()->flash('type','success');
    	session()->flash('message','user registration success');
      	
      }
      catch(Exception $ex){
      	session()->flash('type','danger');
      	session()->flash('message','test');

      }

        return redirect()->back();

}



public function view_login(){
	return view('Frontend.auth.login');
}


public function store_login(Request $request){

	$login=$request->validate([
		'email' =>'required|email',
		'password' =>'required'
	]);

	//return $login;
	

	if(Auth()->attempt($login)){
		//return Auth::User();

		return redirect('/admin/dashbord');

	}else{

	session()->flash('type','danger');
  session()->flash('message','user or password does not match');	

    return redirect()->back();
	}
	
}


public function logout(){
	auth()->logout();
	return redirect('/');
}




 public function search(Request $request){
       //return $request->search;

       $request=$request->search;

       $post=post::with('user','catagory')
      //->select('slug','cat_id')
      ->where('title','like','%'.$request.'%')
      ->orderBy('id','desc')
      ->take(5)->get();
      //return $post;

      $catagory=catagory::where('status','active')->select('name','slug')->orderBy('name','desc')->get();
      return view('Frontend.home',compact('post','catagory'));
    }




     public function select(){
     $division=division::all();

      //return $division;
      return view('Frontend.select',compact('division'));
    }




     public function district(Request $request){
     //return $request->all();

      //return $division;

      $district=district::where('division_id',$request->division_id)->get();

      $output='<option value="">Select District</option>';

      foreach($district as $district){

        $output .='<option value="'.$district->id.'"> '.$district->name. '</option>';
      }

      //return $district->name;
       return $output;
     

}



}
