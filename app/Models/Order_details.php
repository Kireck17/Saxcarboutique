<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $fillable=['feach_day','sub_total','discount','order_id','product_id'];
    

    //alcanze con el modelo Products
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    //alcanze con el modelo Orders
    public function order()
    {
        return $this->MannyTo(Orders::class);
    }
}
