@extends('layouts.admin')

@section('content')

          <div class="col-md-12">
          <h3>Add New Product</h3>
          <hr>


      <form action="{!! action('ProductsController@update', $products->id) !!}" method="POST" enctype="multipart/form-data" >
      {{ csrf_field() }} {{ method_field('PATCH') }}
      
      <div class="form-group">
        <label for="Status"><h5>Product Category Name</h5></label><br>
        <select class="form-controls" name="product_category_id">      
           
           <option value="{{$products->product_category_id}}">{{$products->productCategory->name}}</option> 
           @foreach($productCategories as $productCategory)
           <option value="{{$productCategory->id}}">{{$productCategory->name}}</option> 
           @endforeach         
      </select>
      </div>

      <div class="form-group">
        <label for="Name"><h5>Product Name</h5></label>
        <input type="text" class="form-control col-md-12" id="Name" name="name" value="{{$products->name}}">  
      </div>
      <div class="form-group">
        <label for="Description"><h5>Description</h5></label>
        <textarea class="form-control" id="Description" name="description">{{$products->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="Name"><h5>Price</h5></label>
        <input type="name" class="form-control col-md-12" id="Name" name="price" value="{{$products->price}}">
      </div>
      <div class="form-group">
        <label for="Name"><h5>Vat Rate</h5></label>
        <input type="text" class="form-control col-md-12" id="Name" name="vate_rate" value="{{$products->vate_rate}}">   
      </div>
      <div class="form-group">
        <label for="File"><h5>Image</h5></label>
        <input type="file" name="image" value="{{$products->file}}">
      </div>
    <div class="form-group">
        <label for="Status"><h5>Status</h5></label><br>
      <select class="form-controls" name="status">
          <option value="1">Approve</option>
          <option value="2">Unapprove</option>
      </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-default">Cancel</button>
      </div>

<form/>

</div>
  
@stop