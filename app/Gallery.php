<?php

namespace App;

use App\Image;
use App\File;
use App\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
   protected $guarded = ['id', 'created_at', 'updated_at'];

   public function images()
   {
        return $this->hasMany('App\Image');
   }

   public function files()
   {
        return $this->hasMany('App\File');
   }

   public function services()
   {
   		return $this->hasMany('App\Service');
   }

}
