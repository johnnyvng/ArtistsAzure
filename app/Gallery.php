<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
   protected $guarded = ['id', 'created_at', 'updated_at', ''];

   public function images()
   {
   		return $this->hasMany('App\Image');
   }
   
}
