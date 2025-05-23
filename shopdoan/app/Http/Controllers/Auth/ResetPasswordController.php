<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordEmail;
use App\Http\Requests\UserRequestNewPassword;

class ResetPasswordController extends Controller
{
    public function getEmailReset(){
        return view('auth.passwords.email');
    }
    public function checkEmailResetPassword(Request $request){
    //  dd($request->email);
        $account=DB::table('users')->where('email',$request->email)->first();
        if($account){
            //gủi mail
            $token=Hash::make($account->email.$account->id);
            DB::table('password_resets')
            ->insert([
                'email'=>$account->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            $link=route('get.new_password',['email'=>$account->email,'_token'=>$token]);
            Mail::to($account->email)->send(new ResetPasswordEmail($link));

            return redirect()->to('/');
        }
        return redirect()->back();
     }
     public function newPassword(Request $request){
        $token=$request->_token;
        //check tồn tại token
        $checkToken=DB::table('password_resets')
        ->where('token',$token)
        ->first();
        if(!$checkToken) return redirect()->to('/');
        $now =Carbon::now();
        if($now->diffInMinutes($checkToken->created_at)>3){
            DB::table('password_resets')->where('email',$request->email)->delete();
            return redirect()->to('/');
        }
        return view('auth.passwords.reset');
     }
     public function savePassword(UserRequestNewPassword $request){
        // dd($request->password);
        $password =$request->password;
        $data['password']=Hash::make($password);
        $email  =$request->email;
        if(!$email) return redirect()->to('/');
        DB::table('users')->where('email',$email)
        ->update($data);
        DB::table('password_resets')->where('email',$email)->delete();
        return redirect()->route('get.login');
     }
}
