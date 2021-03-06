@extends('layouts.admin')


@section('content')

<div class="col-sm-12">
	

	<h1>Edit Supplier</h1>

	@if(count($errors))
	    <div class="alert alert-danger">
	      <strong>Whoops!</strong> There were some problems with your input.
	      <br/>
	      <ul>
	        @foreach($errors->all() as $error)
	        <li>{{ $error }}</li>
	        @endforeach
	      </ul>
	    </div>
	  @endif

	
	<form method="post" action="{{route('supplier.update',$supplier->id)}}">

		{{ csrf_field() }} {{ method_field('PATCH') }}

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
		<div class="form-group">
        	<button type="submit" class="btn btn-primary">Update</button>
        	<button type="button" onclick="window.location.href='{{route('supplier.index')}}'" class="btn btn-default">Cancel</button>
      	</div>

	</form>
</div>

@endsection