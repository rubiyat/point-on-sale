@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <h1>Edit Product Category</h1>
        @if(count($errors))
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.
              <br/>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

        <form action="{!! action('ProductCategoryController@update', $productCategory->id) !!}" method="POST">
        {{ csrf_field() }} {{ method_field('PATCH') }}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                <label for="category_name">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{$productCategory->name}}">
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>

            <div class="form-group">

                <label for="category_description">Description</label>
                 <textarea class="form-control col-md-12" id="Description" name="description">{{$productCategory->description}}</textarea>
            </div>

            <div class="form-group">

                <label for="category_status">Status</label>
                <select name="status" value="{{$productCategory->status}}" class="form-control">

                    <option value="0">Active</option>

                    <option value="1">Inactive</option>

                </select>

            </div>

            <div class="form-group">
                    
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                <a href="{{route('productcategory.index')}}"><button type="button" class="btn btn-default">Cancel</button></a>

            </div>

        </form>
    </div>

   

@stop
