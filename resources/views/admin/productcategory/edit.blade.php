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

                <option value="">Active</option>

                <option value="">Inactive</option>

            </select>

        </div>

        <div class="btn-group">
                
                <a href=""><button class="btn btn-primary">Update</button></a>
            <input type="button" name="buttonCancel" class="btn btn-danger" onclick="window.location='/admin/productcategory';" value="Cancel">

        </div>

    </form>

@stop
