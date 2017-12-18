@extends('layouts.admin')

@section('content')

	<div class="col-sm-12">
		<h1>Show Product Category</h1>
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">

		    </thead>
		    <tbody>
		      <tr>
		        <th><b>Category Name:</b></th>

		    
		        	<td>{{$productCategory->name}}</td>
		      
		      </tr>
		      <tr>
		        <th><b>Description:</b></th>

		    
		        	<td>{{$productCategory->description}}</td>
		  
		      </tr>
		      <tr>
		        <th><b>Status:</b></th>

		        	<td>{{$productCategory->status}}</td>
	
		      </tr>
		    </tbody>
		</table>
		<a href="{{ route('productcategory.index') }}"><button type="button" class="btn btn-info">Back</button></a>
</div>

@stop