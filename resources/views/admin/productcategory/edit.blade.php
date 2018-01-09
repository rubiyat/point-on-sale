@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <h1>Edit Product Category</h1>

        <form action="{!! action('ProductCategoryController@update', $productCategory->id) !!}" method="POST">
        {{ csrf_field() }} {{ method_field('PATCH') }}
            <div class="form-group">

                <label for="category_name">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{$productCategory->name}}">

            </div>

            <div class="form-group">

                <label for="category_description">Description</label>
                <input type="text" name="description" class="form-control" value="{{$productCategory->description}}">

            </div>

            <div class="form-group">

                <label for="category_status">Status</label>
                <select name="status" value="{{$productCategory->status}}" class="form-control">

                    <option value="0">Active</option>

                    <option value="1">Inactive</option>

                </select>

            </div>

            <div class="form-group">
                    
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                <a href="{{route('productcategory.index')}}"><button type="button" class="btn btn-default">Cancel</button></a>

            </div>

        </form>
    </div>

   

@stop
