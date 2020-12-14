<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $with=['details'];
protected $guarded=[''];
public function details(){
    return $this->hasMany(OrderDetails::class,'order_id','id');
}
}
