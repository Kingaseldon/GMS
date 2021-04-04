<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payments';

    protected $fillable =['customer_id', 'journal_no', 'image'];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function booking(){
        return $this->belongsTo('App\Booking');
    }

}
