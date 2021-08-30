<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct(){

	}
    //


       public function myHome()
   {
       return view('myHome');
   }

      public function myUsers()
   {
       return view('myUsers');
   }
}
