@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Product Category</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

	<!-- <input type="button" name="buttonNewCategory" style="margin-bottom: 20px;" class="btn btn-primary" value="New Product Category">
 -->
 <a class="btn btn-primary" href="{{ route('admin.productcategory.create')}}">New Product Category </a>

            <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
            	  <th>SL</th>
	        	  <th>Name</th>
	        	  <th>Description</th>
	        	  <th>Action</th>
	        	  <th></th>
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

                       
                        <td>
                        	<a href="{{route('admin.productcategory.show', $productCategory->id)}}" class="btn btn-warning"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                        	<a class="btn btn-info" href="{{url('/admin/productcategory/edit')}}"><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                        	<a href="#" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Delete</span></a>

                        </td>

						</tr>

	        			@endforeach

	        		@endif

                </tbody>
            </table>

@stop