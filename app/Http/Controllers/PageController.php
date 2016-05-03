<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests;
use App\Submission;
use App\Http\Controllers\Controller;
use App\Image;
use App\Gallery;
use App\Category;
use Log;

class PageController extends Controller
{
  // edit the about page
    public function about() 
    {
      $page = Page::where('page_label', 'about')->first();
    
      return view('about', $page);
    }

    // edit the home page
    public function index($id = 1)
    {
      $image = Image::where('id','$id') ->first();
      $page = Page::where('page_label', 'home')->first();
      $galleries = Gallery::all();
      $gallery = Gallery::find($id);

      $all_categories = Category::all();
      $category = Category::findOrFail($id);

        
      return view('index', [
        'index' => $page, 
        'gallery' => $gallery, 
        'all_galleries' => $galleries,
        'image' => $image, 
        'all_categories' => $all_categories, 
        'category' => $category
      ]);
      // return view('index', $page, $image);
    }


    public function contact()
    {
      $page = Page::where('page_label', 'contact')->first();

      // return view('/contact', array('headline' =>'', 'body'=>''));
      return view('contact', $page);
    }


    public function save_contact_form(Request $request)
    {
      /**Show the contact form page.
      *
      *
      */
        $page = Page::where('page_label', 'contact')->first();
        
         Log::debug($request->all());

         $data = $request->all();
         $success = Submission::create($data);


         /*$page = Page::where('page_label', 'thanks')->first();
          return view('/page', array('headline' =>'', 'body'=>''));*/
          return view('/contact', $page);
     }

}
