<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable=['name','description','price','quantity', 'mark_id' , 'discount','barcode'];
    

    //alcanze con el modelo Marks
    public function mark()
    {
        return $this->belongsTo(Marks::class);
    }

    //alcanze con el modelo Coupons_product
    public function coupon_product()
    {
        return $this->belongsTo(Coupon_product::class);
    }

    //alcanze con el modelo Coupons
    public function coupon()
    {
        return $this->belongsTo(Coupons::class);
    }


    //alcanze con el modelo Photos
    public function photo()
    {
        return $this->belongsTo(Photos::class);
    }

    //alcanze con el modelo Photo_product
    public function photo_product()
    {
        return $this->belongsTo(Photo_product::class);
    }

    //alcanze con el modelo Category_product
    public function category_product()
    {
        return $this->belongsTo(Category_product::class);
    }

    //alcanze con el modelo Categories
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    //alcanze con el modelo Product_user
    public function product_user()
    {
        return $this->belongsTo(Product_user::class);
    }

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //alcanze con el modelo Order_details
    public function order_det()
    {
        return $this->belongsTo(Order_details::class);
    }

    //alcanze con el modelo Orders
    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
