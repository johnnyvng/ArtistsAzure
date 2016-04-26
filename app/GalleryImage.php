<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    //
    protected $fillable = ['id', 'gallery_ID', 'file_ID'];


    public function files()
   {
        return $this->hasMany('App\File');
   }


}
