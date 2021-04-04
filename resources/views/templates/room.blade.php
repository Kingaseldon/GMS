@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="page-header">
                <div class="pull-right">
                    <a href="addroom" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
                </div>
                <h2>Rooms</h2>
                <a href="{!! url('/dashboard-v1') !!}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back Dashboard</a>
	</div>
                @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                        {{ Session::get('flash_message') }}
                                </div>
                @endif
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Description</th>  
                <th>Price</th>  
                <th>Image</th>                             
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($rooms as $room)
            <tr>
            <td>{{ $room->roomno}}</td>
            <td>{{ $room->roomtype}}</td>
            <td>{{ $room->description}}</td>
            <td>{{ $room->price}}</td>
            <td><img src="{{ url('uploads').'/'. $room->image }}" alt="{{ $room->image }}" style="width:200px;" class="img-thumbnail"></td>
            </tr>
            @endforeach
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>
@endsection