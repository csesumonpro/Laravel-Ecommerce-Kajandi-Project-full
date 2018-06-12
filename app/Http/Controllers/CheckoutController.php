<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;


class CheckoutController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

}
