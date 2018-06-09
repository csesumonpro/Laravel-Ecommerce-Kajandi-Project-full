<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use App\RoleSeller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/seller/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegPage(){
      return view('seller.Auth.registration');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

	        'email' => 'required|string|email|max:100|unique:users',
          'vendorname' => 'required|string|max:25|min:2',
          'address' => 'required|string|min:5',
          'country' => 'required|string|max:255|min:2',
          'contactname' => 'required|string|max:25|min:2',
	        'password' => 'required|string|min:6|confirmed|max:19',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Seller
     */
    protected function create(array $data)
    {


        return Seller::create([
	        'email' => $data['email'],
	        'vendorname' => $data['vendorname'],
          'address' => $data['address'],
          'country' => $data['country'],
          'contactname' => $data['contactname'],
	        'password' => Hash::make($data['password']),

        ]);


    }
}
