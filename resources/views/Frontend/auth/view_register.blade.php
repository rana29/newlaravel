@extends('Frontend.components.layouts')

@section('title')
Blog Home
@endsection

@section('content')


        <h1 class="my-4">User Register Form </h1>
          
        

        <!-- Blog Post -->
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
        	@if(session('message'))

        	<span class="alert alert-{{ session('type') }}">{{ session('message') }}</span>

        	@endif
        			
        	<form action="{{route('user.save_register')}}" method="post" enctype="multipart/form-data">
        		
        	@csrf

        	<div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">User name</label>
                 <div class="col-sm-9">
                   <input type="text" class="form-control" name="name" id="user_name" placeholder="user name" value="{{old('name')}}">

                   @error('name')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
             </div>

             <div class="form-group">
               <label for="email" class="col-sm-3 control-label">Email</label>
                 <div class="col-sm-9">
                   <input type="text" class="form-control" name="email" id="user_name" placeholder="Enter email" value="{{old('email')}}">
                   @error('email')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
             </div>

             <div class="form-group">
               <label for="password" class="col-sm-3 control-label">Password</label>
                 <div class="col-sm-9">
                   <input type="text" class="form-control" name="password" id="password" placeholder="Enter password" value="{{old('password')}}">

                   @error('password')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
             </div>

             <div class="form-group">
               <label for="image" class="col-sm-3 control-label">Profile image</label>
                 <div class="col-sm-9">
                   <input type="file" class="form-control" name="image" id="image"  value="{{old('image')}}">

                   @error('image')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
             </div>

             <div class="form-group text-right">
               <button class="btn btn-primary ">Register</button>
             </div>


          </form>

        </div>

@endsection