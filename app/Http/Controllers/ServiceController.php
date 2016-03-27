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
    	$servicePage = Service::where('service_name', 'BAD')->first();

    	return view('service', $servicePage);
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
