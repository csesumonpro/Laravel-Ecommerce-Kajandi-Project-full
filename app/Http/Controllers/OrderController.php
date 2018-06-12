<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Auth;
use App\Payment;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use DB;
use PDF;

class OrderController extends Controller{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function manage_order(){
        $order_list = DB::table('orders')
            ->join('customers','orders.cus_id','=','customers.cus_id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.bil_first_name','customers.bil_last_name','payments.payment_type')
            ->orderBy('id','desc')
            ->get();
        return view('backend.order.order_list',compact('order_list'));

    }
    public function order_status($id){
        $order = Order::find($id);
        $order->order_status = 'confirm';
        $order->save();
        return redirect('/manage-order');
    }
    public function order_delete($id){
        $order = Order::where('id',$id)->first();
        $shipping_id = $order->ship_id;
        $order->delete();
        $collection = OrderDetail::where('order_id',$id)->get(['id']);
        OrderDetail::destroy($collection->toArray());
        $payment = Payment::where('order_id',$id)->first();
        $payment->delete();
        $shipping = Shipping::where('id',$shipping_id)->first();
        $shipping->delete();
        return redirect('/manage-order');
    }
    public function view_order($id){
        $order = Order::where('id',$id)->first();
        $shipping_id = $order->ship_id;
        $billing_id = $order->cus_id;
        $order_details = OrderDetail::where('order_id',$id)->get();
        $shipping = Shipping::where('id',$shipping_id)->first();
        $billing = Customer::where('cus_id',$billing_id)->first();
        return view('backend.order.view_order',compact('order',
            'order_details','shipping','billing'));
    }

    public function download_pdf($id){
        $order = Order::where('id',$id)->first();
        $shipping_id = $order->ship_id;
        $billing_id = $order->cus_id;
        $order_details = OrderDetail::where('order_id',$id)->get();
        $shipping = Shipping::where('id',$shipping_id)->first();
        $billing = Customer::where('cus_id',$billing_id)->first();

        $pdf = PDF::loadView('backend.order.pdf_download',compact('order',
            'order_details','shipping','billing'));
        return $pdf->stream('invoice.pdf');

    }
}
