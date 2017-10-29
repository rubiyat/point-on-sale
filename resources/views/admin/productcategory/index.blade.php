@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Product Category</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

	<input type="button" name="buttonNewCategory" style="margin-bottom: 20px;" class="btn btn-primary" onclick="window.location='#';" value="New Product Category">


            <table class="table table-hover">
                <thead>
                <tr>
            	  <th>SL</th>
	        	  <th>Name</th>
	        	  <th>Description</th>
	        	  <th>Action</th>
                </tr>
                </thead>
                <tbody>

					@if($productCategories) 

                    	@foreach($productCategories as $productCategory)

                    	<tr>

                        <td>{{$productCategory->id}}</td>
                       	<td>{{$productCategory->name}}</td>
                        <td>{{$productCategory->description}}</td>
                        <td>{{$productCategory->status}}</td>

                       
                        <td><a href="{{route('admin.productcategory.show', $productCategory->id)}}" class="btn btn-info">Show</a></td>
	        			<td><button class="btn btn-success"><a href="{{url('/admin/productcategory/edit')}}" style="color: white; text-decoration: none;">Edit</a></button></td>
	        			<td><button class="btn btn-danger">Delete</button></td>

						</tr>

	        			@endforeach

	        		@endif

                </tbody>
            </table>

@stop