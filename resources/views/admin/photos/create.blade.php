@extends('layouts.admin')

@section('content')

<div class="col-md-12">

<h1>Create Users</h1>
<form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="photo_id"><h5>Photo</h5></label>
        <input type="file" name="photo_id">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" onclick="window.location.href='{{route('photos.index')}}'" class="btn btn-default">Cancel</button>
    </div>
</form>

</div>

@stop