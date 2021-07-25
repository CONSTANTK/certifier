<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('front.pages.welcome');
    }

    public function about(){
        return view('front.pages.about');
    }



}
