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



         @if(session('post'))

          <span class="alert alert-{{ session('type') }}">{{ session('post') }}</span>

          @endif


              
          <form action="{{route('post.update',$edit->id)}}" method="post" enctype="multipart/form-data">
            
          @csrf
          @method('put')

          <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">post title</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="title" id="name"  value="{{$edit->title}}">

                   @error('title')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Select catagory</label>
                 <div class="col-sm-7">
                   <select class="form-control" name="catagory">
                     <option>Select catagory</option>
                     @foreach($catagory as $catagory)
                    <option value="{{$catagory->id}}" {{ $edit->cat_id==$catagory->id ?'selected':'' }}>
                      {{$catagory->name}}</option>
                     @endforeach
                   </select>

                   @error('title')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

            <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">post description</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="description" id="name"  value="{{$edit->description}}">

                   @error('description')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>

          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Status</label><br>
               <label>Active</label>
                 
               <input type="radio"  name="status" id="name"  value="active"
               {{$edit->status=='active'?'checked':''}}>

               <label>Inactive</label> 
                 
              <input type="radio"  name="status" id="name"  value="active"
               {{$edit->status=='inactive'?'checked':''}}>

                 
          </div>


          <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Image</label>
                 <div class="col-sm-7">
                   <input type="file" class="form-control" name="image">
                  

                   @error('image')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           
            

             <div class="form-group text-right">
               <button class="btn btn-primary ">Update post</button>
             </div>


          </form>

        </div>
        	

     

@endsection