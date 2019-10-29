<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

use App\model\ProductModel;

class CartController extends Controller
{
    public function addCart($id){
        $product = ProductModel::find($id);
        Cart::add([
            'id' => $id, 
            'name' => $product->pro_ten, 
            'qty' => 1, 
            'price' => $product->pro_giaban, 
            'options' => [
                'img' => $product->pro_thumb, 
                'pro_slug' => $product->pro_slug, 
                'pro_id' => $product->pro_id
                ]]);
        return back();
    }

    public function deleteCart($rowid){
        if ($rowid=='all') {
            Cart::destroy();
        } else {
            Cart::remove($rowid);
        }
        
        return back();
    }

    public function showCart(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::subtotal(0,3);
        return view('frontend.showcart', $data);
    }
}
