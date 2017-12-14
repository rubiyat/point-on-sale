@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
		<h1>Product Category</h1>
		
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


		
			<input type="button" name="buttonBack" class="btn btn-warning" onclick="window.location='/admin/productcategory';" value="&larr;Back">
</div>

@stop