@extends('admin.components.layout')

@section('content')



        

<table class="table table-bordered table-striped mt-4">
	<tr>
		<th>SL NO</th>
		<th>NAME</th>
		<th>SLUG</th>
		<th>STATUS</th>
		<th>ACTION</th>
	</tr>
	<tr>
		<td>{{$view->name}}</td>
	</tr>

@endsection('content')
