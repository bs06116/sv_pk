<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable =[
              'city'
  
      ];
      public function seller(){
        return $this->hasMany('App\Models\seller');
  
      }
}
