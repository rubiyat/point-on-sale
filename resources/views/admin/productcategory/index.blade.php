@extends('layouts.admin')

@section('content')

   

	<h1>Product Category</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / Product Category</h2>

	<hr style="border-top: solid #DCDCDC 1px;">


    <div class="input-prepend">
        <a href="{{route('productcategory.create')}}" class="btn btn-primary" style="margin-bottom: 20px;">Add Product Category</a>
    </div>

        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

      
                       

                @foreach($productCategories as $productCategory)

                    <tr>

                        <td>{{$productCategory->id}}</td>
                        <td>{{$productCategory->name}}</td>
                        <td>{{$productCategory->description}}</td>
                        <td>{{$productCategory->status}}</td>


                        <td>
                            <a href="{{route('productcategory.show', $productCategory->id)}}" class="btn btn-primary"><i class="icon-eye-open" ></i><span class="hidden-tablet"> Show</span></a>

                            <a class="btn btn-info" href="{{route('productcategory.edit', $productCategory->id)}}"><i class="icon-edit"></i><span class="hidden-tablet"> Edit</span></a>

                            <input class="btn btn-danger right" type="submit" name="submit" value="Delete">
                             <form action="{!! action('ProductCategoryController@destroy', $productCategory->id) !!}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                
                            </form>

                        </td>

                    </tr>

                @endforeach

        </tbody>
    </table>

@stop