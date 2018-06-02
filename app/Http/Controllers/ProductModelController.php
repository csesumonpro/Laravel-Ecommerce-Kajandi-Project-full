<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;
class ProductModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function add_model(){
        return view('backend.model.add_model');
    }
    public function save_model(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:2',
        ]);
        $model = new ProductModel();
        $model->name = $request->name;
        $model->save();
        return redirect('/add-model')->with('message_success','ProductModel Added Successfully');
    }
    public function model_list(){
        $model_list = ProductModel::all();
        return view('backend.model.model_list')->with(compact('model_list'));
    }
    public function model_delete($id){
        $model = ProductModel::where('id',$id)->first();
        $model->delete();
        return redirect('/model-list')->with('message_success','ProductModel Deleted Successfully');
    }
    public function model_edit($id){
        $model_by_id = ProductModel::where('id',$id)->first();
        return view('backend.model.edit_model')->with(compact('model_by_id'));
    }
    public function model_update(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:2',
        ]);
        $model = ProductModel::where('id',$request->id)->first();
        $model->name = $request->name;
        $model->save();
        return redirect('/edit-model/'.$model->id)->with('message_success','ProductModel Updated Successfully');
    }
}
