@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 800px; margin-bottom: 20px;"><a href="">Admin</a> / <a href="">Product Category</a> / Show</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

	<button class="btn btn-primary" style="margin-bottom: 20px;">New Product Category</button>
	
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
	        <th scope="row">Category Name:</th>
	        <td>Test</td>
	      </tr>
	      <tr>
	        <th scope="row">Description:</th>
	        <td>Some text for description</td>	
	      </tr>
	      <tr>
	        <th scope="row">Status:</th>
	        <td>Published</td>
	      </tr>
	    </tbody>
	</table>


	<div style="margin-right:auto; margin-left:500px;">
		<button class="btn btn-warning"><a href="/admin/productcategory">&larr; Back</a></button>
	</div>


@stop