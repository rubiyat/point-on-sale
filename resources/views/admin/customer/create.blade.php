@extends('layouts.admin')


@section('content')

<div class="col-sm-12">
	

	<h1>Add New Customer</h1>
	
	<form method="post" action="{{route('customer.store')}}">

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
			<label for="address"><b>Address:</b></label>
			<input type="text" name="address" class="form-control">
		</div>

		<div class="radio">
  			<label><input type="radio" name="gender" value="1">Male</label>
  			<label><input type="radio" name="gender" value="2">Female</label>
		</div>

		<div class="form-group">	
			<label for="phone"><b>Phone:</b></label>
			<input type="text" name="phone_number" class="form-control">
		</div>

		<div class="form-group">	
			<label for="email"><b>Email:</b></label>
			<input type="email" name="email" class="form-control">
		</div>




			<input type="submit" name="save_supplier" class="btn btn-primary" value="Save">

			<a href="{{route('customer.index')}}" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Cancel</span></a>

	

	</form>
</div>

@endsection