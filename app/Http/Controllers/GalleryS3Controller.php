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
    //
    public function index ($id = 1)
    {
		// return Gallery::all();
        $galleries = Gallery::all();        
        $gallery = Gallery::find($id);
        return view('gallery', ['gallery' => $gallery, 'all_galleries' => $galleries]);
    }


}
