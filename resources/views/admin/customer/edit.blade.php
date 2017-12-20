@extends('layouts.admin')


@section('content')

<div class="col-sm-12">
	

	<h1>Add New Customer</h1>
	
	<form method="post" action="{{route('customer.update',$customer->id)}}">

		{{ csrf_field() }} {{ method_field('PATCH') }}
		
		<div class="form-group">	
			<label for="first_name"><b>First Name:</b></label>
			<input type="text" name="first_name" class="form-control" value="{{$customer->first_name}}">
		</div>

		<div class="form-group">	
			<label for="last_name"><b>Last Name:</b></label>
			<input type="text" name="last_name" class="form-control" value="{{$customer->last_name}}">
		</div>

		<div class="form-group">	
			<label for="address"><b>Address:</b></label>
			<input type="text" name="address" class="form-control" value="{{$customer->address}}">
		</div>

		<div class="radio">
  			<label><input type="radio" name="gender" value="1" {{$customer->gender == '1' ? 'checked' : ''}}>Male</label>
  			<label><input type="radio" name="gender" value="2" {{$customer->gender == '2' ? 'checked' : ''}}>Female</label>
		</div>

		<div class="form-group">	
			<label for="email"><b>Email:</b></label>
			<input type="email" name="email" class="form-control" value="{{$customer->email}}">
		</div>

		<div class="form-group">	
			<label for="phone"><b>Phone:</b></label>
			<input type="text" name="phone" class="form-control" value="{{$customer->phone_number}}">
		</div>
		


			<input type="submit" name="save_supplier" class="btn btn-primary" value="Update">

			<a href="{{route('customer.index')}}" class="btn btn-danger"><i class="icon-trash"></i><span class="hidden-tablet"> Cancel</span></a>

	

	</form>
</div>

@endsection