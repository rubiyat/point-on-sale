@extends('layouts.admin')

@section('content')

	<div class="col-sm-12">
		<h1>Show Product Category</h1>
		<table class="table table-bordered table-hover table-responsive">
		    <thead class="thead-inverse">

		    </thead>
		    <tbody>
		      <tr>
		        <th><b>Category Name:</b></th>

		        @if($categoriesShow)
		        @foreach($categoriesShow as $categoryShow)
		        	<td>{{$categoryShow->name}}</td>
		        @endforeach
		        @endif	
		      </tr>
		      <tr>
		        <th><b>Description:</b></th>

		        @if($categoriesShow)
		        @foreach($categoriesShow as $categoryShow)
		        	<td>{{$categoryShow->description}}</td>
		        @endforeach
		        @endif	
		      </tr>
		      <tr>
		        <th><b>Status:</b></th>

		        @if($categoriesShow)
		        @foreach($categoriesShow as $categoryShow)
		        	<td>{{$categoryShow->status}}</td>
		        @endforeach
		        @endif
		      </tr>
		    </tbody>
		</table>
			<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/productcategory';" value="&larr;Back">

</div>

@stop