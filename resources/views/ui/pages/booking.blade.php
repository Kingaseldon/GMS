@extends('ui.layouts.main2')

@section('content2')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Booking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="row">
          <h2 class="mb-3" style="text-align:center;">Register Now!</h2>
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
   

          <form method="post" action="registercustomers" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
              <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                <label for="id">CID</label>
                <input type="text" class="form-control" name="cid" id="id" placeholder="CID" required>
                <div class="invalid-feedback">
                    @if ($errors->has('cid'))
                        <span class="help-block">
                          <strong>{{ $errors->first('cid') }}</strong>
                        </span>
                    @endif.
                </div>
              </div>
            </div>

              <div class="col-md-6 mb-3">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="employee id (optional)">
              </div>


            <div class="col-md-6 mb-3">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Name</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <div class="invalid-feedback" style="width: 100%;">
                @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif.
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6 mb-3">
            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                <label for="gender">Gender</label>
                <select class="custom-select d-block w-100" name="gender" id="gender" required>
                  <option value="male">Male</option>
                  <option vlaue="female">Female</option>
                </select>
                <div class="invalid-feedback">
                @if ($errors->has('gender'))
                        <span class="help-block">
                          <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif.
                </div>
              </div>
            </div>



          <div class="col-md-6 mb-3">
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
              <label for="phone">Phone Number</label>
              <div class="input-group">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                <div class="invalid-feedback" style="width: 100%;">
                @if ($errors->has('phone'))
                        <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif.
                </div>
              </div>
            </div>
            </div>
            
            

          <div class="col-md-6 mb-3">
            <div class="form-group{{ $errors->has('customer_type') ? ' has-error' : '' }}">
                <label for="customer_type">Customer Type</label>
                <select class="custom-select d-block w-100" name="customer_type" id="customer_type" required>
                  <option value="RUB Staff">RUB Staff</option>
                  <option value="Others">Others</option>
                </select>
                <div class="invalid-feedback">
                @if ($errors->has('customer_type'))
                        <span class="help-block">
                          <strong>{{ $errors->first('customer_type') }}</strong>
                        </span>
                    @endif.
                </div>
              </div>
            </div>

            


          <div class="mb-3">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email Address</label>
              <div class="input-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                <div class="invalid-feedback" style="width: 100%;">
                @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
            </div>
          </div>

              <div style="margin-bottom:2%;"></div>
                <hr >
                <div style="margin-bottom:2%;"></div>
                    <button class="btn btn-success btn-lg btn-block" style="width:100%; margin-bottom:2%;"type="submit">Register</button>
              </div>
          </form>
          <p style="text-align:center;">Registered Already? Then proceed to booking...</p>
                        <a type="button" href="bookingroom" class="btn btn-primary btn-lg btn-block" style="width:100%;">Proceed to Booking</a>
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
  </body>
</html>
@endsection

