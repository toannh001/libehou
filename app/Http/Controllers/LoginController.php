<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $messages= [
            'username.required' => ':attribute Không được bỏ trống',
            'password.required' => ':attribute Không được bỏ trống',
        ];
        $validator = Validator::make($request->all(), [
            'username'     => 'required',
            'password' => 'required',
        ], $messages);
        if($validator->fails()){
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $username=$request->username;
            $password=$request->password;
            if (Auth::attempt(['username' => $username, 'password' => $password])) {
			    return redirect('/admin');
            }else{
                return redirect()->back()
                        ->with('error', 'tài khoản hoặc mật khẩu không đúng');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
