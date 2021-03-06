<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $table = 'coupons';

    protected $fillable=['coupon','validity'];
    


     //alcanze con el modelo product
     public function product()
     {
         return $this->hasMany(Products::class);
     }

    //alcanze con el modelo Coupon_product
    public function coupon_product()
    {
        return $this->hasMany(Coupon_product::class);
    }

}
