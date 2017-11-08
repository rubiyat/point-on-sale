@extends('layouts.admin')

@section('content')

    <style type="text/css">
        
        #aTag:hover { color:  #428bca; }
        #aTag:visited { color: none; }

    </style>

	<h1>Supplier's Details</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Suppliers</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

<div class="input-prepend">
    <span class="add-on" style="border-radius: 5px 0px 0px 5px; background-color: #C0C0C0; height: 24.5px; width: 25px;"><a id="aTag" style="text-decoration:none;" href=""><i class="icon-plus icon-large"></i></a></span>
    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Add Supplier</a>
</div>


    <table class="table table-bordered table-hover table-responsive">
        <thead>
        <tr>
            <th>SL</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @if($suppliers)

            @foreach($suppliers as $supplier)

                <tr>

                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->company_name}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>{{$supplier->phone}}</td>

                       
                    <td>
                        <a href="{{route('supplier.show', $supplier->id)}}" class="btn btn-primary"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                        <a class="btn btn-info" href="{{route('supplier.edit', $supplier->id)}}"><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                        <a href="#" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Delete</span></a>

                    </td>

                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop