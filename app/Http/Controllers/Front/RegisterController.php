<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\ContactUs;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;
    use Throwable;

    class ContactUsController extends Controller
    {
        public function register()
        {
            return view('front.pages.contact');
        }

        // Save Data
        public function processContactUs(Request $request)
        {

            try {
                $register = new Register();
                $register->user_id = $request->user_id;
                $register->fname = $request->fname;
                $register->mname = $request->mname;
                $register->name = $request->name;
                $register->email = $request->email;
                $register->phone = $request->phone;
                $register->save();

                return redirect()->back()->with(['success' => 'Your request has been received']);
            } catch (Throwable $throwable) {
                return redirect()->back()->withErrors('Ooops! Unable to submit your request');
            }

        }
    }
