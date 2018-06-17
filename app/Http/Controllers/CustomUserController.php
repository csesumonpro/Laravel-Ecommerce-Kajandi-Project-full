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
class CustomUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
}