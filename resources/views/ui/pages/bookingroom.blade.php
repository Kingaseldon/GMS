@extends('ui.layouts.main2')

@section('content2')

<div class="row text-center" >
<h4>Continue to Book if you have registered</h4>
@foreach ($rooms as $room)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card" style="margin-top:15px;">
                <img  style="height:200px;" class="card-img-top" src="{{ url('/uploads') . '/' . $room->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->roomtype }}</h5>
                    <strong>Room no:</strong>  {{ $room->roomno }}&nbsp;
                    <p>Nu {{$room->price}}</p>&nbsp;
                    <p>{{$room->description}}</p>

                </div>
                <div class="card-footer">
                <a href="proceed_booking/{{$room->id}}" class="btn btn-primary">Book</a>
                </div>
            </div>
        </div>
@endforeach
    </div>
@endsection