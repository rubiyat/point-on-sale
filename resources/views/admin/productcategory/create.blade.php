@extends('layouts.admin')

@section('content')

					<h3>Add New Product Category</h3>
					<hr>

<div class="col-md-12">
  <form action="{{route('productcategory.store')}}" method="POST">
    {{ csrf_field() }}

      <div class="form-group">
        <label for="Name"><h5>Category Name</h5></label>
       
          <input type="text" class="form-control col-md-12" id="Name" name="name">
   
      </div>
      <div class="form-group">
        <label for="Description"><h5>Description</h5></label>
        <textarea class="form-control" id="Description" name="description"></textarea>
      </div>
    <div class="form-group">
        <label for="Status"><h5>Status</h5></label>
      <select class="form-controls" name="status">
          <option value="1">Approve</option>
          <option value="2">Unapprove</option>
      </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-default">Cancel</button>
      </div>

<form/>


</div>


	
@stop