<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Image;
use Log;

class GalleryController extends Controller
{
    //
    public function index ($id = 1)
    {
    	// return Gallery::all();
    	return Gallery::where('user_id', Auth::user()->id)->get();
        // $galleries = Gallery::all();
        // $gallery = Gallery::find($id);
        // return view('gallery', ['gallery' => $gallery, 'all_galleries' => $galleries]);
        
    }
}
