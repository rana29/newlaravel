@extends('admin.components.layout')

@section('content')



          @if(session('delete'))

          <span class="alert alert-danger">{{ session('delete') }}</span>

          @endif

<table class="table table-bordered table-striped mt-4">
	<tr>
		<th>SL NO</th>
		<th>NAME</th>
		<th>SLUG</th>
		<th>STATUS</th>
		<th>ACTION</th>
	</tr>
	@foreach($catagory as $catagory)
	<tr>
		<td>{{$catagory->id}}</td>
		
		<td>{{$catagory->name}}</td>
		<td>{{$catagory->slug}}</td>
		<td>{{$catagory->status}}</td>
		<td>
			
			  <form method="post" action="{{route('catagory.delete',$catagory->id)}}">
               @csrf
               @method('delete')

               <button class="btn btn-danger">Delete</button>
               </form>

            <a href="{{route('catagory.view',$catagory->id)}}" class="btn btn-primary">view</a>                                 
            <a href="{{route('catagory.edit',$catagory->id)}}" class="btn btn-success">Edit</a>                                 

		</td>
		
		
	</tr>

	@endforeach
</table>
@endsection