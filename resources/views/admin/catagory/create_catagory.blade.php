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
          <h1 class="text-center mt-4 text-success">Catagoy Add Form</h1>



         @if(session('catagory'))

          <span class="alert alert-{{ session('type') }}">{{ session('catagory') }}</span>

          @endif


              
          <form action="{{route('catagory.store')}}" method="post" enctype="multipart/form-data">
            
          @csrf

          <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Catagory name name</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="name" id="name" placeholder="catagogry name" value="{{old('name')}}">

                   @error('name')<span class="text-danger font-italic">{{ $message }}</span>@enderror
                 </div>
          </div>

           <div class="form-group">
               <label for="user_name" class="col-sm-3 control-label">Status</label><br>
               <label>Active</label>
                 
               <input type="radio"  name="status" id="name"  value="active">

               <label>Inactive</label>
                 
               <input type="radio"  name="status" id="name"  value="inactive">

                 
          </div>

           
            

             <div class="form-group text-right">
               <button class="btn btn-primary ">Add catagory</button>
             </div>


          </form>

        </div>
        	

     

@endsection