@extends('layouts.admin')

@section('content')

 
    <div class="col-sm-12">
             <h1>Product Category</h1><br>
                
                <div class="input-prepend gap">
                    <a href="{{route('productcategory.create')}}"><button type="button" class="btn btn-primary">Add Product Category</button></a>
                </div><br><br>

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
                                        <a href="{{route('productcategory.show', $productCategory->id)}}"><button type="button" class="btn btn-primary">Show</button></a>

                                        <a href="{{route('productcategory.edit', $productCategory->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>

                                        
                                       <!--  <input type="submit" name="submit" value="Delete"> -->
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                         <form action="{!! action('ProductCategoryController@destroy', $productCategory->id) !!}" method="POST">

                                        
                                            

                                            
                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                    </tbody>
                </table>
        </div>


        
	

@stop