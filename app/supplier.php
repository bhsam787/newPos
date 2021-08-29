<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
  protected $guarded=[];

  public function products()
   {
       return $this->hasMany(product::class);
   }
}
