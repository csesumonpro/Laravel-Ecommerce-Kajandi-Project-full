<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerReview;
use Auth;

class CustomerReviewController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function write_customer_review(Request $request){
            $review = new CustomerReview();
            $review->review = $request->review;
            $review->rating = $request->star;
            $review->product_id = $request->product_id;
            $review->user_id = Auth::user()->id;
            $review->save();
            return redirect('/product-details/'.$request->product_id);

    }
}
