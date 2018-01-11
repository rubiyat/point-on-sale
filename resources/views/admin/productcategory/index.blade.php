@extends('layouts.admin')

@section('content')

 
    <div class="col-sm-12">
             <h1>Product Category</h1><br>
                
                <div class="input-prepend gap">
                    <button class="btn btn-primary" onclick="window.location.href='{{route('productcategory.create')}}'"><i class="glyphicon glyphicon-plus"></i> Add New Product Category</button>
                    <button type="button" onclick="window.print();" class="btn btn-info" style="margin-left: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
                </div><br><br>

                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                  
                                   

                            @foreach($productCategories as $productCategory)

                                <tr>

                                    <td>{{$number++}}</td>
                                    <td>{{$productCategory->name}}</td>
                                    <td>
                                        
                                        {!! ($productCategory->status == 0) ? 
                                            '<span class="label label-success">Active</span>' :
                                            '<span class="label label-danger">Inactive</span>'
                                         !!}
                                    </td>


                                    <td>
                                        <button class="btn btn-info" onclick="window.location.href='{{route('productcategory.show', $productCategory->id)}}'"><i class="glyphicon glyphicon-eye-open" title="Show"></i></button>

                                        <button class="btn btn-warning" onclick="window.location.href='{{route('productcategory.edit', $productCategory->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i></button>
                                       
                                         <form action="{!! action('ProductCategoryController@destroy', $productCategory->id) !!}" method="POST" style="display: inline-block;">
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