<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;


class CheckoutController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function checkout(){
        return view('frontend.cart.checkout');
    }
    public function place_order(Request $request){


        $request->validate([
            'payment' => 'required',
        ]);
        if($request->payment=='cash'){
            $order = new Order();
            $order->cus_id = Auth::user()->id;
            $order->ship_id = Session::get('shipping_id');
            $order->order_total = Session::get('grand_total');
            $order->save();
            $order_id = $order->id;
            Session::put('order_id',$order_id);

            $payment = new Payment();
            $payment->order_id = Session::get('order_id');
            $payment->payment_type = $request->payment;
            $payment->save();

            $cart_products = Cart::content();
            $order_detail = array();

            foreach ($cart_products as $cart_product){
                $order_detail['order_id'] = Session::get('order_id');
                $order_detail['product_id'] = $cart_product->id;
                $order_detail['product_name'] = $cart_product->name;
                $order_detail['product_price'] = $cart_product->price;
                $order_detail['product_qty'] = $cart_product->qty;
                DB::table('order_details')->insert($order_detail);
            }
//            Cart::destroy();
//            $request->session()->forget('grand_total');

            return redirect('/order-complete');

        }elseif($request->payment=='card'){
            return redirect('/payment')->with('message_error','Only Cash on Delivery Available');
        }elseif($request->payment=='paypal'){
            return redirect('/payment')->with('message_error','Only Cash on Delivery Available');
        }
    }
}
