@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
    <h1>Products Details</h1>
    
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

<a href="{{ route('products.index') }}"><button type="button" class="btn btn-info">Back</button></a>   
  
</div>

@stop