<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use App\Models\ContactUs;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;
    use Throwable;

    class ContactUsController extends Controller
    {
        public function index()
        {
            return view('front.pages.contact');
        }

        // Save Data
        public function processContactUs(Request $request)
        {

            try {
                $contact = new ContactUs();
                $contact->message = $request->message;
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->subject = $request->subject;
                $contact->save();

                return redirect()->back()->with(['success' => 'Your request has been received']);
            } catch (Throwable $throwable) {
                return redirect()->back()->withErrors('Ooops! Unable to submit your request');
            }

        }
    }
