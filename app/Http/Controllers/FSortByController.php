<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class FSortByController extends Controller{
    public function shop_content(){
        $all_products = Product::orderBy('id','desc')->paginate(12);
        return view('frontend.Product.shop')
            ->with(compact('all_products'));
    }
    public function product_by_category($id){
        $all_products = Product::where('cat_id',$id)->paginate(12);
        return view('frontend.product.shop')->with(compact('all_products'));
    }
    public function product_by_sub_category($id){
        $all_products = Product::where('sub_cat_id',$id)->paginate(12);
        return view('frontend.product.shop')->with(compact('all_products'));
    }
    public function product_by_manufacturer($id){
        $all_products = Product::where('manufacturer_id',$id)->paginate(12);
        return view('frontend.product.shop')->with(compact('all_products'));
    }
    public function product_by_model($id){
        $all_products = Product::where('model_id',$id)->paginate(12);
        return view('frontend.product.shop')->with(compact('all_products'));
    }
    public function search(Request $request){
        $search = $request->search;
        $all_products = DB::table('products')
            ->where('products.name', 'LIKE', "%$search%")
            ->orWhere('products.description', 'LIKE', "%$search%")
            ->orWhere('products.price', 'LIKE', "%$search%")
            ->orWhere('products.hot', 'LIKE', "%$search%")
            ->paginate(12);
        return view('frontend.product.shop')
            ->with(compact('all_products'));

    }
}
