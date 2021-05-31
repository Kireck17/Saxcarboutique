<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon_product extends Model
{
    use HasFactory;
    protected $table = 'coupon_product';

    protected $fillable=['coupon_id','product_id'];
    

    //alcanze con el modelo Coupons
    public function coupon()
    {
        return $this->belongsTo(Coupons::class);
    }

    //alcanze con el modelo Products
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
