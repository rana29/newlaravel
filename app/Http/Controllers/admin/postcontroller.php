<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\catagory;
use session;
use Exception;

class postcontroller extends Controller
{
    public function manage(){

	$posts=post::orderBy('id','asc')->paginate(10);
	//$catagory=catagory::find(3); particular data 
	//$catagory=catagory::take(5)->get(); 5ta  data 

  $catagory=catagory::with('posts')->select('id')->get();
  //return $catagory;
   	return view('admin.post.manage_post',compact('posts'));
   } 

   

  public function create(){
  	$catagory=catagory::where('status','active')->get();
  	
   	return view('admin.post.create_post',compact('catagory'));
   } 





   public function store(Request $request){
  	//return $request;
  	 $request->validate([

        'title' =>'required|string|min:4',
        'description' =>'required|string|min:4',
        
       ]);

  	   try{



    if ($request->hasfile('image')){

      $image=$request->file('image');

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;
      $location=public_path('postimage/');
      $upload=$image->move($location,$name);
   /*   Image::make($image)
      ->resize(50,50)
      ->save($location);*/
     

    } 
    	//dd($request->all());
    	$post=new post();
    	$post->user_id=auth()->id();
    	$post->title=$request->title;
    	$post->description=$request->description;
    	$post->cat_id=$request->catagory;
    	$post->image=$name;
    	$post->slug=strtolower($request->title);
    	$post->save();
    	session()->flash('type','success');
    	session()->flash('post','post registration success');
    	return redirect()->back();
      }

    	catch(Exception $e){
      	session()->flash('type','danger');
      	session()->flash('post', $e->getMessage());

      }
  	
   	return redirect()->back();
   } 


   public function view($id){

      $view=post::find($id);
      return view('admin.post.view_post',compact('view'));
      
  } 

   public function edit($id){

      $edit=post::find($id);
      $catagory=catagory::all();
      return view('admin.post.edit_post',compact('edit','catagory'));
      
  } 


  public function update(Request $request,$id){

  	//return $request;

  	  $update=post::find($id);

  	

  	   if ($request->hasfile('image')){

       $image=$request->file('image');
    
       unlink(public_path('postimage/'.$update->image));
      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;

      //return $name;
      $location=public_path('postimage/');
      $upload=$image->move($location,$name);
      $update->image=$name;
      
    }else{
    	$name=$update->image;
    }
  	  

       $request->validate([
  		'title'=>'required|min:3|unique:posts,id,'.$id, //id dilae same name holae o nibae jodi o unique
  	   ]);
//return $request;
  	    
  	    $update->title=$request->title;
  	    $update->description=$request->description;
  	    $update->cat_id=$request->catagory;
  	    
  	    
    	
    	$update->save();
    	session()->flash('type','success');
    	session()->flash('post','post update success');
    	return redirect()->back();

  }



     public function delete($id){

      $delete=post::find($id);

      if(file_exists('postimage/'.$delete->image)){
      unlink(public_path('postimage/'.$delete->image));
      }
      $delete->delete();
      session()->flash('delete', 'post has delete successfully');
      return back();
  }
}
