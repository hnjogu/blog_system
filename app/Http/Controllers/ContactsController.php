<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use SweetAlert;
use App\Rules\ReCaptcha;

class ContactsController extends Controller
{
    public function contact(Request $request)
    {

        return view('contactus.contactus');

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'names' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:contactus,0.5'
            // 'g-recaptcha-response' => 'required|recaptchav3:contact-us,0.5'
        
        ]);


        $row = new contacts();
        $row->names = $request->input('names');
        $row->email = $request->input('email');
        $row->subject = $request->input('subject');
        $row->message = $request->input('message');

        $row->save();

        return redirect()->back()->withSuccess('Your email has been sent successfully!');

        // withSuccess('Your email has been sent successfully!');
        // return redirect()->back();
    }
}
