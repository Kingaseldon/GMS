@extends('ui.layouts.main2')

@section('content2')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <title>Booking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>



    <div class="container">
    
      <div class="row">
          <h2 class="mb-3" style="text-align:center;">Proceed Booking</h2>
          <hr class="mb-3">
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

          <form method="POST" action="{{route('bookandpay')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : '' }}">
                <label for="customer_id">CID</label>
                <input type="text" class="form-control" name="customer_id" id="customer_id" placeholder="CID" required>
                  <div class="invalid-feedback">
                    @if ($errors->has('customer_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('customer_id') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
            </div>

              <input type="hidden" name="room_id" value="{{$room->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="col-md-6 mb-3">
                <div class="form-group{{ $errors->has('coming') ? ' has-error' : '' }}">
                  <label for="coming">Coming From</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="coming" name="coming" placeholder="Coming From" required>
                        <div class="invalid-feedback" style="width: 100%;">
                        @if ($errors->has('coming'))
                            <span class="help-block">
                                <strong>{{ $errors->first('coming') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                </div>
              </div>

            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('going') ? ' has-error' : '' }}">
                <label for="going">Going To</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="going" name="going" placeholder="Going To" required>
                      <div class="invalid-feedback" style="width: 100%;">
                        @if ($errors->has('going'))
                            <span class="help-block">
                                <strong>{{ $errors->first('going') }}</strong>
                            </span>
                        @endif
                      </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('checkin') ? ' has-error' : '' }}">
                <label for="checkin">Check In Date</label>
                  <div class="input-group">
                      <input type="date" class="form-control" id="checkin" name="checkin" required>
                      <div class="invalid-feedback" style="width: 100%;">
                        @if ($errors->has('checkin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('checkin') }}</strong>
                            </span>
                        @endif
                      </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('checkout') ? ' has-error' : '' }}">
                <label for="checkout">Check Out Date</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="checkout" name="checkout" required>
                    <div class="invalid-feedback" style="width: 100%;">
                      @if ($errors->has('checkout'))
                          <span class="help-block">
                              <strong>{{ $errors->first('checkout') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('people_no') ? ' has-error' : '' }}">
                <label for="people_no">Number of People</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="people_no" name="people_no" placeholder="No. of People" required>
                    <div class="invalid-feedback" style="width: 100%;">
                      @if ($errors->has('people_no'))
                          <span class="help-block">
                              <strong>{{ $errors->first('people_no') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                </div>
            </div>


            <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                <label for="duration">Duration of Stay</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="duration" name="duration" placeholder="Duration" required>
                      <div class="invalid-feedback" style="width: 100%;">
                          @if ($errors->has('duration'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('duration ') }}</strong>
                              </span>
                          @endif
                      </div>
                </div>
              </div>
            </div>

          </div>

          <h2 class="mb-3" style="text-align:center;">Booking For (If Any).</h2>
          <div class="row">
            <hr class="mb-3">
              <div class="col-md-6 mb-3">
                  <label for="name">Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="phone">Phone Number</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                  </div>
                </div>
          </div>

            <div class="mb-3">
              <label for="email">Email Address</label>
              <div class="input-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
              </div>
            </div>
             <hr class="mb-3"> 

          <!-- <div class="row">
            <h4 class="mb-3">Payment</h4>
            <p><strong>Account No:</strong> 1022351241 (BOB)</p>
                <div class="row">
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
          </div>   -->

          <div style="margin-bottom:2%;"></div>
              <button class="btn btn-success btn-lg btn-block" style="width:100%; margin-bottom:2%;"type="submit">Proceed to Payment</button>
              
          </div>
          </form>
        </div>
    </div>  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>


@endsection
