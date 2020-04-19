<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class ContactController extends Controller
{
    
	public function SendMailtest(Request $request){

		$data = array(
            'name'      =>  $request->input('fullname'),
            'subject'   =>  $request->input('subject'),
            'email'     =>  $request->input('email'),
            'phone'     =>  $request->input('phone'),
            'message'   =>  $request->input('message')
        );
		Mail::to($data['email'])->send(new SendMail($data));
		
 		/*
 		Mail::send('mailfb', array('name'=>$name,'email'=>$email, 'content'=>$name), function($message){
	        $message->to('huutoan.fithou1993@gmail.com', 'Visitor')->subject('Visitor Feedback!');
	    });
	    Mail::send('mail', $data, function($message) {
         $message->to('huutoan.fithou1993@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('huutoan.fithou1993@gmail.com','Virat Gandhi');
      	});
        Session::flash('flash_message', 'Send message successfully!');
        */

        return redirect('contact')->with('success', 'Gửi thành công !');

	}
	public function GetContent(){
		return view('contact');
	}
}
