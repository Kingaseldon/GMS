@extends('ui.layouts.main2')

@section('content2')

<div class="row">

    <form method="POST" action="{{route('pay')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <h2 class="mb-3" style="text-align:center;">Proceed Payment</h2>
          <hr class="mb-3">



                        <div class="row">
                            <h4 class="mb-3">Payment</h4>
                            <p><strong>Account No:</strong> 1022351241 (BOB)</p>
                                <div class="row">

                                <!-- @if ($message = Session::get('success'))
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
                        @endif -->

                     <div class="col-md-6 mb-3">
                        <label for="cc-name">CID</label>
                        <input type="number" class="form-control" name="customer_id" id="cc-name"  value="{{ request('id') }}" required>
                      <div class="invalid-feedback">
                                  Field required
                      </div>
                    </div>  

                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Journal Number</label>
                        <input type="number" class="form-control" name="journal_no" id="cc-name" placeholder="Journal Number" required>
                      <div class="invalid-feedback">
                                  Field required
                      </div>
                    </div>    

                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Screenshot</label>
                        <input type="file" class="form-control" id="cc-number" name="image" placeholder="" required>
                        <div class="invalid-feedback">                        
                        </div>
                    </div>
                </div>    
        </div>  

        <div style="margin-bottom:2%;"></div>
            <button class="btn btn-success btn-lg btn-block" style="width:100%; margin-bottom:2%;"type="submit">Book</button>              
        </div>
    </form>
</div>
@endsection
