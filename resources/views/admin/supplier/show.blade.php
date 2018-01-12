@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
	<div class="col-sm-6">
		<h1>Supplier Details</h1>
	</div>
	<div class="col-sm-6">
		<button style="margin-top: 25px;"  onclick="window.location.href='{{route('supplier.index')}}'" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Go to Index</button>
		<button type="button" onclick="window.print();" class="btn btn-info pull-right" style="margin-top: 25px;margin-right: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
	</div>
	<div class="clearfix"></div>
		
		
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">
	
		    </thead>
		    <tbody>
		      <tr>
		        <td><b>Supplier Id:</b></td>

		       
		        	<td>{{$supplier->id}}</td>
		    
		      </tr>
		      <tr>
		        <td><b>First Name:</b></td>

		     
		        	<td>{{$supplier->first_name}}</td>
			      </tr>
		      <tr>
		        <td><b>Last Name:</b></td>

		      
		        	<td>{{$supplier->last_name}}</td>
		       
		      </tr>
		      <tr>
		        <td><b>Company Name:</b></td>

		      
		        	<td>{{$supplier->company_name}}</td>
		       
		      </tr>
		      <tr>
		        <td><b>Address:</b></td>

		      
		        	<td>{{$supplier->address}}</td>
		       
		      </tr>
		      <tr>
		        <td><b>Email:</b></td>

		      
		        	<td>{{$supplier->email}}</td>
		       
		      </tr>
		      
		    </tbody>
		</table>

		<div class="row">
			<div class="col-sm-6">
				<b>Phone:</b>
				{{$supplier->phone}}
			</div>
			<div class="col-sm-6">
				<button class="btn btn-warning" onclick="window.location.href='{{route('supplier.edit', $supplier->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i> Edit</button>
                                       
                <form action="{!! action('SupplierController@destroy', $supplier->id) !!}" method="POST" style="display: inline-block;">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i> Delete</button>
                </form>
				
			</div>
			<div class="clearfix"></div>
		</div>

</div>

@stop