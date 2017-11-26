@extends('layouts.admin')


@section('content')


	<h1>Add New Supplier</h1><h2 style="margin-left: 850px; margin-bottom: 20px;"><a href="/admin">Admin</a> / <a href="">Suppliers</a> / New</h2>

	<hr style="border-top: solid #DCDCDC 1px;">

	<form method="post" action="{{route('supplier.store')}}">

		{{ csrf_field() }}
		
		<div class="form-group">	
			<label for="first_name"><b>First Name:</b></label>
			<input type="text" name="first_name" class="form-control">
		</div>

		<div class="form-group">	
			<label for="last_name"><b>Last Name:</b></label>
			<input type="text" name="last_name" class="form-control">
		</div>

		<div class="form-group">	
			<label for="company_name"><b>Company Name:</b></label>
			<input type="text" name="company_name" class="form-control">
		</div>

		<div class="form-group">	
			<label for="address"><b>Address:</b></label>
			<input type="text" name="address" class="form-control">
		</div>

		<div class="form-group">	
			<label for="email"><b>Email:</b></label>
			<input type="email" name="email" class="form-control">
		</div>

		<div class="form-group">	
			<label for="phone"><b>Phone:</b></label>
			<input type="text" name="phone" class="form-control">
		</div>

		<div class="form-group col-sm-6">

			<input type="submit" name="save_supplier" class="btn btn-primary" value="Save">

			<a href="{{route('supplier.index')}}" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Cancel</span></a>

		</div>

	</form>


@endsection