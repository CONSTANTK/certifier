<?php

nanamespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;


class ShowServicesController extends Controller
{
	public function index(){

		$pageTitle = 'Our Services';
		return view('front.pages.services', compact( 'pageTitle'));
	}

	public function show(Services $service){

		$pageTitle = 'Our Services';
       
      // return view('front.pages.showservices');
		//return $service;
	return view('front.pages.showservices', compact( 'pageTitle','service'));

	}

		$content = 'Our Services';

		return view('front.pages.showservices', compact( 'content'));
	}

	ublic function show(Services $service){

		$pageTitle = 'Our Services';

	return view('front.pages.showservices', compact( 'content','service'));

	}

}
