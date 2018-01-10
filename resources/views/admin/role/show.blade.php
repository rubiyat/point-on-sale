@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
	<h1>Show Role</h1>
	
	<table class="table table-bordered table-hover table-responsive">
	    <thead class="thead-inverse">

	    </thead>
	    <tbody>
	      <tr>
	        <td><b>Role Description:</b></td>
		       
		      
	        		<td>{{$role->description}}</td>
	        
	      </tr>

	      <tr>
	        <td><b>Role Status:</b></td>
	       
		       
	        		<td>{{$role->status}}</td>
	      
	      </tr>
	      
	    </tbody>
	</table>

		<!--Start Buttton -->

		<a href="{{ route('role.index') }}"><button type="button" class="btn btn-info">Back</button></a>
</div>

@stop