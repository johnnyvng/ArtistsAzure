<?php

namespace App;

use App\Image;
use App\File;
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


   // Dropzonejs S3
   protected $fillable = ['name', 'user_id'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getSingleGallery($id)
    {
        $gallery = Gallery::with('user')->where('id', $id)->first();

        // $gallery->images = $this->getGalleryImageUrls($id);

        $gallery->images = $this->getGalleryImageUrls($id, $gallery->id);

        return $gallery;
    }

    // private function getGalleryImageUrls($id)
    private function getGalleryImageUrls($id, $galleryId) // use this for $finalData
    {
        $files = DB::table('galleries_images')
            ->where('gallery_ID', $id)
            ->join('files', 'files.id', '=', 'galleries_images.file_ID')
            ->get();

        // return $files;

        $finalData = [];
        foreach ($files as $key => $file) {
            $finalData[$key] = [
                'file_id' => $file->id,
                'thumbUrl' => env('S3_URL') . "gallery_{$galleryId}/thumb/" . $file->file_name, // use thumbUrl instead of thumb because of lightbox
                'url'      => env('S3_URL') . "gallery_{$galleryId}/medium/" . $file->file_name, // use url instead of medium because of lightbox
                'main'     => env('S3_URL') . "gallery_{$galleryId}/main/" . $file->file_name,
            ];
        }

        return $finalData;
    }

}
