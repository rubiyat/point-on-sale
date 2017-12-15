@extends('layouts.admin')


@section('content')

<div class="col-sm-12">
	

	<h1>Add New Supplier</h1>
	
	<form method="post" action="{{route('supplier.update',$supplier->id)}}">

		{{ csrf_field() }} {{ method_field('PATCH') }}
		
		<div class="form-group">	
			<label for="first_name"><b>First Name:</b></label>
			<input type="text" name="first_name" class="form-control" value="{{$supplier->first_name}}">
		</div>

		<div class="form-group">	
			<label for="last_name"><b>Last Name:</b></label>
			<input type="text" name="last_name" class="form-control" value="{{$supplier->last_name}}">
		</div>

		<div class="form-group">	
			<label for="company_name"><b>Company Name:</b></label>
			<input type="text" name="company_name" class="form-control" value="{{$supplier->company_name}}">
		</div>

		<div class="form-group">	
			<label for="address"><b>Address:</b></label>
			<input type="text" name="address" class="form-control" value="{{$supplier->address}}">
		</div>

		<div class="form-group">	
			<label for="email"><b>Email:</b></label>
			<input type="email" name="email" class="form-control" value="{{$supplier->email}}">
		</div>

		<div class="form-group">	
			<label for="phone"><b>Phone:</b></label>
			<input type="text" name="phone" class="form-control" value="{{$supplier->phone}}">
		</div>



			<input type="submit" name="save_supplier" class="btn btn-primary" value="Save">

			<a href="{{route('supplier.index')}}" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Cancel</span></a>

	

	</form>
</div>

@endsection