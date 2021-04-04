@extends('ui.layouts.main2')

@section('content2')
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 
  margin: 0;
 
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

div.p {
  text-align: center;

}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #C0C0C0;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}






@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <div class="p">
    <p>The College of Science and Technology (CST) like other RUB college provides guest house services for RUB officials and other customer.</p>
  <p>CST has one guest house providing accomodation at a affordable rate. Meetings can also be held at the conference room of guesthouse. suite room, single room and conference are provided. Catering services are also provided</p>
</div>
</div>
<br>
<h2 style="text-align:center">Contact Details</h2>

<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/about/tumzang.jpg" alt="Tumzang" style="width:100%">
      <div class="container">
        <h2>Tum Zang</h2>
        <p class="title">GuestHouse Incharge</p>
        <P>Contact : 17498689 </p>
        <p>guesthouse.cst@rub.edu.bt.com</p>
     
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/about/kinzang.jpg" alt="kinzang" style="width:100%">
      <div class="container">
        <h2>Kinzang</h2>
        <p class="title">GuestHouse Incharge</p>
        <p>Contact : 77303717</p>
        <p>guesthouse.cst@rub.edu.bt.com</p>
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/about/Tsheringwangmo.jpg" alt="Tsheringwangmo" style="width:100%">
      <div class="container">
        <h2>Tshering Wangmo</h2>
        <p class="title">Senior ADM Assistant</p>
        <p>Contact : 17755313</p>
        <p>tsheringwangmo.cst@rub.edu.bt.com</p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection