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
    public function advance_search(Request $request){
        $search = $request->keyword;
        $cat = $request->category;
        if($search!=NULL && $cat=='All Departmens') {
            $all_products = DB::table('products')
                ->where('products.name', 'LIKE', "%$search%")
                ->orWhere('products.description', 'LIKE', "%$search%")
                ->orWhere('products.price', 'LIKE', "%$search%")
                ->orWhere('products.hot', 'LIKE', "%$search%")
                ->paginate(12);
                return view('frontend.product.shop')
                    ->with(compact('all_products'));
            }
        elseif($cat!=NULL && $search!=NULL){
            $count = Product::where('cat_id',$cat)->count();
            if($count=='0'){
                $all_products = DB::table('products')
                    ->where('products.sub_cat_id', $cat)
                    ->where('products.name', 'LIKE', "%$search%")
                    ->orWhere('products.description', 'LIKE', "%$search%")
                    ->orWhere('products.price', 'LIKE', "%$search%")
                    ->orWhere('products.hot', 'LIKE', "%$search%")
                    ->paginate(12);
                return view('frontend.product.shop')->with(compact('all_products'));
            }
        elseif($count!='0'){
            $all_products = DB::table('products')
                ->where('products.cat_id', $cat)
                ->where('products.name', 'LIKE', "%$search%")
                ->orWhere('products.description', 'LIKE', "%$search%")
                ->orWhere('products.price', 'LIKE', "%$search%")
                ->orWhere('products.hot', 'LIKE', "%$search%")
                ->paginate(12);
            return view('frontend.product.shop')->with(compact('all_products'));
            }

        }elseif($search==NULL && $cat!=NULL){
            $all_products = Product::where('cat_id',$cat)->count();
            if($all_products=='0'){
                $all_products = Product::where('sub_cat_id',$cat)->paginate(12);
            }elseif($all_products!='0'){
                $all_products = Product::where('cat_id',$cat)->paginate(12);
            }
            return view('frontend.product.shop')->with(compact('all_products'));
        }

    }
}
