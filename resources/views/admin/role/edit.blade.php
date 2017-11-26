@extends('layouts.admin')

@section('content')

    <h1>Edit Role</h1>

    <form action="{!! action('RoleController@update', $role->id) !!}" method="POST">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="form-group">

            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$role->name}}">

        </div>
        <div class="form-control">

            <input type="submit" class="btn btn-primary" value="submit">
            <a href="{{route('role.index')}}" class="btn btn-default">Cancel</a>

        </div>
    </form>

@stop
