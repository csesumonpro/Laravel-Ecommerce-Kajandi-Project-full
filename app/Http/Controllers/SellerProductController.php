<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SellerProduct;
use DB;
use App\Manufacter;
use Auth;

class SellerProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:seller');
        $this->middleware('seller');
    }

    public function index()
    {
      return view('seller.product.add_product');
    }


    public function postSellerProduct(Request $request)
    {
      $request->validate([
         'name' => 'required|max:255|min:2',
         'description' => 'required',
         'price' => 'required',



     ]);

     $file = $request->file( 'image' );
     if($file!=NULL) {
         $name        = time() . '_' . $file->getClientOriginalName();
         $upload_path = 'public/seller/product_img/';
         $file->move( $upload_path, $name );
         $seller_product_image = $upload_path . $name;

     }else{
         $seller_product_image = '';
     }

      $product = new SellerProduct();
      $product->seller_id = $request->seller_id;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->manufacturer_id = $request->manufacturer_id;
      $product->model_id = $request->model_id;
      $product->partnumber = $request->partnumber;
      $product->unit = $request->unit;
      $product->weight = $request->weight;
      $product->length = $request->length;
      $product->category = $request->category;
      $product->subscategory = $request->subscategory;
      $product->availability = $request->availability;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->pricewithin15days = $request->pricewithin15days;
      $product->pricewithin30days = $request->pricewithin30days;
      $product->condition_id = $request->condition_id;
      $product->source_id = $request->source_id;
      $product->payondelivery = $request->payondelivery;
      $product->deliveryratestate = $request->deliveryratestate;
      $product->deliveryrateoutstatewithgeo = $request->deliveryrateoutstatewithgeo;
      $product->deliveryrateoutsidegeo = $request->deliveryrateoutsidegeo;
      $product->addon_id = $request->addon_id;
      $product->strengthofmaterial = $request->strengthofmaterial;
      $product->addon_type = $request->addon_type;
      $product->color = $request->color;
      $product->remark = $request->remark;
      $product->image = $seller_product_image;
      $product->save();

      return back()->with('message_success', 'Seller Product Added Succesfully');
    }

    public function productList()
    {
      $sellerProduct = SellerProduct::All()->where('seller_id', Auth::id());
      return view('seller.product.product_list')->with(compact('sellerProduct'));
    }

    public function editProduct($id)
    {
      $editpro = SellerProduct::find($id);
      $menuFact = DB::table('manufacters')->where('id', $editpro->manufacturer_id)->first();
      $proModel = DB::table('product_models')->where('id', $editpro->model_id)->first();
      $procat = DB::table('categories')->where('id', $editpro->category)->first();
      $prosubcat = DB::table('subcategories')->where('id', $editpro->category)->first();
      return view('seller.product.edit_product', compact('editpro','menuFact','proModel','procat','prosubcat'));
    }

    public function deleteProduct($id)
    {
      $sellerPro = SellerProduct::find($id);
      $sellerPro->delete();

      return back();
    }
}
