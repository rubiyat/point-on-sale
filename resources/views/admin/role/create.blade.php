@extends('layouts.admin')

@section('content')

					<h3>Add New Role</h3>
					<hr>

<div class="col-md-12">
  <form action="{{route('role.store')}}" method="POST">
    {{ csrf_field() }}

      <div class="form-group">
        <label for="Name"><h5>Name</h5></label> 
        <input type="text" class="form-control col-md-12" id="Name" name="name">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-default" href="{{route('role.index')}}">Cancel</a>
      </div>

<form/>

</div>
	
@stop