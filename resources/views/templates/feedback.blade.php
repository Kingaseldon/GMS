@extends('layouts.app')

@section('content')

<div class="container">
	<div class="page-header">
                <h2>Feedbacks</h2>
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
                <th>Email</th>
                <th>Feedback</th>
                       
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>

            <tr>
               
            </td>
                
            </tr>
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>
@endsection