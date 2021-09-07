<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Helpers\ImageHelper;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
    public static function Admin()
    {
        return(new static)::where('type','admin')->get();
    }
    public static function Agent()
    {
        return(new static)::where('type','agent')->get();
    }
    public static function Csrf()
    {
        return(new static)::where('type','csrf')->get();
    }
    public static function Seller()
    {
        return(new static)::where('type','seller')->get();
    }

    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }
    public function adss()
    {
        return $this->hasMany(Ads::class);
    }

    public function setImageAttribute($value)
    {    
       $this->attributes['image'] = ImageHelper::saveImage($value,'/images/products/');
   }

}
