<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Material;
use App\Product;
use App\Menu;

class ProductController extends Controller {

	public function add_product(){
		$all_category = Category::all();
		$all_brand = Brand::all();
		$all_material = Material::all();
		$all_menu = Menu::all();
		return view('backend.product.add_product')
			->with(compact('all_category','all_brand','all_material','all_menu'));
	}
	public function save_product(Request $request){

		$validate_data = $request->validate([
			'product_name' => 'required|max:255|min:2',
			'product_desc' => 'required',
			'product_price' => 'required',
			'product_qty' => 'required',
			'category_id' => 'required',
			'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required'
		]);

		$file = $request->file( 'product_image' );
		if($file!=NULL) {
			$name        = time() . '_' . $file->getClientOriginalName();
			$upload_path = 'public/ProductImage/';
			$file->move( $upload_path, $name );
			$product_image = $upload_path . $name;

		}else{
			$product_image = '';
		}

		$product = new Product();
		$product->product_name = $request->product_name;
		$product->product_desc = $request->product_desc;
		$product->product_info = $request->product_info;
		$product->category_id = $request->category_id;
		$product->menu_id = $request->menu_id;
		$product->brand_id = $request->brand_id;
		$product->material_id = $request->material_id;
		$product->xs = $request->xs;
		$product->s = $request->s;
		$product->m = $request->m;
		$product->l = $request->l;
		$product->xl = $request->xl;
		$product->product_availability = $request->product_availability;
		$product->product_price = $request->product_price;
		$product->product_qty = $request->product_qty;
		$product->new = $request->new;
		$product->hot = $request->hot;
		$product->sale = $request->sale;
		$product->slider = $request->slider;
		$product->nfb = $request->nfb;
		$product->product_image = $product_image;
		$product->save();

		return redirect('/add-product')->with('message_success','Product Added Successfully');
	}
	public function product_list(){
		$product_list = Product::all()->sortByDesc('id');
		return view('backend.product.product_list')->with(compact('product_list'));
	}
	public function product_delete($id){
		$product = Product::where('id',$id)->first();
		if ( $product->product_image != null ) {
			unlink( $product->product_image );
		}
		$product->delete();
		return redirect('/product-list')->with('message_success','Product Deleted Successfully');
	}
	public function product_edit($id){
		$all_category = Category::all();
		$all_brand = Brand::all();
		$all_material = Material::all();
		$all_menu = Menu::all();
		$product_by_id = Product::where('id',$id)->first();
		return view('backend.product.edit_product')->with(compact('product_by_id','all_category','all_brand','all_material','all_menu'));
	}
	public function product_update(Request $request){
		$product = Product::where('id',$request->id)->first();
		$validate_data = $request->validate([
			'product_name' => 'required|max:255|min:2',
			'product_desc' => 'required',
			'product_price' => 'required',
			'product_qty' => 'required',
			'category_id' => 'required',
			'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);

		$file = $request->file( 'product_image' );
		if($file!=NULL) {
			unlink( $product->product_image );
			$name        = time() . '_' . $file->getClientOriginalName();
			$upload_path = 'public/ProductImage/';
			$file->move( $upload_path, $name );
			$product_image = $upload_path . $name;
		}else{
			$product_image = $product->product_image;
		}


		$product->product_name = $request->product_name;
		$product->product_desc = $request->product_desc;
		$product->product_info = $request->product_info;
		$product->category_id = $request->category_id;
		$product->menu_id = $request->menu_id;
		$product->brand_id = $request->brand_id;
		$product->material_id = $request->material_id;
		$product->xs = $request->xs;
		$product->s = $request->s;
		$product->m = $request->m;
		$product->l = $request->l;
		$product->xl = $request->xl;
		$product->product_availability = $request->product_availability;
		$product->product_price = $request->product_price;
		$product->product_qty = $request->product_qty;
		$product->new = $request->new;
		$product->hot = $request->hot;
		$product->sale = $request->sale;
		$product->slider = $request->slider;
		$product->nfb = $request->nfb;
		$product->product_image = $product_image;
		$product->save();

		return redirect('/edit-product/'.$product->id)->with('message_success','Product Updated Successfully');
	}
//	FrontEnd Function Start
    public function product_details($id){
		$product_by_id = Product::where('id',$id)->first();
		return view('FrontEnd.Product.product_single')->with(compact('product_by_id'));
    }
    public function product_by_menu($id){
        $all_product = Product::where('menu_id',$id)->paginate(12);
        return view('FrontEnd.Product.shop_content')->with(compact('all_product'));
    }
    public function product_by_category($id){
        $all_product = Product::where('category_id',$id)->paginate(12);
        return view('FrontEnd.Product.shop_content')->with(compact('all_product'));
    }
    public function product_by_brand($id){
        $all_product = Product::where('brand_id',$id)->paginate(12);
        return view('FrontEnd.Product.shop_content')->with(compact('all_product'));
    }
    public function product_by_material($id){
        $all_product = Product::where('material_id',$id)->paginate(12);
        return view('FrontEnd.Product.shop_content')->with(compact('all_product'));
    }

//	FrontEnd Function End



}
