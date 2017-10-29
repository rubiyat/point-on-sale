@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 800px; margin-bottom: 20px;"><a href="/admin">Admin</a> / <a href="/admin/productcategory">Product Category</a> / Show</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

	<button style="margin-bottom: 20px;" class="btn btn-primary"><a href="{{url('/admin/productcategory/create')}}" style="color: white; text-decoration: none;">New Product Category</a></button>
	
	<table class="table table-bordered table-hover">
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


<<<<<<< HEAD
	<div style="margin-right:auto; margin-left:500px;">
		<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/productcategory';" value="&larr;Back">
=======
	<div>
		<a href="{{url('/admin/productcategory')}}"><button class="btn btn-warning">&larr; Back</button></a>
>>>>>>> 821a885e863b15dad15815e3e86f1014a4ea798a
	</div>


@stop