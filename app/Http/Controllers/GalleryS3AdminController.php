<?php

// This GalleryS3AdminController equals to GalleryController

namespace App\Http\Controllers;

use App\File;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryS3AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Gallery::all();
        return Gallery::where('user_id', Auth::user()->id)->with('user')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->all(), 422);
        }

        $gallery = Gallery::create([
            'name' => $request->input('name'),
            // 'user_id' => 1,
            'user_id' => Auth::user()->id,
        ]);

        return response($gallery, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*Show the images inside the gallery. We move this line of code to Gallery.php model*/
        //return Gallery::with('user')->where('id', $id)->first();
        
        /*create a new getSingleGallery() function and store it in Gallery.php model*/
        $galleryObj = new Gallery;
        return $galleryObj->getSingleGallery($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage(Request $request)
    {
        $galleryId = $request->input('galleryId');

        // check if the file exist
        if (!$request->hasFile('file')) {
            return response('No file sent.', 400);
        }

        // check if the file is valid file
        if (!$request->file('file')->isValid()) {
            return response('File is not valid.', 400);
        }

        // validation rules
        $validator = Validator::make($request->all(), [
            'galleryId' => 'required|integer',
            'file' => 'required|mimes:jpeg,jpg,png|max:8000',
        ]);

        // if validation fails
        if ($validator->fails()) {
            return response('There are errors in the form data', 400);
        }

        /* // Copy this part into File.php
        $mimeType = $request->file('file')->getClientMimeType();
        $fileSize = $request->file('file')->getClientSize();
        $fileName = 'gallery_' . $galleryId . '_' . uniqid() . '.' . $request->file('file')->guessClientExtension();

        $s3 = Storage::disk('s3');
        if ($s3->put($fileName, file_get_contents($request->file('file')), 'public')) {
            $file = File::create([
                'file_name' => $fileName,
                'mime_type' => $mimeType,
                'file_size' => $fileSize,
                'file_path' => env('S3_URL') . $fileName,
                'type'      => 's3',
            ]);

            DB::table('galleries_images')->insert([
                'gallery_ID'=> $galleryId,
                'file_ID'   => $file->id,
            ]); 

            $fileImg = File::find($file->id);
            $fileImg->status = 1;
            $fileImg->save();
        }

        return response($file, 201);*/

        /*Replace the code above with $fileObj and get the uploadThumbAndMainImage() function from File.php*/
        $fileObj = new File;
        $fileUpload = $fileObj->uploadThumbAndMainImage($request);
        return response($fileUpload, 201);
    }

    public function deleteSingleImage(Request $request)
    {
        $imageId = $request->input('id');

        try {
            DB::beginTransaction();

            // delete the file from the files table
            $file = File::findOrFail($imageId);
            $file->delete();

            // remove the entry from the gallery image pivot table
            DB::table('galleries_images')->where('file_ID', $file->id)->delete();

            // delete the actual image from S3
            $fileName = str_replace(env('S3_URL'), '', $file->file_path);
            $fileName = explode('/', $fileName);

            $mainImage = "gallery_{$request->input('galleryId')}/main/" . $fileName[count($fileName) - 1];
            $thumbImage = "gallery_{$request->input('galleryId')}/thumb/" . $fileName[count($fileName) - 1];
            $mediummage = "gallery_{$request->input('galleryId')}/medium/" . $fileName[count($fileName) - 1];

            $s3 = Storage::disk('s3');
            $s3->delete($mainImage);
            $s3->delete($thumbImage);
            $s3->delete($mediummage);

            DB::commit();
        } catch (\PDOException $e) {
            DB::rollBack();
        }

        return response($this->show($request->input('galleryId')), 200);
    }
}
