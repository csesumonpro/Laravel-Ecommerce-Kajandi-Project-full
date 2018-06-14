<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class CustomUserController extends Controller
{
    public function storeUser(Request $request)
    {
        $su = new User();
        $su->name = $request->name;
        $su->email = $request->email;
        $su->phone = $request->phone;
        $su->user_type = $request->user_type;
        $su->password = bcrypt($request->password);
        $su->save();
        return redirect()->route('custLog')->with('message_success', 'Registration Successfully Complete Please Login');
    }
}