@extends('admin.components.layout')

@section('content')



          @if(session('delete'))

          <span class="alert alert-danger">{{ session('delete') }}</span>

          @endif

<table class="table table-bordered table-striped mt-4">
	<tr>
		<th>SL NO</th>
		<th>USER</th>
		
		<th>TITLE</th>
		<th>DESCRIPTION</th>
		<th>SLUG</th>
		<th>CATAGORY</th>
		<th>IMAGE</th>		
	</tr>

	@foreach($posts as $post)


	<tr>
		<td>{{$post->id}}</td>
		<td>{{$post->user->name}}</td>
		
		
		
		<td>{{$post->title}}</td>
		<td>{{$post->description}}</td>
		<td><a href="{{$post->slug}}">click here</a></td>
		<td>{{$post->catagory->name}}</td>
		 <td><img src="{{asset('postimage/'.$post->image)}}" style="width:50px"></td>
		
			<td>
			  <form method="post" action="{{route('post.delete',$post->id)}}">
               @csrf
               @method('delete')

               <button class="btn btn-danger">Delete</button>
               </form>

            <a href="{{route('post.view',$post->id)}}" class="btn btn-primary">view</a>                                 
            <a href="{{route('post.edit',$post->id)}}" class="btn btn-success">Edit</a>                                 

		</td>
		
		
	</tr>

	@endforeach


</table>

<!-- {{ $posts->links() }} -->
@endsection