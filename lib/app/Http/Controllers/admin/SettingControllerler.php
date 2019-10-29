<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\SettingModel;
use App\Http\Requests\SettingRequest;

class SettingControllerler extends Controller
{
    public function getSetting(){
        $data['setting_item'] = SettingModel::find(1);
        return view('admin/setting', $data);
    }
    public function postgetSetting(SettingRequest $request){
        $setting                = SettingModel::find(1);
        $setting->st_tencongty  = $request->st_tencongty;
        $setting->st_email      = $request->st_email;
        $setting->st_hotline    = $request->st_hotline;
        $setting->st_diachi     = $request->st_diachi;

        // if ($request->hasFile('st_logohead')) {
        //     File::delete('public/upload/info/'.$setting->st_logohead);

        //     $file                   = $request->file('st_logohead');
        //     $image_name             = $file->getClientOriginalName();
        //     $image_save_name        = time().$image_name;
        //     $setting->st_logohead   = $image_save_name;
        //     $file->move('public/upload/info/', $image_save_name);
        // }


        $setting->st_codehead   = $request->st_codehead;
        $setting->st_codebody   = $request->st_codebody;
        $setting->st_codefoot   = $request->st_codefoot;
        $setting->st_title      = $request->st_title;
        $setting->st_mota       = $request->st_mota;
        $setting->updated_at    = Carbon::now();
        $setting->save();
        return back();
    }
}
