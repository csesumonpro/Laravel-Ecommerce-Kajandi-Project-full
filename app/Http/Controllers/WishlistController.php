<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function my_wishlish(){
        return view('frontend.wishlist.my_wishlist');
    }
    public function add_to_wishlist($id){
        $wishlist = new Wishlist();
        $wishlist->product_id = $id;
        $wishlist->user_id = Auth::user()->id;
        $wishlist->save();
        return redirect('/wishlist');
    }
    public function remove_wishlist_item($id){
        $wishlist = Wishlist::find($id)->delete();
        return redirect('/wishlist');
    }
}
