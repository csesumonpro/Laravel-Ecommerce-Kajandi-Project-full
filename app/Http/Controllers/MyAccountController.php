<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderDetail;
use App\Payment;
use DB;
use Auth;
use App\Shipping;
use App\Customer;

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

//   Customer Account/ Buyer Account Info Start

    public function customer_orders($id){
        $orders = DB::table('orders')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'payments.payment_status')
            ->where('cus_id','=',$id)
//            ->orderBy('created_at','desc')
            ->get();
        return view('frontend.myaccount.buyer.customer_orders',compact('orders'));
    }
    public function view_each_order($id){
        $order = Order::where('id',$id)->first();
        $shipping_id = $order->ship_id;
        $billing_id = $order->cus_id;
        $order_details = OrderDetail::where('order_id',$id)->get();
        $shipping = Shipping::where('id',$shipping_id)->first();
        $billing = Customer::where('cus_id',$billing_id)->first();
        return view('frontend.myaccount.buyer.view_customer_order',compact('order',
            'order_details','shipping','billing'));
    }
    public function customer_change_password(){
        return view('frontend.myaccount.change_password');
    }
    public function customer_password_change(Request $request){
        $this->validate($request, [
            'old_password'          => 'required|min:6',
            'new_password'              => 'required|min:6|different:old_password',
            'confirm_new_password' => 'required|min:6|same:new_password',
        ]);
       $user = User::find(Auth::user()->id);
       if( password_verify($request->old_password,$user->password)){
          $user->password = bcrypt($request->new_password);
          $user->save();
           return redirect('/customer-change-password/'.Auth::user()->id)->with('message_success','Password Changed Successfully..');
       }else{
            return redirect('/customer-change-password/'.Auth::user()->id)->with('message_error','Old Password and New Password doesn\'t Match');
       }

    }
    public function customer_personal_info(){
        return view('frontend.myaccount.buyer.customer_personal_info');
    }
    public function update_personal_info(Request $request){

        $request->validate([
            'bil_address_1' => 'required|max:255|min:5',
            'bil_phone' => 'required',
            'bil_first_name' => 'required',
            'bil_last_name' => 'required',
            'bil_city' => 'required|min:2|max:100',
            'bil_zipcode' => 'required|min:4|max:5',
        ]);
      $customer = Customer::where('cus_id',Auth::user()->id)->first();
      $customer->bil_first_name = $request->bil_first_name;
      $customer->bil_last_name = $request->bil_last_name;
      $customer->bil_phone = $request->bil_phone;
      $customer->bil_address_1 = $request->bil_address_1;
      $customer->bil_address_2 = $request->bil_address_2;
      $customer->bil_city = $request->bil_city;
      $customer->bil_country = $request->bil_country;
      $customer->bil_zipcode = $request->bil_zipcode;
      $customer->save();
      $user = User::find(Auth::user()->id);
      $user->phone = $request->bil_phone;
      $user->save();
        return redirect('/customer-personal-info/'.Auth::user()->id)->with('message_success','Personal Information Changed Successfully..');
    }
    public function change_customer_email(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
        ]);
        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->save();
        $customer = Customer::where('cus_id',Auth::user()->id)->first();
        $customer->bil_email = $request->email;
        $customer->save();
        return redirect('/customer-personal-info/'.Auth::user()->id)->with('message_success','Email Changed Successfully..');
    }



//   Customer Account/ Buyer Account Info End

}
