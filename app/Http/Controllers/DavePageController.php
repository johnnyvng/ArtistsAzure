<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Log;

class PageController extends Controller
{
    public function about()
    {
    	
         $page = Page::where('page_label', 'about')->first();
         return view('page', $page);

    }
}
