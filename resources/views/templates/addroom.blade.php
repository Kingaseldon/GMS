@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<h2>Add Room</h2>
		
		<a href="/room" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
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
   
   	<div class="panel panel-default">
            <div class="panel-body">
               <form method="post" action="addroomdetails" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Room No</label>
                      <div class="col-sm-9">
                        <input type="text" name="roomno" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Room Type</label>
                      <div class="col-sm-9">
                        <input type="text" name="roomtype" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-9">
                        <input type="file" name="image"  class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-9">
                        <input type="text" name="description" class="form-control">
                    </div>
                </div> 
               
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Price</label>
                      <div class="col-sm-9">
                        <input type="number" name="price" class="form-control">
                    </div>
                </div> 

                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">Add</button>
                         
                    </div>
                </div>
                
                </form>
            </div>
        </div>
</div>

@endsection