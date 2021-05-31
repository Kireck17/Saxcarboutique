<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //alcanze con el modelo Addresses
    public function address()
    {
        return $this->belongsTo(Addresses::class);
    }

    //alcanze con el modelo Phones
    public function phone()
    {
        return $this->belongsTo(Phones::class);
    }

    //alcanze con el modelo Orders
    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    //alcanze con el modelo Shipping_packages
    public function shipp_pack()
    {
        return $this->belongsTo(Shipping_packages::class);
    }

    //alcanze con el modelo Product_user
    public function product_user()
    {
        return $this->belongsTo(Product_user::class);
    }
    
}
