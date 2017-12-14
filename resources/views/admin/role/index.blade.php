@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
        <h1>Role's Details</h1>

        <a href="{{ route('role.create') }}"><button type="button" class="btn btn-primary">Add New Role</button></a><br><br>

       <table class="table table-striped">
            
            <thead>
                <tr>
                    <th style="width:5%;text-align: center;">SL</td>
                    <th style="width:70%;text-align: center;">Role</td>
                    <th style="width:25%;text-align: center;">Action</td>
                </tr>
            </thead>
            <tbody>

                @if($roles)
                @foreach($roles as $role)
        
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                           
                    <td>
                        <a href="{{route('role.show', $role->id)}}"><button type="button" class="btn btn-primary">Show</button></a>

                        <a href="{{route('role.edit', $role->id)}}"><button type="button" class="btn btn-info">Edit</button></a>

                        <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                        <form action="{!! action('RoleController@destroy', $role->id) !!}" method="POST">
                                

                    </td>
                </tr>

                @endforeach
                @endif
                                 
            </tbody>
        </table>   
</div>
  
	

@stop