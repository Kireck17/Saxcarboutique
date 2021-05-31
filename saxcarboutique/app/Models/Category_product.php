<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    use HasFactory;
    protected $table = 'category_product';

    protected $fillable=['category_id','product_id'];
    

    //alcanze con el modelo Categiries
    public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }

    //alcanze con el modelo Products
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
