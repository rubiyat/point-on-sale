@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
		<h1>Product Category</h1>
		
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">
	
		    </thead>
		    <tbody>
		      <tr>
		        <th><b>Supplier Id:</b></th>

		       
		        	<td>{{$supplier->id}}</td>
		    
		      </tr>
		      <tr>
		        <th><b>First Name:</b></th>

		     
		        	<td>{{$supplier->first_name}}</td>
			      </tr>
		      <tr>
		        <th><b>Last Name:</b></th>

		      
		        	<td>{{$supplier->last_name}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Company Name:</b></th>

		      
		        	<td>{{$supplier->company_name}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Address:</b></th>

		      
		        	<td>{{$supplier->address}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Email:</b></th>

		      
		        	<td>{{$supplier->email}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Phone:</b></th>

		    
		        	<td>{{$supplier->phone}}</td>
		      
		      </tr>
		    </tbody>
		</table>

<a href="{{ route('supplier.index') }}"><button type="button" class="btn btn-info">Back</button></a>
		
	
</div>

@stop