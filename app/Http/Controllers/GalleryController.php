<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Image;
use App\File;
use Log;

class GalleryController extends Controller
{
    //
    public function index ($id = 1)
    {
        $galleries = Gallery::all();
        // return $galleries;
        $gallery = Gallery::findOrFail($id);
        return view('gallery', ['gallery' => $gallery, 'all_galleries' => $galleries]);        
    }

    public function viewGalleryList() 
	{
		$galleries = Gallery::all();

		return view('gallery-list')->with('galleries', $galleries);
	}

	public function viewGalleryPics($id)
	{
		$galleries = Gallery::all();

		$gallery = Gallery::findOrFail($id);		

		$files = File::all();

		return view('gallery-view', [
			'galleries' => $galleries, 
			'gallery' => $gallery,
			'files' => $files
		]);
	}
}
