@extends('layouts.admin')

@section('content')

 
    <div class="col-sm-12">
             <h1>Employee Details</h1><br>
                
                <div class="input-prepend gap">
                    <a href="{{route('employee.create')}}"><button type="button" class="btn btn-primary">Add New Employee</button></a>
                </div><br><br>

                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>First Name</th>
                            <th>Role</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($employees as $employee)

                            <tr>

                                <td>{{$employee->id}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->role->name}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <a href="{{route('employee.show', $employee->id)}}"><button type="button" class="btn btn-primary">Show</button></a>

                                    <a href="{{route('employee.edit', $employee->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>

                                    
                                   
                                    
                                     <form action="{!! action('EmployeeController@destroy', $employee->id) !!}" method="POST">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        
                                    </form>

                                </td>

                            </tr>

                        @endforeach                 

                    </tbody>
                </table>
        </div>
@stop