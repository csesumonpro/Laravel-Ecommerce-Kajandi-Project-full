<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CompareController extends Controller{
    public function compare(){
        return view('frontend.cart.compare');
    }
    public function add_to_compare(Request $request){
        $qty = $request->qty;
        $id = $request->product_id;
        $pro_by_id = Product::find($id);
        $data = array();
        $data['id'] = $pro_by_id->id;
        $data['name'] = $pro_by_id->name;
        $data['price'] = $pro_by_id->price;
        $data['qty'] = $qty;
        $data['options']['image']= $pro_by_id->image;
        Cart::instance('compare')->add($data);
        return redirect('/compare');
    }
    public function remove_compare_item($id){
        Cart::instance('compare')->remove($id);
        return redirect('/compare');
    }
}
