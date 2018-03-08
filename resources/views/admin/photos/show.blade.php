@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
  <div class="col-sm-6">
    <h1>Show Photo</h1>
  </div>
  <div class="col-sm-6">
    <button style="margin-top: 25px;"  onclick="window.location.href='{{route('photos.index')}}'" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Go to Index</button>
    <button type="button" onclick="window.print();" class="btn btn-info pull-right" style="margin-top: 25px;margin-right: 5px;"><i class="glyphicon glyphicon-print"> </i> Print</button>
  </div>

 <table class="table table-bordered table-hover table-responsive">
        <thead class="thead-inverse">
  
        </thead>
        <tbody>
          <tr>
            <td><b>Id:</b></td>

           
              <td>{{$photos->id}}</td>
          </tr>

          <tr>
            <td><b>File:</b></td> 

            <td><img height="50" src="{{asset('/images/'.$photos->file)}}"></td>                
          </tr>
        
        </tbody>
    </table>
    <div class="row">
    <div class="col-sm-6 pull-right">
        <button class="btn btn-warning" onclick="window.location.href='{{route('photos.edit', $photos->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i> Edit</button>
      <form action="{!! action('PhotosController@destroy', $photos->id) !!}" method="POST" style="display: inline-block;">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i> Delete</button>
      </form>   

      </div>
      <div class="clearfix"></div> 
    </div>
</div>
@stop