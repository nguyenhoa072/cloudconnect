<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        $this->_data['title'] = 'contact-us';

        return view('contact.form', $this->_data);
    }

    public function sendMail(ContactRequest $request)
    {

        $data = $request->all();

        Mail::send('emails.contact_vi', 
        
            array(
                'name' => $data["name"], 
                'email' => $data["email"], 
                'phone_number' => $data["phone_number"], 
                'your_question' => $data['your_question']
            ), 
            
            function ($message) use ($data) {
                $message->to($data['email'], $data['name'])->subject('FPT Cloud Connect!')
                        ->cc(['fti.cloudconnect@fpt.com.vn'])
                        ->bcc(['hoant76@fpt.com.vn', 'baolgq@fpt.com.vn']);
                }
            
        );

        return response()->json([
            'rs' => 1,
            'msg' => "thanh cong"
        ]); 
    }
}