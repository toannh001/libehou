<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //

    public function getList(Request $request){
        if ($request->has('username')) {//Nếu là tìm kiếm
            $username=$request->username;
            $email=$request->email;
            $fullname=$request->fullname;
            $users=User::where( 'username', 'LIKE', '%' . $username . '%' )->Where ( 'email', 'LIKE', '%' . $email . '%' )->Where ( 'fullname', 'LIKE', '%' . $fullname . '%' )->paginate(5);
            return view('/admin/user/user',compact('users'));
        }else{
            //$users = DB::table('Users')->paginate(5);//goi du lieu va phan trang
            $users = User::paginate(5);
            //dd($users);       
            return view('/admin/user/user',compact('users'));
        }
    }
    public function add (Request $request){
        //C1: Sử dụng Validate
        /*
        $messages= [
            'username.required' => ':attribute Không được bỏ trống',
        ];
        $request->validate([
            'username' => 'required'
        ],$messages);
        */
        $messages= [
            'username.required' => ':attribute Không được bỏ trống',
            'username.unique' => ':attribute đã tồn tại',
            'password.required' => ':attribute Không được bỏ trống',
        ];
        $validator = Validator::make($request->all(), [
            'username'     => 'required|unique:users',
            'password' => 'required|min:5|',
            'email'    => 'required|email|unique:users',
        ], $messages);
        if($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $User=new User();
            $User->username=$request->input('username');
            $User->password=Hash::make($request->input('password'));
            $User->fullname=$request->input('fullname');
            $User->dob=$request->input('dob');
            $User->phone=$request->input('phone');
            $User->email=$request->input('email');
            $User->clazz=$request->input('lop');
            $User->address=$request->input('address');
            $User->save();
            return redirect('/admin/user/add')
                        ->with('success', 'User '.$request->input('username').' vừa được thêm vào !');
        }
    }
    public function edit($id){
        $users=User::where('id', $id)->get();
        return view('/admin/user/edit',compact('users'));
    }
    public function Update($id,Request $request){


        $User=User::find($id);
        $User->username=$request->input('username');
        $User->password=Hash::make($request->input('password'));
        $User->fullname=$request->input('fullname');
        $User->dob=$request->input('dob');
        $User->phone=$request->input('phone');
        $User->email=$request->input('email');
        $User->clazz=$request->input('lop');
        $User->address=$request->input('address');
        $User->save();
        return redirect()->back()
                        ->with('success', 'User '.$request->input('username').' vừa được cập nhật !');
    }
    public function delete($id){
        $result = User::find($id);
    	$result ->delete();
        return redirect('/admin/user')
                        ->with('delete', 'Xóa thành công');
    }
    public function viewDetail(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $User = User::find($request->id);
            if ($User) {                
                    $output .= $User->username;
                    $output .= $User->email;
                    $output .= $User->fullname;                
            }
            
            return response($User);
        }
        else{
            return "not found";
        } 
        //return response()->json(['success'=>'Data is successfully added']);
    }
    public function search($request){
        $username=$request->username;
        $email=$request->email;
        $fullname=$request->fullname;
        $users=User::where( 'username', 'LIKE', '%' . $username . '%' )->Where ( 'email', 'LIKE', '%' . $email . '%' )->Where ( 'fullname', 'LIKE', '%' . $fullname . '%' )->paginate(5);
        return view('/admin/user/user',compact('users'));
    }
}
