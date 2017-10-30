@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 800px; margin-bottom: 20px;"><a href="/admin">Admin</a> / <a href="/admin/productcategory">Product Category</a> / Show</h2>
	
	<table class="table table-bordered table-hover table-responsive">
	    <thead class="thead-inverse">
<!-- 	      <tr>
	        <th>SL</th>
	        <th>Name</th>
	        <th>Description</th>
	        <th>Action</th>
	      </tr> -->
	    </thead>
	    <tbody>
	      <tr>
	        <th><b>Category Name:</b></th>

	        @if($categoriesShow)
	        @foreach($categoriesShow as $categoryShow)
	        	<td>{{$categoryShow->name}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      <tr>
	        <th><b>Description:</b></th>

	        @if($categoriesShow)
	        @foreach($categoriesShow as $categoryShow)
	        	<td>{{$categoryShow->description}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      <tr>
	        <th><b>Status:</b></th>

	        @if($categoriesShow)
	        @foreach($categoriesShow as $categoryShow)
	        	<td>{{$categoryShow->status}}</td>
	        @endforeach
	        @endif
	      </tr>
	    </tbody>
	</table>


	<div class="col-md-4 text-center">
		<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/productcategory';" value="&larr;Back">

@stop