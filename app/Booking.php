<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable =['customer_id', 'room_id', 'coming',  'going', 'checkin', 'checkout', 'people_no', 'duration', 'name', 'phone', 'email'];

    public $timestamps = false;

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
    public function payment(){
        return $this->hasOne('App\Payment');
    }
}
