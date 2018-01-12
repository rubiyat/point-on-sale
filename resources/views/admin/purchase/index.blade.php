@extends('layouts.admin')

@section('content')

   <div class="col-sm-12">
 
	<h1>Product Details</h1>

    <div class="input-prepend">
        <a href="{{route('products.create')}}" ><button type="button" class="btn btn-primary">Add New Product</button></a>
    </div><br>

        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>SL</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Vate Rate</th>
                <th>Action</th>              
            </tr>
            </thead>
            <tbody>

      
                       

                @foreach($purchases as $purchase)

                    <tr>

                        <td>{{$purchase->id}}</td>
                        <td>{{$purchase->products->name}}</td>

                    </tr>

                @endforeach

        </tbody>
    </table>


   </div>


@stop