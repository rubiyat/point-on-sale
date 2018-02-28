@extends('layouts.admin')

@section('content')

 
    <div class="col-sm-12">
             <h1>Photos Details</h1><br>
                
                <div class="input-prepend gap">
                    <button class="btn btn-primary" onclick="window.location.href='{{route('photos.create')}}'"><i class="glyphicon glyphicon-plus"></i> Add New Photo</button>
                </div><br><br>

                 <table class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            
                            @foreach($photos as $photo)
                            <tr>
                      
                        <td>{{$photo->id}}</td>
                        <td><img height="100" width="150" src="{{asset('/images/'.$photo->file)}}"/></td>   
                        <td><button class="btn btn-info" onclick="window.location.href='{{route('photos.show', $photo->id)}}'"><i class="glyphicon glyphicon-eye-open" title="Show"></i></button>
                            <button class="btn btn-warning" onclick="window.location.href='{{route('photos.edit', $photo->id)}}'"><i class="glyphicon glyphicon-pencil" title="Edit"></i></button>
                            <form action="{!! action('PhotosController@destroy', $photo->id) !!}" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" role="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash" title="Delete"></i></button>
                            </form>
                        </td>


                            @endforeach

                       </tbody> 
                       
                        
                </table>
                   
        </div>
@stop