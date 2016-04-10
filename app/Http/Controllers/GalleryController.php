<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;

class GalleryController extends Controller
{
    //
    public function viewGalleryList()
    {
        $galleries = Gallery::all();

    	return view('gallery.gallery')
            ->with('galleries', $galleries);
    }

    public function saveGallery(Request $request)
    {
        // Validate the Request through the validation rules
        $validator = Validator::make($request->all(), [
                'gallery_name' => 'required|min:6'
            ]);

        if ($validator->fails()) {
            return redirect('gallery/list')->withErrors($validator)->withInput();
        }

        $gallery = new Gallery;

        // Save a new Gallery
        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = 1;
        $gallery->published = 1;
        $gallery->save();

        return redirect()->back();
    }

    public function viewGalleryPics($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('gallery.gallery-view')->with('gallery', $gallery);
    }

    public function doImageUpload()
    {

    }

}
