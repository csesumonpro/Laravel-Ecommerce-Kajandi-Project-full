<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacter;
class ManufacturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function add_manufacturer(){
        return view('backend.manufacturer.add_manufacturer');
    }
    public function save_manufacturer(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:2',
        ]);
        $manufacturer = new Manufacter();
        $manufacturer->name = $request->name;
        $manufacturer->save();
        return redirect('/add-manufacturer')->with('message_success','Manufacturer Added Successfully');
    }
    public function manufacturer_list(){
        $manufacturer_list = Manufacter::all();
        return view('backend.manufacturer.manufacturer_list')->with(compact('manufacturer_list'));
    }
    public function manufacturer_delete($id){
        $manufacturer = Manufacter::where('id',$id)->first();
        $manufacturer->delete();
        return redirect('/manufacturer-list')->with('message_success','Manufacturer Deleted Successfully');
    }
    public function manufacturer_edit($id){
        $manufacturer_by_id = Manufacter::where('id',$id)->first();
        return view('backend.manufacturer.edit_manufacturer')->with(compact('manufacturer_by_id'));
    }
    public function manufacturer_update(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:2',
        ]);
        $manufacturer = Manufacter::where('id',$request->id)->first();
        $manufacturer->name = $request->name;
        $manufacturer->save();
        return redirect('/edit-manufacturer/'.$manufacturer->id)->with('message_success','Manufacturer Updated Successfully');
    }
}
