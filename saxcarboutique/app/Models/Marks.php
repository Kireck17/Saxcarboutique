<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;
    protected $table = 'marks';

    protected $fillable=['name','photo'];
    

    //alcanze con el modelo product
    public function product()
    {
        return $this->hasMany(Products::class);
    }
}
