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

public function register(){
        return view('front.pages.register');
    }

public function services(){
        return view('front.pages.services');
    }

    public function showservice(){
        return view('front.pages.showservice');
    }

}
