<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

use App\model\ProductModel;

use App\model\LayoutProductModel;

class SearchController extends Controller
{
    public function getSearch(Request $request){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['product_admin']  = LayoutProductModel::find(1);

        $result                 = $request->keyword;
        $query                  = str_replace(' ', '%', $result);
        $data['search_result']  = ProductModel::where('pro_ten', 'like', '%'.$query.'%')->paginate(4);
        $data['keyword']        = $result;
        return view('frontend.search', $data);
    }
}
