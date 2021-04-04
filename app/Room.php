<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable =['roomno', 'roomtype', 'image', 'description','price'];

    public $timestamps = false;

    public function booking(){
        return $this->hasOne('App\Booking');
    }
}
