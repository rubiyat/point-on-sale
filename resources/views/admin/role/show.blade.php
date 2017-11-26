@extends('layouts.admin')

@section('content')

	<h1>Show Role</h1><h2 style="margin-left: 800px; margin-bottom: 20px;"><a href="/admin">Admin</a> / <a href="/admin/role">Role Details</a> / Show</h2>
	
	<table class="table table-bordered table-hover table-responsive">
	    <thead class="thead-inverse">

	    </thead>
	    <tbody>
	      <tr>
	        <th><b>Id:</b></th>

	        @if($rolesShow)
	        @foreach($rolesShow as $roleShow)
	        	<td>{{$roleShow->id}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      <tr>
	        <th><b>Name:</b></th>

	        @if($rolesShow)
	        @foreach($rolesShow as $roleShow)
	        	<td>{{$roleShow->name}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      
	    </tbody>
	</table>


	<div class="col-md-4 text-center">
		<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/role';" value="&larr;Back">

@stop