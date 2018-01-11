@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
	
	<div class="col-sm-6">
		<h1>Show Role</h1>
	</div>
	<div class="col-sm-6">
		<button style="margin-top: 25px;"  onclick="window.location.href='{{route('role.index')}}'" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Go to Index</button>
		<button type="button" onclick="window.print();" class="btn btn-info pull-right" style="margin-top: 25px;margin-right: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
	</div>
	<div class="clearfix"></div>
	
	<table class="table table-bordered table-hover table-responsive">
	    <thead class="thead-inverse">

	    </thead>
	    <tbody>
	    <tr>
	      <td width="20%"><b>Name:</b></td>
	      
	     
	      		<td>{{$role->name}}</td>
	      
	    </tr>
	      <tr>
	        <td width="20%"><b>Description:</b></td>
		       
		      
	        		<td>{{$role->description}}</td>
	        
	      </tr>
	    </tbody>
	</table>
	<div class="row">
			<div class="col-sm-6">
				<b>Status:</b>
				{!! ($role->status) ? 
				    '<span>Active</span>' :
				    '<span>Inactive</span>'
				 !!}
			</div>
			<div class="col-sm-6">
				<button style="margin-right: 5px;" class="btn btn-warning" onclick="window.location.href='{{route('role.edit', $role->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i> Edit</button>
				<form action="{!! action('RoleController@destroy', $role->id) !!}" method="POST" style="display: inline-block;">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i> Delete</button>
                </form>    
				
				
			</div>
			<div class="clearfix"></div>
		</div>
</div>

@stop