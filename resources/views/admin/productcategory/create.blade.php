@extends('layouts.admin')

@section('content')

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12" style="margin-left: 280px;">	
					<h3 style="margin-left: -146px; margin-bottom: 30px; width: 280px;">Add New Product Category</h3>
			</div>
					<hr style="border-top: solid #DCDCDC 1px; width: 80%; margin: 0px auto;">
		</div>
	</div>
</div>
<div class="form" style="margin-left: 250px; margin-top: 20px; width: 600px;">
	<form>
  		<div class="form-group">
    		<label for="Name"><h5>Category Name</h5></label>
    		<input type="text" class="form-control" id="Name" style="width: 500px; height: 28px;">
  		</div>
  		<div class="form-group">
    		<label for="Description"><h5>Description</h5></label>
    		<textarea class="form-control" id="Description" style="width: 500px; height: 150px;"></textarea>
  		</div>
		<div class="form-group">
    		<label for="Status"><h5>Status</h5></label>
			<select class="form-controls" style="width: 516px; height: 38px;">
  				<option></option>
  				<option></option>
			</select>
  		</div>

  		<div class="button" style="margin-top: 10px;">
  			<button type="submit" class="btn btn-primary" style="margin-left: 160px; width: 80px;">Save</button>
  			<button type="submit" class="btn btn-default" style="margin-left: 250px; width: 80px;">Cancel</button>
  		</div>

	</form>
</div>

@stop