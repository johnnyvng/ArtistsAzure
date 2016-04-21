<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests;
use Log;

class ServiceController extends Controller
{
    //
    public function service()
    {
        $service = Service::where('service_name','Landscaping and Design')->first();

        return view('service', $service);
    }

    public function government()
    {
        $governmentService = Service::get();
    	return view('government', ['services' => $governmentService]);
    }
 
    public function largeestate()
    {
        $largeestateService = Service::get();
        return view('largeestate', ['services' => $largeestateService]);
    }
    public function commercial()
    {
        $commercialService = Service::get();
        return view('commercial', ['services' => $commercialService]);
    }
}
