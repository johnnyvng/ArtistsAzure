<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Http\Requests;
use App\Image;
use App\Service;
use Illuminate\Http\Request;
use Log;

class ServiceController extends Controller
{
    //
    public function index($id = 1)
    {
        /*return view of the service where services.id=1*/
        // $service = Service::where('service_name','Lawn installations')->first();
        // return view('service', $service);
        $all_galleries = Image::all();
        $gallery = Image::findOrFail($id);

        $services = Service::all();
        $service = Service::findOrFail($id);
        // return $service;
        return view('service', [
            'service' => $service,  
            'all_services' => $services,
            'all_galleries' => $all_galleries,
            'gallery'=>$gallery
        ]);
    }

    


    // public function about() 
    // {
    //   $page = Page::where('page_label', 'about')->first();
    
    //   return view('about', $page);
    // }
 
    // public function largeestate()
    // {
    //     $largeestateService = Service::get();
    //     return view('largeestate', ['services' => $largeestateService]);
    // }
    // public function commercial()
    // {
    //     $commercialService = Service::get();
    //     return view('commercial', ['services' => $commercialService]);
    // }


    // public function index ($id = 1)
    // {
    //     $CategoriesServices = CategoryService::all();
    //     // return $CategoriesServices;
    //     $CategoryService = CategoryService::find($id);
        
    //     return view('service', ['CategoryService' => $CategoryService, 'All_CategoriesServices' => $CategoriesServices]);        
    // }

    // public function categoryservice() 
    // {
    //     $CategoryService = CategoryService::all();

    //     return view('service', $CategoryService);
    // }
}
