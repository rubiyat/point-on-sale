@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
  <h3>Add New Product Category</h3>
  @if(count($errors))
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <br/>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <form action="{{route('productcategory.store')}}" method="POST">
    {{ csrf_field() }}

      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="Name"><h5>Category Name</h5></label>
       
        <input type="text" class="form-control" id="Name" name="name">
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>
      <div class="form-group">
        <label for="Description">Description</label>
        <textarea class="form-control" rows="5" id="Description" name="description"></textarea>
      </div>
    <div class="form-group">
      <label for="Status">Status</label>
      <select class="form-control" name="status">
          <option value="0">Active</option>
          <option value="1">Inactive</option>
      </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" onclick="window.location.href='{{route('productcategory.index')}}'" class="btn btn-default">Cancel</button>
      </div>

<form/>


</div>


	
@stop