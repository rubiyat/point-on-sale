@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
        <h1>Customer's Details</h1>
        
    <div class="input-prepend">
        <a href="{{ route('customer.create') }}"><button type="button" class="btn btn-primary">Add Customer</button></a>
    </div><br>


        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @if($customers)

                @foreach($customers as $customer)

                    <tr>

                        <td>{{$customer->id}}</td>
                        <td>{{$customer->first_name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone_number}}</td>


                        <td>
                            <a href="{{route('customer.show', $customer->id)}}"><button type="button" class="btn btn-primary"> Show</button></a>

                            <a href="{{route('customer.edit', $customer->id)}}"><button type="button" class="btn btn-info" >Edit</button></a>

                            <form action="{!! action('CustomerController@destroy', $customer->id) !!}" method="POST">

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