@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="page-header">  
    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
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

    <h4> {{ $users[0]->customer-> name }}'s Booking Details</h4>
            
                <a href="{!! url('/registers') !!}" class="btn btn-info btn-xs"><i class="md md-backspace"></i> Back</a>
	    </div>
       

     
<div class="panel panel-default panel-shadow">

    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
               
                <th>Booking ID</th>
                <th>Coming From</th>
                <th>Going To</th>
                <th>Check In</th>   
                <th>Check Out</th>       
                <th>No. of People</th>   
                <th>Duration</th>
                <th>Payment</th>
                <th>Status</th>                          
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
                
            @foreach ($users as $user)
            <tr>
 
                <td>{{$user->id}}</td>
                <td>{{$user->coming}}</td>
                <td>{{$user->going}}</td>
                <td>{{$user->checkin}}</td>
                <td>{{$user->checkout}}</td>
                <td>{{$user->people_no}}</td>
                <td>{{$user->duration}}</td>
                <td>{{$user->journal_no}}</td>
                <td>{{$user->journal_no}}</td>
                <td>
                <a href="{{ route('booking.destroy', ['bookings' => $user->id]) }}">
                <button class="btn btn-danger btn-sm"><span class="fa fa-trash"></span</button>
                </a>
               
                <button class="btn btn-info btn-sm ti-pencil"><span class="fa fa-pencil"></span</button>
                
                </td>
                
               
              
           
               
        
        
            </tr>
            @endforeach
                

            <tr>
               
        
                
            </tr>
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>


@endsection