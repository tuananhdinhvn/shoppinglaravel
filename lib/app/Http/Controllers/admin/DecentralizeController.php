<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\UserModel;
use App\Http\Requests\AddUserRequest;

use App\Http\Requests\EditUserRequest;

class DecentralizeController extends Controller
{
    public function getUser(){
        $data['user_list'] = UserModel::where('phanquyen', '!=', 4)->get();
        return view('admin/user', $data);
    }

    public function addUser(){
        return view('admin/adduser');
    }
    public function postaddUser(AddUserRequest $request){
        $user               = new UserModel;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->phone        = $request->phone;
        $user->diachi       = $request->diachi;
        $user->phanquyen    = $request->phanquyen;
        $user->avatar       = 'avatar.png';
        $user->created_at   = Carbon::now();
        $user->updated_at   = Carbon::now();
        $user->save();
        return redirect()->intended('admin/users');
    }

    public function editUser($id){
        $data['user_item'] = UserModel::find($id);
        return view('admin/edituser', $data);
    }
    public function posteditUser(EditUserRequest $request, $id){
        $user               = UserModel::find($id);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->phone        = $request->phone;
        $user->diachi       = $request->diachi;
        $user->phanquyen    = $request->phanquyen;
        $user->updated_at   = Carbon::now();
        $user->save();
        return redirect()->intended('admin/users');
    }

    public function deleteUser($id){
        // User::destroy($id);
        return back();
    }
}
