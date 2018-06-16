<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MyAccountController extends Controller{
    public function  __construct(){
        {
            $this->middleware('auth');
//            $this->middleware('admin');
        }
    }

    public function my_account($id){
       $user = User::find($id);
      if ($user->user_type=='1'){
          return view('frontend.myaccount.buyer.buyer');
      }elseif ($user->user_type=='2'){
          return view('frontend.myaccount.seller.seller');
      }elseif ($user->user_type=='3'){
          return view('frontend.myaccount.buyer_seller');
      }
   }
}
