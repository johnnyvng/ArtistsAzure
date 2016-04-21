<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests;
use App\Submission;
use App\Http\Controllers\Controller;
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
    public function index()
    {
      $page = Page::where('page_label', 'home')->first();

      return view('index', $page);
    }
    public function contact()
    {
      $page = Page::where('page_label', 'home')->first();

      return view('/contact', array('headline' =>'', 'body'=>''));
    }
    public function save_contact_form(Request $request)
    {
      /**Show the contact form page.
      *
      *
      */
         Log::debug($request->all());

         $data = $request->all();
         $success = Submission::create($data);


         /*$page = Page::where('page_label', 'thanks')->first();
          return view('/page', array('headline' =>'', 'body'=>''));*/
          return view('/contact');
     }

}
