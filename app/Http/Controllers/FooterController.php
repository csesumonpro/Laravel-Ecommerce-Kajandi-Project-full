<?php

namespace App\Http\Controllers;

use App\AndroidIphone;
use App\ContactForm;
use App\Social;
use Illuminate\Http\Request;

class FooterController extends Controller{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function social_option(){
        return view('backend.footer.social.social_link');
    }
    public function  save_social(Request $request){
        $request->validate([
            'facebook'=>'required|url',
            'twitter'=>'url',
            'pinterest'=>'url',
            'instagram'=>'url',
            'google_plus'=>'url',
        ]);
          $social = Social::find(1);
          if ($social!=NULL) {
              $social->facebook = $request->facebook;
              $social->twitter = $request->twitter;
              $social->pinterest = $request->pinterest;
              $social->instagram = $request->instagram;
              $social->google_plus = $request->google_plus;
              $social->save();
          }else{
              $social = new Social();
              $social->facebook = $request->facebook;
              $social->twitter = $request->twitter;
              $social->pinterest = $request->pinterest;
              $social->instagram = $request->instagram;
              $social->google_plus = $request->google_plus;
              $social->save();
          }

      return redirect('social-option')->with('message_success','Social Link Added Successfully.....');

    }

    public function apps_download_option(){
        return view('backend.footer.social.iphone_android_apps_link');
    }
    public function save_apps_download_link(Request $request){
        $request->validate([
            'android'=>'required|url',
            'iphone'=>'url',
        ]);
        $social = AndroidIphone::find(1);
        if ($social!=NULL) {
            $social->android = $request->android;
            $social->iphone = $request->iphone;
            $social->save();
        }else{
            $social = new AndroidIphone();
            $social->android = $request->android;
            $social->iphone = $request->iphone;
            $social->save();
        }
        return redirect('apps-download-option')->with('message_success','Apps Download Link Added Successfully.....');

    }
    public function contact_option(){
//        $all_contact = ContactForm::orderBy('id','desc')->get();
        return view('backend.footer.contact.contact_form_list');
    }
    public function view_contact_messsage($id){
        $message_by_id = ContactForm::find($id);
        $message_by_id->status = 'read';
        $message_by_id->save();
        return view('backend.footer.contact.view_contact_message',compact('message_by_id'));
    }
    public function delete_contact_message($id){
        $message = ContactForm::where('id',$id)->first();
        $message->delete();
        return view('backend.footer.contact.contact_form_list')->with('message_success','Message Deleted Successfully.....');;
    }
    public function replay_contact_messsage($id){
        $message_by_id = ContactForm::find($id);
        return view('backend.footer.contact.replay_contact_message',compact('message_by_id'));
    }
    public function replay_contact_message(Request $request){
        return $request->all();
    }
}
