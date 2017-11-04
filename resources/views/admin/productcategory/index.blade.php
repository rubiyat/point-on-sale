@extends('layouts.admin')

@section('content')

    <style type="text/css">
        
        #aTag:hover { color:  #428bca; }
        #aTag:visited { color: none; }

    </style>

	<h1>Product Category</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Product Category</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

<<<<<<< HEAD
<!-- 	<input type="button" name="buttonNewCategory" style="margin-bottom: 20px;" class="btn btn-primary" onclick="window.location='#';" value="New Product Category"> -->

<div class="input-prepend">
    <span class="add-on" style="border-radius: 5px 0px 0px 5px; background-color: #C0C0C0; height: 24.5px; width: 25px;"><a id="aTag" style="text-decoration:none;" href=""><i class="icon-plus icon-large"></i></a></span>
    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Add Category</a>
</div>
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
=======
    <a class="btn btn-primary" href="{{route('productcategory.create')}}">New Product Category </a>

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
>>>>>>> 5b863eeb76f9f181f89d6d1d019649910a0fcc28

            @foreach($productCategories as $productCategory)

                <tr>

                    <td>{{$productCategory->id}}</td>
                    <td>{{$productCategory->name}}</td>
                    <td>{{$productCategory->description}}</td>
                    <td>{{$productCategory->status}}</td>

                       
                    <td>
                        <a href="{{route('productcategory.show', $productCategory->id)}}" class="btn btn-warning"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                        <a class="btn btn-info" href="{{route('productcategory.edit', $productCategory->id)}}"><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                        <a href="#" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Delete</span></a>

                    </td>

                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop