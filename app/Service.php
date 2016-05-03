<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Image;

class Service extends Model
{
       // We don't want anything writing to these fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function categories()
    {
    	return $this->belongsTo('App\Category');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }
}
