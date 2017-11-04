@extends('layouts.admin')

@section('content')

    <h1>Edit Product Category</h1>

    <form action="" method="">

        <div class="form-group">

            <label for="category_name">Category Name</label>
            <input type="text" name="category_name" class="form-control">

        </div>

        <div class="form-group">

            <label for="category_description">Description</label>
            <input type="text" name="category_description" class="form-control">

        </div>

        <div class="form-group">

            <label for="category_status">Status</label>
            <select name="category_status" id="" class="form-control">

                <option value="">Approved</option>

                <option value="">Unapproved</option>

            </select>

        </div>

        <div class="form-group">
                
            <a href="" class="btn btn-primary">Update</a>
            <a href="{{route('productcategory.index')}}" class="btn btn-default">Cancel</a>

        </div>

    </form>

@stop
