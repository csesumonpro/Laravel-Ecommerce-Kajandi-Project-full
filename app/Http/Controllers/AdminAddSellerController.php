<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use DB;

class AdminAddSellerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
      $this->middleware('admin');
  }

  public function addVendor()
  {
    return view('backend.seller.add_seller');
  }

  public function storeVendor(Request $request)
  {

    $request->validate([
       'vendorname' => 'required|max:255|min:5',
       'vendor_type' => 'required|max:255|min:1',
       'producttype' => 'required|max:255|min:1',
       'location' => 'required|max:255|min:1',
       'country' => 'required|max:255|min:1',
       'email' => 'required|string|email|max:100|unique:sellers',
       'address' => 'required|max:500|min:7',
       'url' => 'required|max:255|min:2',
       'cac' => 'required|max:255|min:2',
       'workforce' => 'required|max:255|min:2',
       'yearsofexp' => 'required|max:255|min:2',
       'ratings' => 'required|max:255|min:1',
       'contactname' => 'required|max:255|min:5',
       'contactphone' => 'required|max:15|min:5',
       'contactemail' => 'required',
       'chairmanname' => 'required',
       'chairmanphone' => 'required',
       'chairmanemail' => 'required',
       'password' => 'required|string|min:6|confirmed|max:19',
   ]);

    $sv = new Seller();
    $sv->admin_id = $request->admin_id;
    $sv->vendorname = $request->vendorname;
    $sv->vendor_type = $request->vendor_type;
    $sv->producttype = $request->producttype;
    $sv->location = $request->location;
    $sv->country = $request->country;
    $sv->email = $request->email;
    $sv->address = $request->address;
    $sv->url = $request->url;
    $sv->cac = $request->cac;
    $sv->workforce = $request->workforce;
    $sv->yearsofexp = $request->yearsofexp;
    $sv->ratings = $request->ratings;
    $sv->contactname = $request->contactname;
    $sv->contactphone = $request->contactphone;
    $sv->contactemail = $request->contactemail;
    $sv->chairmanname = $request->chairmanname;
    $sv->chairmanphone = $request->chairmanphone;
    $sv->chairmanemail = $request->chairmanemail;
    $sv->password = bcrypt($request->password);
    $sv->acStatus = 1;
    $sv->save();
    return back()->with('message_success', 'Vendor Added Succesfully');
  }

  public function vendorList()
  {
    $all_vendor = Seller::where('acStatus', 0)->get();
    return view('backend.seller.seller_list',compact('all_vendor'));
  }


  public function editVendor($id)
  {
    $editVendor = Seller::find($id);
    return view('backend.seller.edit_seller',compact('editVendor'));
  }

  public function updateVendor(Request $request, $id)
  {
    $request->validate([
       'vendorname' => 'required|max:255|min:5',
       'vendor_type' => 'required|max:255|min:1',
       'producttype' => 'required|max:255|min:1',
       'location' => 'required|max:255|min:1',

       'address' => 'required|max:500|min:7',
       'url' => 'required|max:255|min:2',
       'cac' => 'required|max:255|min:2',
       'workforce' => 'required|max:255|min:2',
       'yearsofexp' => 'required|max:255|min:2',
       'ratings' => 'required|max:255|min:1',
       'contactname' => 'required|max:255|min:5',
       'contactphone' => 'required|max:15|min:5',
       'contactemail' => 'required',
       'chairmanname' => 'required',
       'chairmanphone' => 'required',
       'chairmanemail' => 'required',

   ]);

   $sv = Seller::find($id);
   $sv->admin_id = $request->admin_id;
   $sv->vendorname = $request->vendorname;
   $sv->vendor_type = $request->vendor_type;
   $sv->producttype = $request->producttype;
   $sv->location = $request->location;

   $sv->address = $request->address;
   $sv->url = $request->url;
   $sv->cac = $request->cac;
   $sv->workforce = $request->workforce;
   $sv->yearsofexp = $request->yearsofexp;
   $sv->ratings = $request->ratings;
   $sv->contactname = $request->contactname;
   $sv->contactphone = $request->contactphone;
   $sv->contactemail = $request->contactemail;
   $sv->chairmanname = $request->chairmanname;
   $sv->chairmanphone = $request->chairmanphone;
   $sv->chairmanemail = $request->chairmanemail;

   $sv->save();
   return back()->with('message_success', 'Vendor updated Succesfully');


  }

  public function deleteVendor($id)
  {
    $sv = Seller::find($id);
    $sv->delete();
    return back()->with('message_success', 'Vendor Deleted Succesfully');
  }

  public function vendorBlockedList()
  {
    $all_vendor = Seller::All()->where('acStatus', 1);

    return view('backend.seller.blocked_list',compact('all_vendor'));
  }

public function blockVendor($id)
{
  $bsv = DB::table('sellers')
          ->where('id', $id)
          ->update([
            'acStatus' => 1,
          ]);
  return back()->with('message_success', 'Vendor Blocked Succesfully');
}

public function unblockVendor($id)
{
$ubv = DB::table('sellers')
        ->where('id', $id)
        ->update([
          'acStatus' => 0,
        ]);
return back()->with('message_success', 'Vendor Unblocked/Active Succesfully');
}



}
