@extends('ui.layouts.main2')

@section('content2')


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {

  margin: 0;
  color: black;
}

div.a {
  text-align: left;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #C0C0C0;
  color: black;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>


<div class="about-section">
  <h1><a href="#" class="text-danger"><u>Guest House Regulations</u></a></h1>
  <div class="a">
    <p>In order to make your stay as pleasant as possible, the management requests your co-operation in observing the following as an agreement</p>
    <h5><a href="#" class="text-info">Reservation</a></h5>
    <p>Resevation of room should be done through CST Guesthouse house web page. Resevation is done on first sequential booking time. </p>
    
    <h5><a href="#" class="text-info">Cancellation</a></h5>
    <p>Cancellation of room should be done one day ahead of the check in date in order to get refund. </p>
    
    <h5><a href="#" class="text-info">Check-in</a></h5>
    <p>Check-in time : 8 Am---10:30 Pm. One must inform the Guest House reception in advance for any change of schedule. Visitors must presnet personal information for guest house records while checking. </p>
    
    <h5><a href="#" class="text-info">Check Out</a></h5>
    <p>Check out time is 12 noon. Please in form the reception if you wish to retain your room beyond this time. Extension will be given depemding on the availability.</p>
    
    <h5><a href="#" class="text-info">Damage to Property</a></h5>
    <p>The guest will be held responsible for any losss od damage to the guest house property caused by themselves, their guest or any person whom they are responsible. </p>
    
    <h5><a href="#" class="text-info">Guest House Belonging</a></h5>
    <p>All electrical appliances like fan, light, air -conditioners, geyser etc. should be switched off before leaving the room. </p>
    <hr>
    <p>Note: Guests are requested to lock their rooms when going out.</p>

    <h3><a href="#" class="text-success"><u>"HELP US TO SERVE YOU BETTER"</u></a></h3>
</div>
</div>
@endsection