@extends('Frontend.components.layouts')

@section('title')
Blog Home
@endsection

@section('content')

       @if(count($cat)==0)
       No post Found
       @endif
        <h1 class="my-4">Catagory  post
          
        </h1>

         Blog Post 
        @foreach($cat as $post)
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('postimage/'.$post->image)}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->description}}</p>
            <a href="{{route('post.slug',$post->slug)}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{date('d m y',strtotime($post->created_at))}} by
            <a href="#">{{$post->user->name}}</a>
          </div>
        </div>

        @endforeach -->


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
@endsection