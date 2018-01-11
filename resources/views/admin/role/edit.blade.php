@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
    <h1>Edit Role</h1>
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

    <form action="{!! action('RoleController@update', $role->id) !!}" method="POST">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$role->name}}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group">
            <label for="Description"><h5>Description</h5></label>
            <textarea class="form-control" id="Description" name="description" cols="12" rows="5">{{$role->description}}</textarea>
      </div>
      <div class="form-group">
            <label for="Status"><h5>Status</h5></label>
            <select class="form-control" name="status">
                <option value="0">Active</option>
                <option value="1">Inactive</option>
        </select>
      </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" onclick="window.location.href='{{route('role.index')}}'" class="btn btn-default">Cancel</button>
        </div>
    </form>
</div>
    
@stop
