<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable =[
        'name',       'email',     'address',      'city',     'province', 'user_id',
        'image',      'phone_num',  'status',  'type',       'purpose',     'price',     'area', 
       'garage',      'bedroom',      'Bath',       'description',   'size',   'allp'
  
      ];
       public function setImageAttribute($value)
    {    
       $this->attributes['image'] = ImageHelper::saveImage($value,'/images/products/');
   }
   public static function Rent()
   {
       return(new static)::where('type','rent')->get();
   }
   public static function Sale()
   {
       return(new static)::where('type','sale')->get();
   }
   public static function Lease()
   {
       return(new static)::where('type','lease')->get();
   }
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }
   public function gallery()
   {
       return $this->hasMany(Gallery::class);
   }
//    public function gallery()
//    {
//        return $this->hasMany('App\Models\Gallery');
//    }
   
}
