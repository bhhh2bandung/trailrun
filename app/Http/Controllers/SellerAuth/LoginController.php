<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Http\Request;
use Alert;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;

class LoginController extends Controller
{
    //Where to redirect seller after login.
    protected $redirectTo = '/admin/dashboard';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard()
    {
      alert()->success('Berhasil login', 'Selamat datang admin');
      return Auth::guard('web_seller');
    }

    //Shows seller login form
    public function showLoginForm()
    {
       return view('seller.auth.login');
    }
}
