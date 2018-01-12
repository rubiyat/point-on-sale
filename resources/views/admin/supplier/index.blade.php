@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
        <h1>Supplier's Details</h1>
        
    <div class="input-prepend">
        <button class="btn btn-primary" onclick="window.location.href='{{route('supplier.create')}}'"><i class="glyphicon glyphicon-plus"></i> Add Supplier</button>
        <button type="button" onclick="window.print();" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
    </div><br><br>


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

                        <td>{{$number++}}</td>
                        <td>{{$supplier->company_name}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->phone}}</td>


                        <td>
                            
                            <button class="btn btn-info" onclick="window.location.href='{{route('supplier.show', $supplier->id)}}'"><i class="glyphicon glyphicon-eye-open" title="Show"></i></button>

                            <button class="btn btn-warning" onclick="window.location.href='{{route('supplier.edit', $supplier->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i></button>
                                       
                            <form action="{!! action('SupplierController@destroy', $supplier->id) !!}" method="POST" style="display: inline-block;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i></button>
                            </form>

                        </td>

                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

</div>
	
@stop