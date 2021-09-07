<?php

namespace App\Models;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    
        protected $fillable = ['seller_id', 'name', 'size'];

        public function setImageAttribute($value)
        {    
           $this->attributes['gallaryimage'] = ImageHelper::saveImage($value,'/images/products/');
       }
    
        public function seller()
        {
            return $this->belongsTo('App\Models\Seller');
        }
        // public function seller()
        // {
        //     return $this->belongsTo(Gallery::class, 'seller_id');
        // }
    
}
