<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend;

class BackendController extends Controller
{
	public function index(){
		return view('backend.pages.dashboard');
	}
    //
}
