<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
      protected $guarded=[];

      public function supplier()
       {
           return $this->belongsTo(supplier::class);
       }
}
