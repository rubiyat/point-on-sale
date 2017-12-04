@extends('layouts.admin')

@section('content')

   

	<h1>Product Details</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Product Details</h2>

	<hr style="border-top: solid #DCDCDC 1px;">


    <div class="input-prepend">
        <a href="{{route('products.create')}}" class="btn btn-primary" style="margin-bottom: 20px;">Add New Product</a>
    </div>

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
                            <a href="" class="btn btn-primary"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                            <a class="btn btn-info" href=""><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                            <input class="btn btn-danger right" type="submit" name="submit" value="Delete">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                             <form action="" method="">
                                

                                
                            </form>

                        </td>

                    </tr>

                @endforeach

        </tbody>
    </table>

@stop