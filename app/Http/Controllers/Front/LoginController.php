<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index(){
		return view('front.pages.login');
	}
    //
     public function processLogin(Request $request)
        {

            try {
                $login = new Login();
                $login->username = $request->username;
                $login->password = $request->password;
                $contact->save();

                return redirect()->back()->with(['success' => 'Your request has been successful']);
            } catch (Throwable $throwable) {
                return redirect()->back()->withErrors('Ooops! Unable to login, please check your username and password');
            }

        }
    }

}
