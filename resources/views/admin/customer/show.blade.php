@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
		<h1>Customer Details</h1>
		
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">
	
		    </thead>
		    <tbody>
		      <tr>
		        <th><b>Supplier Id:</b></th>

		       
		        	<td>{{$customer->id}}</td>
		    
		      </tr>
		      <tr>
		        <th><b>First Name:</b></th>

		     
		        	<td>{{$customer->first_name}}</td>
			      </tr>
		      <tr>
		        <th><b>Last Name:</b></th>

		      
		        	<td>{{$customer->last_name}}</td>
		       
		      </tr>
		     
		      <tr>
		        <th><b>Address:</b></th>

		      
		        	<td>{{$customer->address}}</td>
		       
		      </tr>
		        <tr>
		        <th><b>Address:</b></th>

		      
		        	<td>{{$customer->gender}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Email:</b></th>

		      
		        	<td>{{$customer->email}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Phone:</b></th>

		    
		        	<td>{{$customer->phone_number}}</td>
		      
		      </tr>
		    </tbody>
		</table>

<a href="{{ route('customer.index') }}"><button type="button" class="btn btn-info">Back</button></a>
		
	
</div>

@stop