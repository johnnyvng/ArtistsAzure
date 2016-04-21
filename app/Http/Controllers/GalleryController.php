<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Image;
use Lop;


class GalleryController extends Controller
{
    //
    public function index ($id = 1)
    {

        $galleries = Gallery::all();
        $gallery = Gallery::find($id);
        return view('gallery', ['gallery' => $gallery, 'all_galleries' => $galleries]);
        
    }
}
