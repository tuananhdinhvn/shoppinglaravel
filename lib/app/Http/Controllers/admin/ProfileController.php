<?php

namespace App\Http\Controllers\admin;

use Auth;
use File;
use Carbon\Carbon;

use App\model\UserModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function getProfile(){
        $data['user_id'] = UserModel::find(Auth::user()->id);
        return view('admin.profile', $data);
    }

    public function postProfile(ProfileRequest $request){
        $user               = UserModel::find(Auth::user()->id);

        if ($request->hasFile('avatar')) {
            File::delete('public/upload/info/'.$user->avatar);

            $file               = $request->file('avatar');
            $image_name         = $file->getClientOriginalName();
            $image_save_name    = time().$image_name;
            $user->avatar       = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        // $user->password     = bcrypt($request->password);
        $user->phone        = $request->phone;
        $user->diachi       = $request->diachi;
        $user->phanquyen    = $request->phanquyen;
        $user->updated_at   = Carbon::now();
        $user->save();

        return back();
    }
}
