<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mail\FeedbackMail;

class ContactController extends Controller
{

    public function create() {
        return view('contact');
    }

    public function sendContact(Request $request){
        request() -> validate([
            'contactform_name' => 'required',
            'contactform_email' => 'required|email',
            'contactform_message' => 'required',
            'subject' => 'required',
            'template_contactform_service'=>'required'
             ],[
            'contactform_name.required' => 'required',
            'contactform_message.required' => 'required',
            'contactform_email.required' => 'required',
            'phone_number.required' => 'Invalid Format',
            'subject.required' => 'required',
            'template_contactform_service.required' => 'required',
        ]);
        
        $objMail = new \stdClass();
        $objMail->email = $request->contactform_email;
        $objMail->content = $request->contactform_message;
        $objMail->from = $request->contactform_name;
        $objMail->contact = $request->contactform_phone;
        $objMail->subject = $request->subject;
        $objMail->query = $request->template_contactform_service;

        //send email
        Mail::to('communitr3e@gmail.com')->send(new FeedbackMail($objMail));
        return redirect()->back()->with('message','We will get back to you shortly.');
    }
}
