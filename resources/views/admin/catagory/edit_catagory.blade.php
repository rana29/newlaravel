@extends('admin.components.layout')

@section('content')

<div class="card mb-4">
          <!-- @if($errors->any())

             <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
             </div>
          @endif -->
          <h1 class="text-center mt-4 text-success">Catagoy Update</h1>



         @if(session('catagory'))

          <span class="alert alert-{{ session('type') }}">{{ session('catagory') }}</span>

          @endif


              
          <form action="{{route('catagory.update',$edit->id)}}" method="post" enctype="multipart/form-data">
            
          @csrf
          @method('put')

          <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Catagory name</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="name" id="name"  value="{{$edit->name}}">

                   @error('name')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Status</label><br>
               <label>Active</label>
                 
               <input type="radio"  name="status" id="name"  value="active"
               {{$edit->status=='active'?'checked':''}}>

               <label>Inactive</label>
                 
               <input type="radio"  name="status" id="name"  value="inactive" 
               {{$edit->status=='inactive'?'checked':''}}>

                 
          </div>

           
            

             <div class="form-group text-right">
               <button class="btn btn-primary ">Update catagory</button>
             </div>


          </form>

        </div>
        	

     

@endsection