@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="page-header">
                <div class="pull-right">
                    <a href="addinventory" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
                </div>
                <h2>Inventory</h2>
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
                <th>Sl.No</th>
                <th>Name</th>
                <th>Quantity</th>   
                <th>Condition</th>      
                <th>Location</th>  
                <th>Image</th>                         
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($inventories as $inventory)
            <tr>
                <td>
                    1
                </td>
                <td>{{$inventory->name}}</td>
                <td>{{$inventory->quantity}}</td>
                <td>{{$inventory->condition}}</td>
                <td>{{$inventory->location}}</td>
                <td><img src="{{ url('uploads').'/'. $inventory->image }}" alt="{{ $inventory->image }}" style="width:200px;" class="img-thumbnail"></td>

                <td>
                <a href="">
                <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span</button>
                </a>
               
                <button class="btn btn-info btn-sm ti-pencil"><span class="fa fa-pencil"></span</button>
                
                </td>
            </td>
            </tr>
            @endforeach
            </tbody>
            {{ $inventories->links() }}
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>
</div>
@endsection