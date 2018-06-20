<?php
namespace App\Http\Controllers;
use App\ContactForm;
use Illuminate\Http\Request;
use App\User;


class CustomUserController extends Controller{

    public function storeUser(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users,email',
            'user_type' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $su = new User();
        $su->name = $request->name;
        $su->email = $request->email;
        $su->phone = $request->phone;
        $su->user_type = $request->user_type;
        $su->password = bcrypt($request->password);
        $su->save();
        return redirect()->route('custLog')->with('message_success', 'Registration Successfully Complete Please Login');
    }
    public function show_contact_form(){
        return view('frontend.contact.contact_us_form');
    }
    public function save_contact_form(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'subject' =>  'required|min:3|max:30',
            'message' => 'required|min:10|max:1000',
        ]);
        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect('show-contact-form')->with('message_success', 'Message Successfully Send');
    }

}