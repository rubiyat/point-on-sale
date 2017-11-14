@extends('layouts.admin')

@section('content')

    <style type="text/css">
        
        #aTag:hover { color:  #428bca; }
        #aTag:visited { color: none; }

    </style>

	<h1>role's Details</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / roles</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

<div class="input-prepend">
    <span class="add-on" style="border-radius: 5px 0px 0px 5px; background-color: #C0C0C0; height: 24.5px; width: 25px;"><a id="aTag" style="text-decoration:none;" href=""><i class="icon-plus icon-large"></i></a></span>
    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Add Role</a>
</div>


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

                    <a class="btn btn-info" href=""><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                    <a href="#" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Delete</span></a>

                </td>
            </tr>

            @endforeach
  			@endif
                             
        </tbody>
    </table>   

@stop