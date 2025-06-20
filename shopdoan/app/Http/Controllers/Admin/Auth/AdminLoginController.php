<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    public function getLoginAdmin(){
        return view('admin.auth.login');
    }
    public function postLoginAdmin( Request $request){
       
        if (Auth::guard('admins')->attempt(['email'=>$request->email,'password'=>$request->password])) {
           
            return redirect()->intended('/api-admin');
        }
        return redirect()->back();
    }
    public function getLogoutAdmin(){
        Auth::guard('admins')->logout();
        return redirect()->to('/');
    }
}
