@extends('layouts.admin')

@section('content')

	<h1>Product Category</h1><h2 style="margin-left: 800px; margin-bottom: 20px;"><a href="/admin">Admin</a> / <a href="/admin/productcategory">Product Category</a> / Show</h2>
	
	<table class="table table-bordered table-hover table-responsive">
	    <thead class="thead-inverse">
<!-- 	      <tr>
	        <th>SL</th>
	        <th>Name</th>
	        <th>Description</th>
	        <th>Action</th>
	      </tr> -->
	    </thead>
	    <tbody>
	      <tr>
	        <th><b>Supplier Id:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->id}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      <tr>
	        <th><b>First Name:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->first_name}}</td>
	        @endforeach
	        @endif	
	      </tr>
	      <tr>
	        <th><b>Last Name:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->last_name}}</td>
	        @endforeach
	        @endif
	      </tr>
	      <tr>
	        <th><b>Company Name:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->company_name}}</td>
	        @endforeach
	        @endif
	      </tr>
	      <tr>
	        <th><b>Address:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->address}}</td>
	        @endforeach
	        @endif
	      </tr>
	      <tr>
	        <th><b>Email:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->email}}</td>
	        @endforeach
	        @endif
	      </tr>
	      <tr>
	        <th><b>Phone:</b></th>

	        @if($suppliersShow)
	        @foreach($suppliersShow as $supplierShow)
	        	<td>{{$supplierShow->phone}}</td>
	        @endforeach
	        @endif
	      </tr>
	    </tbody>
	</table>


	<div class="col-md-4 text-center">
		<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/productcategory';" value="&larr;Back">

@stop