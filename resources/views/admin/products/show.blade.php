@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
  <div class="col-sm-6">
    <h1>Product Detail</h1>
  </div>
  <div class="col-sm-6">
    <button style="margin-top: 25px;"  onclick="window.location.href='{{route('products.index')}}'" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Go to Index</button>
    <button type="button" onclick="window.print();" class="btn btn-info pull-right" style="margin-top: 25px;margin-right: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
  </div>
  <div class="clearfix"></div>
    
    
    <table class="table table-bordered table-hover table-responsive">
        <thead class="thead-inverse">
  
        </thead>
        <tbody>
          <tr>
            <td><b>Id:</b></td>

           
              <td>{{$products->id}}</td>
        
          </tr>
          <tr>
            <td><b>Product Category Name:</b></td>
         
              <td>{{$products->productCategory->name}}</td>
            </tr>
          <tr>
            <td><b>Product Name:</b></td>

          
              <td>{{$products->name}}</td>
           
          </tr>
          <tr>
            <td><b>Description:</b></td>

          
              <td>{{$products->description}}</td>
           
          </tr>
          <tr>
            <td><b>Price:</b></td>

          
              <td>{{$products->price}}</td>
           
          </tr>
          <tr>
            <td><b>Vate Rate:</b></td>

        
              <td>{{$products->vate_rate}}</td>
          
          </tr>
          <tr>
            <td><b>Image:</b></td>   
              <td><img height="100" src="{{$products->image ? $products->image : "http://placehold.it/400x400"}}"/></td>  
          </tr>

          <tr>
            <td><b>Status:</b></td>
              <td>{{$products->status}}</td>
          </tr>
        
        </tbody>
    </table>
    <div class="row">
      <div class="col-sm-6">
        <b>Status:</b>
        {!! ($products->status) ? 
            '<span>Active</span>' :
            '<span>Inactive</span>'
         !!}
      </div>
      <div class="col-sm-6">
          <button class="btn btn-warning" onclick="window.location.href='{{route('products.edit', $products->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"> </i> Edit</button>
                            
          <form action="{!! action('ProductsController@destroy', $products->id) !!}" method="POST" style="display: inline-block;">
            {{ csrf_field() }} {{ method_field('DELETE') }}
            <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"> </i> Delete</button>
          </form>
        
      </div>
      <div class="clearfix"></div>
    </div>


</div>

@stop