@extends('layouts.admin')

@section('content')

   <div class="col-sm-12">
 
	<h1>Products</h1>

    <div class="input-prepend">
        <button class="btn btn-primary" onclick="window.location.href='{{route('products.create')}}'"><i class="glyphicon glyphicon-plus"></i> Add New Product</button>
        <button type="button" onclick="window.print();" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
    </div><br><br>

        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>SL</th>
                <th>Product Category Name</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>              
            </tr>
            </thead>
            <tbody>

      
                       

                @foreach($products as $product)

                    <tr>

                        <td>{{$number++}}</td>
                        <td>{{$product->productCategory->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            {!! ($product->status == 0) ? 
                                '<span class="label label-success">Active</span>' :
                                '<span class="label label-danger">Inactive</span>'
                             !!}
                        </td>

                        <td >
                           
                            <button class="btn btn-info" onclick="window.location.href='{{route('products.show', $product->id)}}'"><i class="glyphicon glyphicon-eye-open" title="Show"></i></button>

                            <button class="btn btn-warning" onclick="window.location.href='{{route('products.edit', $product->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i></button>
                            
                             <form action="{!! action('ProductsController@destroy', $product->id) !!}" method="POST" style="display: inline-block;">
                              {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i></button>
                            </form>
                        </td>

                    </tr>

                @endforeach

        </tbody>
    </table>


   </div>


@stop