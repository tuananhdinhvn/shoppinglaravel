<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

class IndexController extends Controller
{
    public function getIndex(){
        // $data['cart_items']     = Cart::getContent();
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        return view('frontend.home', $data);
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }


}
