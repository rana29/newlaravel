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
          <h1 class="text-center mt-4 text-success">Post Add Form</h1>



         @if(session('post'))

          <span class="alert alert-{{ session('type') }}">{{ session('post') }}</span>

          @endif


              
          <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            
          @csrf

          <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">post title</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="title" id="name" placeholder="post title" value="{{old('title')}}">

                   @error('title')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Select catagory</label>
                 <div class="col-sm-7">
                   <select class="form-control" name="catagory">
                     <option>Select catagory</option>
                     @foreach($catagory as $catagory)
                     <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                     @endforeach
                   </select>

                   @error('title')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>


           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Description</label>
                 <div class="col-sm-7">
                   <textarea type="text" class="form-control" name="description" id="name"  value="{{old('description')}}"> </textarea>

                   @error('description')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Image</label>
                 <div class="col-sm-7">
                   <input type="file" class="form-control" name="image" value="{{old('image')}}">

                   @error('image')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Status</label><br>
               <label>Active</label>
                 
               <input type="radio"  name="status" id="name"  value="active" >

               <label>Inactive</label>
                 
               <input type="radio"  name="status" id="name"  value="inactive">

                 
          </div>

           
            

             <div class="form-group text-right">
               <button class="btn btn-primary ">Add post</button>
             </div>


          </form>

        </div>
        	

     

@endsection