<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class RegisterController extends Controller
{
	public function index(){

		return view('front.pages.register');
	}
    //
}
