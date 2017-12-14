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
                <th>Product Category Name</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Vate Rate</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

      
                       

                @foreach($products as $product)

                    <tr>

                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->vate_rate}}</td>


                        <td>
                            <a href=""><button type="button" class="btn btn-primary">Show</button></a>

                            <a href=""><button type="button" class="btn btn-info">Edit</button></a>

                            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                             <form action="" method="">
                                

                                
                            </form>

                        </td>

                    </tr>

                @endforeach

        </tbody>
    </table>


   </div>


@stop