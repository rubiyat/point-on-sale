@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
	<h1>Show Role</h1>
	
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

		<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/role';" value="&larr;Back">
</div>

@stop