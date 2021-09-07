<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable =[
        'image',   'url',  'user_id'
  
      ];
       public function setImageAttribute($value)
    {    
       $this->attributes['image'] = ImageHelper::saveImage($value,'/images/products/');
   }
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }
}
