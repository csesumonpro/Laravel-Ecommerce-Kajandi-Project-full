<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use DB;
use Session;
class ProductController extends Controller {

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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
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
        $file = $request->file( 'product_image' );
        if($file!=NULL){
            $allowedfileExtension=['jpeg','jpg','png','bmp','gif','svg'];
            $files = $request->file('product_image');
            foreach($files as $file){
                $name=time().'_'.$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $upload_path = 'public/ProductAdditionalImage/';
                    $file->move($upload_path,$name);
                    $image_url = $upload_path.$name;
                    $images[]=$image_url;
                }else{
                    return redirect('/add-product')->with('message_error','Product Additional Image Invalid file or image format');
                }
            }
        }else{
            $images[]="";
        }

        foreach ($request->accessories_id as $access){
        $acce[] = $access;
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
        $product->product_image = implode("|",$images);
        $product->accessories_id = implode('|',$acce);
        $product->save();
        $product_id =  $product->id;
        Session::put('product_id',$product_id);
//        $acceories = $request->accessories_id;
//        if($acceories!=NULL) {
//            for ($idx = 0; $idx < count($acceories); $idx++) {
//                $acc = new Accessories();
//                $acc->accessories_id = $request['accessories_id'][$idx];
//                $acc->product_id = Session::get('product_id');
//                $acc->save();
//            }
//        }
        return redirect('/add-product')->with('message_success','product Added Successfully');
    }
    public function product_list(){
        $product_list = Product::all()->sortByDesc('id');
        return view('backend.product.product_list')->with(compact('product_list'));
    }
    public function product_delete($id)
    {
        $product = Product::where('id',$id)->first();
        $all_images = explode('|',$product->product_image);
        if ( $product->image != null ) {
            unlink( $product->image );
        }
        if( $product->product_image != null ){
            foreach ( $all_images as $image ) {
                unlink( $image );
            }
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
        if ($request->accessories_id!=NULL) {
            foreach ($request->accessories_id as $access) {
                $acce[] = $access;
            }
        }else{
            $acce[]="";
        }
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

        $images=array();
        $all_image = explode('|',$product->product_image);
        if( $request->file( 'product_image')!=NULL ){
            if ($product->product_image!=NUll) {
                foreach ($all_image as $image) {
                    unlink($image);
                }
            }
            if ( $request->hasFile( 'product_image' ) ) {
                $allowedfileExtension = [ 'jpeg', 'jpg', 'png', 'bmp', 'gif', 'svg' ];
                $files                = $request->file( 'product_image' );
                foreach ( $files as $file ) {
                    $name      = time() . '_' . $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check     = in_array( $extension, $allowedfileExtension );
                    if ( $check ) {
                        $upload_path = 'public/ProductAdditionalImage/';
                        $file->move( $upload_path, $name );
                        $image_url = $upload_path . $name;
                        $images[]  = $image_url;
                    } else {
                        return redirect( '/edit-product/'.$product->id )->with( 'message_error', 'Additional Image file or format invalid ...!' );
                    }
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
                $product->keyword = $request->keyword;
                $product->special_feature = $request->special_feature;
                $product->more_description = $request->more_description;
                $product->more_specification = $request->more_specification;
                $product->image = $product_image;
                $product->product_image = implode("|",$images);
                $product->accessories_id = implode('|',$acce);
                $product->save();
            }
        }else{
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
            $product->accessories_id = implode('|',$acce);
            $product->image = $product_image;
            $img = $product->product_image;
            $product->product_image = $img;
            $product->save();

        }

        return redirect('/edit-product/'.$product->id)->with('message_success','product Updated Successfully');
    }

}
