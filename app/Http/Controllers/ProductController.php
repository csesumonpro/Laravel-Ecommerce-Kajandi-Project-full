<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use DB;
class productController extends Controller {

  public function __construct()
  {
      $this->middleware('auth:admin');
      $this->middleware('admin');
  }
  
    public function add_product(){
        return view('backend.product.add_product_copy');
    }
    public function save_product(Request $request){

         $request->validate([
            'name' => 'required|max:255|min:2',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'cat_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required'
        ]);

        $file = $request->file( 'image' );
        if($file!=NULL) {
            $name        = time() . '_' . $file->getClientOriginalName();
            $upload_path = 'public/productImage/';
            $file->move( $upload_path, $name );
            $product_image = $upload_path . $name;

        }else{
            $product_image = '';
        }

        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->cat_id = $request->cat_id;
        $product->sub_cat_id = $request->sub_cat_id;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->model_id = $request->model_id;
        $product->availability = $request->availability;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->unit = $request->unit;
        $product->weight = $request->weight;
        $product->length = $request->length;
        $product->partnumber = $request->partnumber;
        $product->slider = $request->slider;
        $product->hot = $request->hot;
        $product->stuff_pick = $request->stuff_pick;
        $product->discount_price = $request->discount_price;
        $product->keyword = $request->keyword;
        $product->special_feature = $request->special_feature;
        $product->more_description = $request->more_description;
        $product->more_specification = $request->more_specification;
        $product->image = $product_image;
        $product->save();

        $acceories = $request->accessories_id;
        if($acceories!=NULL) {
            for ($idx = 0; $idx < count($acceories); $idx++) {
                $acc = new Accessories();
                $acc->accessories_id = $request['accessories_id'][$idx];
                $acc->product_id = $request->product_id;
                $acc->save();
            }
        }

        if($request->hasFile('product_image')) {
            foreach($request->file('product_image') as $image) {
                $destinationPath = 'public/ProductAdditionalImage/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $img_url = $destinationPath.$filename;
                $pro_image = new ProductImage();
                $pro_image->product_image = $img_url;
                $pro_image->product_id = $request->product_id;
                $pro_image->save();
            }
        }

        return redirect('/add-product')->with('message_success','product Added Successfully');
    }
    public function product_list(){
        $product_list = Product::all()->sortByDesc('id');
        return view('backend.product.product_list')->with(compact('product_list'));
    }
    public function product_delete($id)
    {

        $p_image = ProductImage::where('product_id', $id)->get();
        if ($p_image != NULL){
            foreach ($p_image as $pro_image) {
                if ($pro_image->product_image != null) {
                    unlink($pro_image->product_image);
                }
                $pro_image->delete();
            }
         }
        $acc = Accessories::where('product_id',$id)->first();
        if($acc!=NULL) {
            $acc->delete();
        }

        $product = Product::where('id',$id)->first();
        if ( $product->image != null ) {
            unlink( $product->image );
        }
        $product->delete();
        return redirect('/product-list')->with('message_success','product Deleted Successfully');
    }
    public function product_edit($id){

        $product_by_id = Product::where('id',$id)->first();
        return view('backend.product.edit_product_copy')->with(compact('product_by_id','all_category','all_brand','all_material','all_menu'));
    }
    public function product_view($id){
        $product_by_id = Product::where('id',$id)->first();
        return view('backend.product.view_product')->with(compact('product_by_id','all_category','all_brand','all_material','all_menu'));
    }
    public function product_update(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:2',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'cat_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $product = Product::where('id',$request->id)->first();
        $file = $request->file( 'image' );
        if($file!=NULL) {
            unlink( $product->image );
            $name        = time() . '_' . $file->getClientOriginalName();
            $upload_path = 'public/productImage/';
            $file->move( $upload_path, $name );
            $product_image = $upload_path . $name;
        }else{
            $product_image = $product->image;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->cat_id = $request->cat_id;
        $product->sub_cat_id = $request->sub_cat_id;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->model_id = $request->model_id;
        $product->availability = $request->availability;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->unit = $request->unit;
        $product->weight = $request->weight;
        $product->length = $request->length;
        $product->partnumber = $request->partnumber;
        $product->slider = $request->slider;
        $product->hot = $request->hot;
        $product->stuff_pick = $request->stuff_pick;
        $product->discount_price = $request->discount_price;
        $product->image = $product_image;
        $product->save();

        return redirect('/edit-product/'.$product->id)->with('message_success','product Updated Successfully');
    }
//	FrontEnd Function Start
///
    public function product_details($id){
        $product_by_id = Product::find($id);
        return view('frontend.product.product_single')->with(compact('product_by_id'));
    }
//    public function product_by_menu($id){
//        $all_product = product::where('menu_id',$id)->paginate(12);
//        return view('FrontEnd.product.shop_content')->with(compact('all_product'));
//    }
//    public function product_by_category($id){
//        $all_product = product::where('category_id',$id)->paginate(12);
//        return view('FrontEnd.product.shop_content')->with(compact('all_product'));
//    }
//    public function product_by_brand($id){
//        $all_product = product::where('brand_id',$id)->paginate(12);
//        return view('FrontEnd.product.shop_content')->with(compact('all_product'));
//    }
//    public function product_by_material($id){
//        $all_product = product::where('material_id',$id)->paginate(12);
//        return view('FrontEnd.product.shop_content')->with(compact('all_product'));
//    }
//

//	FrontEnd Function End



}
