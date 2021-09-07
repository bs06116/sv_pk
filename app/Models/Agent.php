<?php

namespace App\Models;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    
    protected $fillable =[
        'name',       'l_name',      'email',     'address',      'city',     'province',
        'image',      'phone_num',    'seller_id',    'price',     'area',       'garage',
        'date',         'bedroom',      'bath',       'description'
  
      ];
       public function setImageAttribute($value)
    {    
       $this->attributes['image'] = ImageHelper::saveImage($value,'/images/products/');
   }
}
