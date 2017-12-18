@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
        <h1>Supplier's Details</h1>
        
    <div class="input-prepend">
        <a href="{{ route('supplier.create') }}"><button type="button" class="btn btn-primary">Add Supplier</button></a>
    </div><br>


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
                            <a href="{{route('supplier.show', $supplier->id)}}"><button type="button" class="btn btn-primary"> Show</button></a>

                            <a href="{{route('supplier.edit', $supplier->id)}}"><button type="button" class="btn btn-info" >Edit</button></a>

                            <form action="{!! action('SupplierController@destroy', $supplier->id) !!}" method="POST">

                                {{csrf_field()}}

                                {{method_field('DELETE')}}

                                <input class="btn btn-danger" type="submit" name="submit" value="Delete">

                            </form>

                        </td>

                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

</div>
	
@stop