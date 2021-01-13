@extends('admin.components.layout')

@section('content')



        

<table class="table table-bordered table-striped mt-4">
	<tr>
		<th>SL NO</th>
		<th>TITLE</th>
		<th>DESCRIPTION</th>
		<th>SLUG</th>
		<th>ACTION</th>
	</tr>
	<tr>
		<td>{{$view->title}}</td>
		<td>{{$view->description}}</td>
		<td>{{$view->slug}}</td>
		
	</tr>

@endsection('content')
