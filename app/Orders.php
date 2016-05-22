<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = "orders";
    protected $fillable  = ['order_code', 'product', 'first_name', 'last_name', 'delivery_date', 'status'];
    public $timestamps = false;
}
