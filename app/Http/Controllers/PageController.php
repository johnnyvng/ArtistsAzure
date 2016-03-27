<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

}
