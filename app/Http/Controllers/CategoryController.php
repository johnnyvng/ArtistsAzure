<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Service;
use App\Image;
use App\Gallery;


class CategoryController extends Controller
{
    //
    public function government($id = 1)
    {
        // $governmentServices = Category::all();
        // return $governmentServices;
        // $governmentServices = CategoryService::where('category_id','1')->get();

        // $governmentCategory = Category::where('id', '1')->first();
        // $governmentCategory = Category::findOrFail($id);

    	$governmentGalleries = Gallery::all();
        $governmentGallery = Gallery::findOrFail($id);

        $governmentServices = Service::all();
        $governmentService = Service::findOrFail($id);


        $governmentCategories = Category::all();
        $governmentCategory = Category::findOrFail($id);

        // return $governmentService;
    	return view('government', [
    		'all_governmentServices' => $governmentServices, 
    		'governmentService' => $governmentService,
    		'all_governmentGalleries' => $governmentGalleries,
            'governmentGallery' => $governmentGallery, 
            'all_governmentCategories' => $governmentCategories,
            'governmentCategory' => $governmentCategory
        ]);
    }
    public function commercial($id = 2)
    {
        // $governmentServices = Category::all();
        // return $governmentServices;
        // $governmentServices = CategoryService::where('category_id','1')->get();

        // $governmentCategory = Category::where('id', '1')->first();
        // $governmentCategory = Category::findOrFail($id);

        $commercialGalleries = Gallery::all();
        $commercialGallery = Gallery::findOrFail($id);

        $commercialServices = Service::all();
        $commercialService = Service::findOrFail($id);


        $commercialCategories = Category::all();
        $commercialCategory = Category::findOrFail($id);

        // return $governmentService;
        return view('commercial', [
            'all_commercialServices' => $commercialServices, 
            'commercialService' => $commercialService,
            'all_commercialGalleries' => $commercialGalleries,
            'commercialGallery' => $commercialGallery, 
            'all_commercialCategories' => $commercialCategories,
            'commercialCategory' => $commercialCategory
        ]);
    }
    public function estate($id = 3)
    {
        // $governmentServices = Category::all();
        // return $governmentServices;
        // $governmentServices = CategoryService::where('category_id','1')->get();

        // $governmentCategory = Category::where('id', '1')->first();
        // $governmentCategory = Category::findOrFail($id);

        $estateGalleries = Gallery::all();
        $estateGallery = Gallery::findOrFail($id);

        $estateServices = Service::all();
        $estateService = Service::findOrFail($id);


        $estateCategories = Category::all();
        $estateCategory = Category::findOrFail($id);

        // return $governmentService;
        return view('estate', [
            'all_estateServices' => $estateServices, 
            'estateService' => $estateService,
            'all_estateGalleries' => $estateGalleries,
            'estateGallery' => $estateGallery, 
            'all_estateCategories' => $estateCategories,
            'estateCategory' => $estateCategory
        ]);
    }
}
