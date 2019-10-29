<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\UserModel;

class CustomerController extends Controller
{
    public function getCustomer(){
        // $data['customer_list'] = Customer::all();
        $data['customer_list'] = UserModel::where('phanquyen', '=', 4)->get();
        return view('admin/customer', $data);
    }
    public function getCustomerDetail(){
        return view('admin/customerdetail');
    }
    public function postCustomerDetail($id){

    }
}
