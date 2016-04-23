<?php

namespace App\Http\Controllers;

use Log;
use App\File;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    //
    public function index ($id = 1)
    {
        $galleries = Gallery::all();
        $gallery = Gallery::find($id);
        return view('gallery', ['gallery' => $gallery, 'all_galleries' => $galleries]);
        
    }

    public function uploadImage(Request $request)
    {
        return $request->all();
        // $galleryId = $request->input('galleryId');

        // // check if the file exist
        // if (!$request->hasFile('file')) {
        //     return response('No file sent.', 400);
        // }

        // // check if the file is valid file
        // if (!$request->file('file')->isValid()) {
        //     return response('File is not valid.', 400);
        // }

        // // validation rules
        // $validator = Validator::make($request->all(), [
        //     'galleryId' => 'required|integer',
        //     'file' => 'required|mimes:jpeg,jpg,png|max:8000',
        // ]);

        // // if validation fails
        // if ($validator->fails()) {
        //     return response('There are errors in the form data', 400);
        // }

        // $mimeType = $request->file('file')->getClientMimeType();
        // $fileSize = $request->file('file')->getClientSize();
        // $fileName = 'gallery_' . $galleryId . '_' . uniqid() . '.' . $request->file('file')->guessClientExtension();

        // $s3 = Storage::disk('s3');
        // if ($s3->put($fileName, file_get_contents($request->file('file')), 'public')) {
        //     $file = File::create([
        //         'file_name' => $fileName,
        //         'mime_type' => $mimeType,
        //         'file_size' => $fileSize,
        //         'file_path' => env('S3_URL') . $fileName,
        //         'type'      => 's3',
        //     ]);
        // }


        // $fileObj = new File;
        // $fileUpload = $fileObj->uploadThumbAndMainImage($request);
        // return response($fileUpload, 201);
    }
}
