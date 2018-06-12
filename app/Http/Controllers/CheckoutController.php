<?php

namespace App\Http\Controllers;

use App\Shipping;
use Illuminate\Http\Request;
use App\Customer;
use Session;
use Auth;
use App\Payment;
use App\Order;
use Cart;
use DB;

class CheckoutController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function shipping(){
        return view('frontend.checkout.checkout_shipping');
    }
    public function billing(){
        return view('frontend.checkout.checkout_billing');
    }
    public function save_billing(Request $request){
        $request->validate([
            'bil_address_1' => 'required|max:255|min:5',
            'bil_email' => 'required',
            'bil_phone' => 'required',
            'bil_first_name' => 'required',
            'shipping_address' => 'required',
            'bil_city' => 'required|min:2|max:100',
            'bil_zipcode' => 'required|min:4|max:5',
        ]);
        $check_user_by_id = Customer::where('cus_id',Auth::user()->id)->first();
        if($check_user_by_id==NULL){
            $billing = new Customer();
            $billing->cus_id = Auth::user()->id;
            $billing->bil_address_1 = $request->bil_address_1;
            $billing->bil_address_2 = $request->bil_address_2;
            $billing->bil_city = $request->bil_city;
            $billing->bil_country = $request->bil_country;
            $billing->bil_email = $request->bil_email;
            $billing->bil_first_name = $request->bil_first_name;
            $billing->bil_last_name = $request->bil_last_name;
            $billing->bil_phone = $request->bil_phone;
            $billing->bil_state = $request->bil_state;
            $billing->bil_zipcode = $request->bil_zipcode;
            $billing->shipping_address = $request->shipping_address;
            $billing->save();
            $billing_id = $billing->id;
            Session::put('billing_id',$billing_id);
            if($request->shipping_address=='0'){
                $shipping = new Shipping();
                $shipping->cus_id =  Auth::user()->id;
                $shipping->ship_address_2 = $request->bil_address_2;
                $shipping->ship_address_1 = $request->bil_address_1;
                $shipping->ship_address_2 = $request->bil_address_2;
                $shipping->ship_city = $request->bil_city;
                $shipping->ship_country = $request->bil_country;
                $shipping->ship_email = $request->bil_email;
                $shipping->ship_first_name = $request->bil_first_name;
                $shipping->ship_last_name = $request->bil_last_name;
                $shipping->ship_phone = $request->bil_phone;
                $shipping->ship_state = $request->bil_state;
                $shipping->ship_zip = $request->bil_zipcode;
                $shipping->save();
                $shipping_id = $shipping->id;
                Session::put('shipping_id',$shipping_id);
                return  redirect('/checkout');  //Customer Same as Shipping
            }elseif($request->shipping_address=='1'){
                return  redirect('/shipping');  //Customer and Shipping Difference
            }
        }else{
            $billing = Customer::where('cus_id',Auth::user()->id)->first();
            $billing->cus_id = Auth::user()->id;
            $billing->bil_address_1 = $request->bil_address_1;
            $billing->bil_address_2 = $request->bil_address_2;
            $billing->bil_city = $request->bil_city;
            $billing->bil_country = $request->bil_country;
            $billing->bil_email = $request->bil_email;
            $billing->bil_first_name = $request->bil_first_name;
            $billing->bil_last_name = $request->bil_last_name;
            $billing->bil_phone = $request->bil_phone;
            $billing->bil_state = $request->bil_state;
            $billing->bil_zipcode = $request->bil_zipcode;
            $billing->shipping_address = $request->shipping_address;
            $billing->save();

            if($request->shipping_address=='0'){
                $shipping = new Shipping();
                $shipping->cus_id =  Auth::user()->id;
                $shipping->ship_address_2 = $request->bil_address_2;
                $shipping->ship_address_1 = $request->bil_address_1;
                $shipping->ship_address_2 = $request->bil_address_2;
                $shipping->ship_city = $request->bil_city;
                $shipping->ship_country = $request->bil_country;
                $shipping->ship_email = $request->bil_email;
                $shipping->ship_first_name = $request->bil_first_name;
                $shipping->ship_last_name = $request->bil_last_name;
                $shipping->ship_phone = $request->bil_phone;
                $shipping->ship_state = $request->bil_state;
                $shipping->ship_zip = $request->bil_zipcode;
                $shipping->save();
                $shipping_id = $shipping->id;
                Session::put('shipping_id',$shipping_id);
                return  redirect('/checkout');  //Customer Same as Shipping
            }elseif($request->shipping_address=='1'){
                return  redirect('/shipping');  //Customer and Shipping Difference
            }
        }

    }
    public function save_shipping(Request $request){

        $request->validate([
            'ship_address_1' => 'required|max:255|min:5',
            'ship_email' => 'required',
            'ship_phone' => 'required',
            'ship_first_name' => 'required',
            'ship_last_name' => 'required',
            'ship_city' => 'required|min:2|max:100',
            'ship_zip' => 'required|min:4|max:5',
        ]);
        $shipping = new Shipping();
        $shipping->cus_id =  Auth::user()->id;
        $shipping->ship_address_2 = $request->ship_address_2;
        $shipping->ship_address_1 = $request->ship_address_1;
        $shipping->ship_city = $request->ship_city;
        $shipping->ship_country = $request->ship_country;
        $shipping->ship_email = $request->ship_email;
        $shipping->ship_first_name = $request->ship_first_name;
        $shipping->ship_last_name = $request->ship_last_name;
        $shipping->ship_phone = $request->ship_phone;
        $shipping->ship_state = $request->ship_state;
        $shipping->ship_zip = $request->ship_zip;
        $shipping->save();
        $shipping_id = $shipping->id;
        Session::put('shipping_id',$shipping_id);
        return  redirect('/checkout');
    }
    public function checkout(){
        return view('frontend.checkout.checkout_content');
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
    public function order_complete(){
        return view('frontend.checkout.checkout_success');
    }

}
