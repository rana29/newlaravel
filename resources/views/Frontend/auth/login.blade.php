@extends('Frontend.components.layouts')

@section('title')
Blog Home
@endsection

@section('content')


        <h1 class="my-4">User Login Form </h1>
          
        

        <!-- Blog Post -->
        <div class="card mb-4">
        	
        	@if(session('message'))

        	<span class="alert alert-{{ session('type') }}">{{ session('message') }}</span>

        	@endif
        			
        	<form action="{{route('user.store_login')}}" method="post">
        		
        	@csrf


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

             

             <div class="form-group text-right">
               <button class="btn btn-primary ">Login</button>
             </div>


          </form>

        </div>

@endsection