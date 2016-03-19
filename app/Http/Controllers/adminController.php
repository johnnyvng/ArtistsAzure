<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin_edit(){
    	return view('admin-edit');
    }

    public function index(){
    	return view('admin');
    }
}
