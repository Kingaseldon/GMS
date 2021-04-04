@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<h2>Add Inventory</h2>
		
		<a href="/inventory" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
               <form method="post" action="addinventory" enctype="multipart/form-data">
               @csrf
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" id="name" name="name"  class="form-control">                       
                    </div>
                    @if ($errors->has('name'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div> 
                </div>

                <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                      <div class="col-sm-9">
                        <input type="number" name="quantity"  class="form-control">
                    </div>
                    @if ($errors->has('quantity'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                </div> 
                </div>

                <div class="form-group{{ $errors->has('condition') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label for="condition" class="col-sm-3 control-label">Condition</label>
                      <div class="col-sm-9">
                        <input type="text" name="condition" class="form-control">
                    </div>
                    @if ($errors->has('condition'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('condition') }}</strong>
                                    </span>
                                @endif
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