@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="">Admin</a> / Product Category</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

    <a href="{{url('admin/productcategory/create')}}"><button class="btn btn-primary" style="margin-bottom: 20px;">New Product Category</button></a>
	
	<table class="table table-bordered table-hover">
	    <thead class="thead-inverse">
	      <tr>
	        <th>SL</th>
	        <th>Name</th>
	        <th>Description</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td></td>
            <td><a href="{{url('/admin/productcategory/show')}}"><button class="btn btn-info">Show</button></a></td>
            <td><a href="{{url('/admin/productcategory/edit')}}"><button class="btn btn-success">Edit</button></a></td>
	        <td><button class="btn btn-danger">Delete</button></td>
	      </tr>
	      <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td></td>
			<td><a href="{{url('/admin/productcategory/show')}}"><button class="btn btn-info">Show</button></a></td>
	        <td><a href="{{url('/admin/productcategory/edit')}}"><button class="btn btn-success">Edit</button></a></td>
	        <td><button class="btn btn-danger">Delete</button></td>
	      </tr>
	      <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td></td>
			<td><a href="{{url('/admin/productcategory/show')}}"><button class="btn btn-info">Show</button></a></td>
            <td><a href="{{url('/admin/productcategory/edit')}}"><button class="btn btn-success">Edit</button></a></td>
	        <td><button class="btn btn-danger">Delete</button></td>
	      </tr>
	      <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td><a href="{{url('/admin/productcategory/show')}}"><button class="btn btn-info">Show</button></a></td>
            <td><a href="{{url('/admin/productcategory/edit')}}"><button class="btn btn-success">Edit</button></a></td>
	        <td><button class="btn btn-danger">Delete</button></td>
	      </tr>
	    </tbody>
	</table>

@stop