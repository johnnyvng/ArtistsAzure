<?php

namespace App\Http\Controllers;

use Log;
use App\File;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Validator;



class GalleryS3Controller extends Controller
{

	public function viewGalleryList() 
	{
		$galleries = Gallery::all();

		return view('galleryS3')->with('galleries', $galleries);

	}

	public function viewGalleryPics($id)
	{
		$galleries = Gallery::all();

		$gallery = Gallery::findOrFail($id);		

		$files = File::all();

		return view('galleryS3-view', [
			'galleries' => $galleries, 
			'gallery' => $gallery,
			'files' => $files
		]);
	}

}
