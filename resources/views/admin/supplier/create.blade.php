@extends('layouts.admin')


@section('content')

<div class="col-sm-12">
	

	<h1>Add New Supplier</h1>
	
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

		<div class="form-group">
        	<button type="submit" class="btn btn-primary">Save</button>
        	<button type="button" onclick="window.location.href='{{route('supplier.index')}}'" class="btn btn-default">Cancel</button>
      	</div>

	</form>
</div>

@endsection