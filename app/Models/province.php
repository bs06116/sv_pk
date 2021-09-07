<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    protected $fillable =[
        'province'

    
];
public function seller(){
    return $this->belongsToMany('App\Models\seller');

  }
}
