<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Gallery;

class Category extends Model
{
    //
    protected $guarded = ['id','created_at','updated_at'];

    public function services()
    {
    	return $this->hasMany('App\Service');
    }

    public function galleries()
    {
    	return $this->hasOne('App\Gallery');
    }
}
