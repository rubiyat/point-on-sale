@extends('layouts.admin')

@section('content')

	<div class="col-sm-12">
		<div class="col-sm-6">
			<h1>Show Product Category</h1>
		</div>
		<div class="col-sm-6">
			<button style="margin-top: 25px;"  onclick="window.location.href='{{route('productcategory.index')}}'" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Go to Index</button>
			<button type="button" onclick="window.print();" class="btn btn-info pull-right" style="margin-top: 25px;margin-right: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
		</div>
		<div class="clearfix"></div>
		
		
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">

		    </thead>
		    <tbody>
		      <tr>
		        <td width="20%"><b>Category Name:</b></td>

		    
		        	<td>{{$productCategory->name}}</td>
		      
		      </tr>
		      <tr>
		        <td width="20%"><b>Description:</b></td>

		    
		        	<td>{{$productCategory->description}}</td>
		  
		      </tr>
		    </tbody>
		</table>
		<div class="row">
			<div class="col-sm-6">
				<b>Status:</b>
				{!! ($productCategory->status) ? 
				    '<span>Active</span>' :
				    '<span>Inactive</span>'
				 !!}
			</div>
			<div class="col-sm-6">
				
				<form style="margin-right: 5px;" class="pull-right" action="{!! action('ProductCategoryController@destroy', $productCategory->id) !!}" method="POST" style="display: inline-block;">
					{{ csrf_field() }} {{ method_field('DELETE') }}
					<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i> Delete</button>
				</form>
				
				<button style="margin-right: 5px;" class="btn btn-warning pull-right" onclick="window.location.href='{{route('productcategory.edit', $productCategory->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i> Edit</button>
			</div>
			<div class="clearfix"></div>
		</div>
</div>

@stop