<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable =['id', 'employee_id', 'name', 'gender', 'phone', 'customer_type', 'email' ];

    public $timestamps = false;

    public function bookings(){
        return $this->hasMany('App\Booking');
    }
    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
