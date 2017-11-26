@extends('layouts.admin')

@section('content')

    <style type="text/css">
        
        #aTag:hover { color:  #428bca; }
        #aTag:visited { color: none; }

    </style>

	<h1>Role's Details</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / roles</h2>

	<hr style="border-top: solid #DCDCDC 1px;">


  
    <a href="{{ route('role.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Add Role</a>



   <table class="table table-bordered table-hover table-responsive">
        
        <thead>
        	<tr>
				<th style="width: 10%;">SL</td>
				<th style="text-align: center; width: 44.33%;">Role</td>
				<th style="text-align: center; width: 30%;">Action</td>
			</tr>
		</thead>
		<tbody>

		    @if($roles)
		    @foreach($roles as $role)
	
			<tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                       
                <td>
                    <a href="" class="btn btn-primary"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                    <a class="btn btn-info" href="{{route('role.edit', $role->id)}}"><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                    <a href="#" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Delete</span></a>

                </td>
            </tr>

            @endforeach
  			@endif
                             
        </tbody>
    </table>   

@stop