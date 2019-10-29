<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Cart;

use App\model\ProductCategoryModel;
use App\model\ProductModel;

use App\model\LayoutProductModel;

class ProductController extends Controller
{
    public function getProduct(Request $request){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $data['product_admin']  = LayoutProductModel::find(1);

        
        
        if($request->price){
            $price = $request->price;
            switch($price)
            {
                case 1:
                    $data['product_list']   = ProductModel::where('pro_giaban', '<', 20000)->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 2:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [20000, 30000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 3:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [30000, 50000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 4:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [50000, 100000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 5:
                    $data['product_list']   = ProductModel::where('pro_giaban', '>', 100000)->orderBy('pro_id', 'desc')->paginate(12);
                break;

                default:
                    $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
                break;
            }
        } else {
            $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
        }

        if($request->search_sort){
            $search_sort = $request->search_sort;
            switch($search_sort)
            {
                case 'price-asc':
                    $data['product_list']   = ProductModel::orderBy('pro_giaban', 'asc')->paginate(12);
                break;

                case 'price-desc':
                    $data['product_list']   = ProductModel::orderBy('pro_giaban', 'desc')->paginate(12);
                break;

                case 'title-asc':
                    $data['product_list']   = ProductModel::orderBy('pro_ten', 'asc')->paginate(12);
                break;

                case 'title-desc':
                    $data['product_list']   = ProductModel::orderBy('pro_ten', 'desc')->paginate(12);
                break;

                case 'created-asc':
                    $data['product_list']   = ProductModel::orderBy('created_at', 'asc')->paginate(12);
                break;

                case 'created-desc':
                    $data['product_list']   = ProductModel::orderBy('created_at', 'desc')->paginate(12);
                break;

                default:
                    $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
                break;
        }
    } else {
        $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
    }
        return view('frontend.product', $data);
    }
    
    public function getProductDetail($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['productdetail_item'] = ProductModel::find($id);
        $data['product_relate']     = ProductModel::all();
        $data['product_cat_name']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->where('pro_id', $id)
                                        ->get();
        
        return view('frontend.productdetail', $data);
    }

    public function getProductCategory($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $data['procat_item']    = ProductCategoryModel::find($id);
        $data['procat_list']    = ProductModel::where('pro_procatid', $id)->orderBy('pro_id', 'desc')->paginate(6);
        $data['product_admin']  = LayoutProductModel::find(1);

        return view('frontend.productcat', $data);
    }
}
