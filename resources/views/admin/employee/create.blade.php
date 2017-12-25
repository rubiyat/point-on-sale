@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
  <h3>Add New Employee</h3>
  <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
        <label for="Name"><h5>Role Name</h5></label>
         <select class="form-control" name="role_id">
            @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
         </select>
      </div>
    <div class="form-group">  
          <label for="first_name"><b>First Name:</b></label>
          <input type="text" name="first_name" class="form-control">
        </div>

        <div class="form-group">  
          <label for="last_name"><b>Last Name:</b></label>
          <input type="text" name="last_name" class="form-control">
        </div>

        <div class="form-group">  
          <label for="address"><b>Address:</b></label>
          <input type="text" name="address" class="form-control">
        </div>

        <div class="radio">
            <label><input type="radio" name="gender" value="1">Male</label>
            <label><input type="radio" name="gender" value="2">Female</label>
        </div>

        <div class="form-group">  
          <label for="phone"><b>Phone:</b></label>
          <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">  
          <label for="email"><b>Email:</b></label>
          <input type="email" name="email" class="form-control">
        </div>
         <div class="form-group">  
          <label for="image"><b>Image</b></label>
          <input type="file" name="image">
        </div>
         <div class="form-group">  
          <label for="date_of_birth"><b>Date of Birth:</b></label>
          <input type="date" name="date_of_birth" class="form-control">
        </div>
         <div class="form-group">  
          <label for="join_date"><b>Join Date:</b></label>
          <input type="date" name="join_date" class="form-control">
        </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-default">Cancel</button>
      </div>

<form/>


</div>


	
@stop