<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{	

	public function test(){
		return view('test');
	}

    public function index(){
    	return view('index');
    }

    public function about(){
    	return view('about');
    }

    // this is the page test
    public function page_dave(){
    	return view('page-dave');
    }
}
