@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
    <h1>Edit Role</h1>

    <form action="{!! action('RoleController@update', $role->id) !!}" method="POST">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$role->name}}">
        </div>
        <div class="form-group">
            <label for="Description"><h5>Description</h5></label>
            <textarea class="form-control col-md-12" id="Description" name="description">{{$role->description}}</textarea>
      </div>
      <div class="form-group">
            <label for="Status"><h5>Status</h5></label>
            <select class="form-control" name="status">
                <option value="0">Active</option>
                <option value="1">Inactive</option>
        </select>
      </div>
        <div class="form-group">

            <input type="submit" class="btn btn-primary" value="submit">
            <a href="{{route('role.index')}}" class="btn btn-default">Cancel</a>

        </div>
    </form>
</div>
    
@stop
