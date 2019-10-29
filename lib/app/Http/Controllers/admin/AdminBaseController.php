<?php

namespace App\Http\Controllers\admin;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBaseController extends Controller
{
    //Login
    public function getLogin(){
        return view('admin/login');
    }
    public function postLogin(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if ($request->remember='remember') {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($arr, $remember)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
    }


    //Logout
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('admin');
    }
}
