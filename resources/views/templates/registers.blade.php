@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="page-header">

  
        <h4>List of Registered Users</h4>
                <a href="{!! url('/dashboard-v1') !!}" class="btn btn-default-light btn-xs "><i class="md md-backspace"></i> Back Dashboard</a>
	    </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block ">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
           
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>CID</th>
                <th>Employee_id</th>
                <th>Name</th>
                <th>Gender</th>   
                <th>Email</th>
                <th>Phone</th>
          
                                     
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>

            <tr>
               
            @foreach ($customers as $customer)
            <tr>
                
                <td>{{$customer->id}}</td>
                <td>{{$customer->employee_id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
              
           
                <td>
                <a href="{{ route('registersdetail', ['customers' => $customer->id]) }}">
                    <button type="button" class="btn btn-sm btn-info"><span class="fa fa-info-circle" aria-hidden="true"></span></button>
                </a>
                <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button>
               
                </td>
        
        
            </tr>
            @endforeach
                
            </tr>
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>


@endsection