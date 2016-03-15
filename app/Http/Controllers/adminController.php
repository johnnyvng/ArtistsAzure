<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    // show the admin edit page of OAG
    public function admin_edit(){
    	return view('admin-edit');
    }

    // Show Prof. Dave admin page
    public function admin_dave(){
    	return view('admin-dave');
    }
}
