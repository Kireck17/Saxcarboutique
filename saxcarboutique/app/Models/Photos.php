<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $table = 'photos';

    protected $fillable=['route'];
    

     //alcanze con el modelo product
     public function product()
     {
         return $this->hasMany(Products::class);
     }

     //alcanze con el modelo Photo_product
     public function phot_product()
     {
         return $this->hasMany(Photo_product::class);
     }

}
