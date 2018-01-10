@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
        <h1>Role's Details</h1>

         <button class="btn btn-primary" onclick="window.location.href='{{route('role.create')}}'"><i class="glyphicon glyphicon-plus"></i> Add New Role</button>
         <button type="button" onclick="window.print();" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button><br><br>

       <table class="table table-bordered table-hover table-responsive">
            
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="50%">Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @if($roles)
                @foreach($roles as $role)
        
                <tr>
                    <td>{{$number++}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        {!! ($role->status == 0) ? 
                            '<span class="label label-success">Active</span>' :
                            '<span class="label label-danger">Inactive</span>'
                        !!}
                    </td>       
                    <td>
                         <button class="btn btn-info" onclick="window.location.href='{{route('role.show', $role->id)}}'"><i class="glyphicon glyphicon-eye-open" title="Show"></i></button>

                          <button class="btn btn-warning" onclick="window.location.href='{{route('role.edit', $role->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i></button>                     
                       
                        <form action="{!! action('RoleController@destroy', $role->id) !!}" method="POST" style="display: inline-block;">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i></button>
                        </form>        

                    </td>
                </tr>

                @endforeach
                @endif
                                 
            </tbody>
        </table>   
</div>
  
	

@stop