<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';

    protected $fillable =['name', 'quantity', 'condition','location','image' ];

    public $timestamps = false;



}
