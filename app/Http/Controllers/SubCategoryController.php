<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
class SubCategoryController extends Controller
{
    public function add_category(){
        return view('backend.subcategory.add_category');
    }
    public function save_category(Request $request){

        $request->validate([
            'sub_cat_desc' => 'required|max:255|min:2',
            'sub_cat_name' => 'required|max:255|min:2',
            'cat_id' => 'required',
        ]);

        $category = new SubCategory();
        $category->sub_cat_desc = $request->sub_cat_desc;
        $category->cat_id = $request->cat_id;
        $category->sub_cat_name = $request->sub_cat_name;

        $category->save();
        return redirect('/add-sub-category')->with('message_success','SubCategory Added Successfully');
    }
    public function category_list(){
        $sub_category_list = SubCategory::all();
        return view('backend.subcategory.category_list')->with(compact('sub_category_list'));
    }
    public function category_delete($id){
        $category = SubCategory::where('id',$id)->first();
        $category->delete();
        return redirect('/sub-category-list')->with('message_success','SubCategory Deleted Successfully');
    }
    public function category_edit($id){
        $category_by_id = SubCategory::where('id',$id)->first();
        return view('backend.subcategory.edit_category')->with(compact('category_by_id'));
    }
    public function category_update(Request $request){

        $request->validate([
            'sub_cat_desc' => 'required|max:255|min:2',
            'sub_cat_name' => 'required|max:255|min:2',
            'cat_id' => 'required',
        ]);

        $category = SubCategory::where('id',$request->id)->first();
        $category->sub_cat_desc = $request->sub_cat_desc;
        $category->cat_id = $request->cat_id;
        $category->sub_cat_name = $request->sub_cat_name;
        $category->save();
        return redirect('/edit-sub-category/'.$category->id)->with('message_success','SubCategory Updated Successfully');
    }
}
