<?php

namespace App\Http\Controllers;

use Log;
// use App\File;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class GalleryS3Controller extends Controller
{

	public function viewGalleryList() 
	{
		$galleries = Gallery::all();

		return view('galleryS3')->with('galleries', $galleries);

	}

	public function viewGalleryPics($id)
	{
		$gallery = Gallery::findOrFail($id);

		return view('galleryS3-view')->with('gallery', $gallery);
	}

}
