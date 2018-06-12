<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function add_category(){
        return view('backend.category.add_category');
    }
    public function save_category(Request $request){
         $request->validate([
            'cat_title' => 'required|max:255|min:2',
            'cat_name' => 'required|max:255|min:2',
            'cat_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required'
        ]);
        $file = $request->file('cat_image');
        if($file!=NULL) {
            $name        = time() . '_' . $file->getClientOriginalName();
            $upload_path = 'public/CategoryImage/';
            $file->move( $upload_path, $name );
            $cat_image = $upload_path . $name;

        }else{
            $cat_image = '';
        }

        $category = new Category();
        $category->cat_title = $request->cat_title;
        $category->cat_name = $request->cat_name;
        $category->cat_image = $cat_image;
        $category->cat_major = $request->cat_major;
        $category->save();
        return redirect('/add-category')->with('message_success','Category Added Successfully');
    }
    public function category_list(){
        $category_list = Category::all();
        return view('backend.category.category_list')->with(compact('category_list'));
    }
    public function category_delete($id){
        $category = Category::where('id',$id)->first();
        if ( $category->cat_image != null ) {
            unlink( $category->cat_image );
        }
        $category->delete();
        return redirect('/category-list')->with('message_success','Category Deleted Successfully');
    }
    public function category_edit($id){
        $category_by_id = Category::where('id',$id)->first();
        return view('backend.category.edit_category')->with(compact('category_by_id'));
    }
    public function category_update(Request $request){

        $request->validate([
            'cat_title' => 'required|max:255|min:2',
            'cat_name' => 'required|max:255|min:2',
            'cat_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $category = Category::where('id',$request->id)->first();
        $file = $request->file( 'cat_image' );
        if($file!=NULL) {
            unlink( $category->cat_image );
            $name        = time() . '_' . $file->getClientOriginalName();
            $upload_path = 'public/CategoryImage/';
            $file->move( $upload_path, $name );
            $cat_image = $upload_path . $name;
        }else{
            $cat_image = $category->cat_image;
        }

        $category->cat_title = $request->cat_title;
        $category->cat_name = $request->cat_name;
        $category->cat_image = $cat_image;
        $category->cat_major = $request->cat_major;
        $category->save();
        return redirect('/edit-category/'.$category->id)->with('message_success','Category Updated Successfully');
    }

}
