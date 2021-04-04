@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <div>
        <!-- Main content -->
        <section class="content" style="padding-top: 5%;">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>1</h3>

                            <p>Room</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{!! url('/room') !!}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>2</h3>

                            <p>Booking List</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{!! url('/registers') !!}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
            </div>

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>3<sup style="font-size: 20px"></sup></h3>

                            <p>Feedback</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{!! url('/feedback') !!}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>



            <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>4</h3>

                            <p>Inventory List</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <a href="{!! url('/inventory') !!}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
            </div>
    </div>
@endsection
