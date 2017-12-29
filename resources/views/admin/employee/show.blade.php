@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
		<h1>Employee Details</h1>
		
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">
	
		    </thead>
		    <tbody>
		      <tr>
		        <th><b>Employee Id:</b></th>

		       
		        	<td>{{$employee->id}}</td>
		    
		      </tr>
		      <tr>
		        <th><b>First Name:</b></th>

		     
		        	<td>{{$employee->first_name}}</td>
			      </tr>
		      <tr>
		        <th><b>Last Name:</b></th>

		      
		        	<td>{{$employee->last_name}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Address:</b></th>

		      
		        	<td>{{$employee->address}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Email:</b></th>

		      
		        	<td>{{$employee->email}}</td>
		       
		      </tr>
		      <tr>
		        <th><b>Phone:</b></th>

		    
		        	<td>{{$employee->phone}}</td>
		      
		      </tr>
		      <tr>
		        <th><b>Image:</b></th>

		    
		        	<td><img height="100" src="{{$employee->image ? $employee->image : "http://placehold.it/400x400"}}"/></td>
		      
		      </tr>
		      <tr>
		        <th><b>Date Of Birth:</b></th>

		    
		        	<td>{{$employee->date_of_birth}}</td>
		      
		      </tr>
		      <tr>
		        <th><b>Join Date:</b></th>

		    
		        	<td>{{$employee->join_date}}</td>
		      
		      </tr>
		    </tbody>
		</table>

<a href="{{ route('employee.index') }}"><button type="button" class="btn btn-info">Back</button></a>
		
	
</div>

@stop