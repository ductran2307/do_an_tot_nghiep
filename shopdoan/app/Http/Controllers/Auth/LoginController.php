<?php

namespace App\Http\Controllers\Auth;
// use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\RequestLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        // $this->middleware('auth')->only('logout');
    }
    public function getFormLogin(){
        $title_page   ="Đăng nhập";
        return view('auth.login',compact('title_page'));
    }
    /**
 * @param \Illuminate\Http\Request $request
 */
    public function postLogin(RequestLogin $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->to('/');
    }
}
