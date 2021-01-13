@extends('Frontend.components.layouts')

@section('title')
Blog Home
@endsection

@section('content')


        <h1 class="my-4">My Blog
          
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('postimage/'.$single->image)}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$single->title}}</h2>
            <p class="card-text">{{$single->description}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>


       
@endsection