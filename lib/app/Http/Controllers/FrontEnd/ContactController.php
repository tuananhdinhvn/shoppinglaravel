<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

use App\model\LayoutContactModel;

class ContactController extends Controller
{
    public function getContact(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['contact_item']   = LayoutContactModel::find(1);
        
        return view('frontend.contact', $data);
    }
}
