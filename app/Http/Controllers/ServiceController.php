<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Log;

class ServiceController extends Controller
{
    //
    public function service()
    {
    	$service = Service::where('service_name', 'Mowing, Trimming, and Edging')->first();

    	return view('service', $service);
    }

    public function government()
    {
    	return view('government');
    }
 
    public function largeestate()
    {
    	return view('largeestate');
    }
    public function commercial()
    {
    	return view('commercial');
    }
}
