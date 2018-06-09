<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller{

    public function view_cart(){
        return view('frontend.cart.cart');
    }
    public function add_to_cart(Request $request){
        $qty = $request->qty;
        $id = $request->product_id;
        $pro_by_id = Product::find($id);
        $data = array();
        $data['id'] = $pro_by_id->id;
        $data['name'] = $pro_by_id->name;
        $data['price'] = $pro_by_id->price;
        $data['qty'] = $qty;
        $data['options']['image']= $pro_by_id->image;

//		Cart::clear();
        Cart::add($data);
        return redirect('/shop');
    }
    public function remove_cart_item($id){
        Cart::remove($id);
        return redirect('/cart');
    }
    public function update_cart(Request $request){
        $id =$request->id;
        Cart::update($id, $request->qty);
        return redirect('/cart');
    }
}
