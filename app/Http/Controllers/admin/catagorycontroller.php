<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\catagory;
use session;
use Exception;

class catagorycontroller extends Controller
{

	 public function manage(){

	$catagory=catagory::with('posts')->orderBy('id','desc')->get();
  //return $catagory;
	//$catagory=catagory::find(3); particular data 
	//$catagory=catagory::take(5)->get(); 5ta  data 
   	return view('admin.catagory.manage_catagory',compact('catagory'));
   } 


   public function create(){
   	return view('admin.catagory.create_catagory');
   } 

    public function store(Request $request){
        $request->validate([

        'name' =>'required|string|min:4',
        
        /*'image' =>'required|image',*/

      ]);

        try{
    	//dd($request->all());
    	$catagory=new catagory();
    	$catagory->name=$request->name;
    	$catagory->user_id=auth()->id();
    	$catagory->slug=strtolower($request->name);
    	$catagory->status=$request->status;
    	$catagory->save();
    	session()->flash('type','success');
    	session()->flash('catagory','catagory registration success');
    	return redirect()->back();
      }
    	catch(Exception $e){
      	session()->flash('type','danger');
      	session()->flash('catagory', $e->geMessage());

      }
   
   }

      public function view($id){

      $view=catagory::find($id);
      return view('admin.catagory.view_catagory',compact('view'));
      
  } 


      public function edit($id){

      $edit=catagory::find($id);
      if($edit)
      return view('admin.catagory.edit_catagory',compact('edit'));

     else 
  	 return redirect()->back();
      
  } 
  

  public function update(Request $request,$id){

  	$request->validate([
  		'name'=>'required|min:3|unique:catagories,id,'.$id, //id dilae same name holae o nibae jodi o unique
  	]);

  	    $update=catagory::find($id);
  	    $update->name=$request->name;
    	$update->user_id=auth()->id();
    	$update->slug=strtolower($request->name);
    	$update->status=$request->status;
    	$update->save();
    	session()->flash('type','success');
    	session()->flash('catagory','catagory update success');
    	return redirect()->back();

  }

  


     public function delete($id){

      $delete=catagory::find($id);
      $delete->delete();
      session()->flash('delete', 'catagory has delete successfully');
      return back();
  }
}
