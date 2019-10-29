<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ProductModel;
use App\Http\Requests\AddProductRequest;

use App\Http\Requests\EditProductRequest;

class ProductController extends Controller
{
    public function getProduct(Request $request){
        $data['procat_list']        = ProductCategoryModel::all();
        if(isset($request->search_name)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->where('pro_ten', 'like', '%'.$query.'%')
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        } elseif(isset($request->search_category) && !isset($request->search_name)) {
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->where('pro_procatid', '=', $request->search_category)
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        } elseif(isset($request->search_name) && isset($request->search_category)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->where('pro_ten', 'like', '%'.$query.'%')
                                        ->where('pro_procatid', '=', $request->search_category)
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        } else {
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        }
        return view('admin/product', $data);
    }

    public function addProduct(){
        $data['procat_list'] = ProductCategoryModel::all();
        return view('admin/addproduct', $data);
    }
    public function postaddProduct(AddProductRequest $request){
        $product = new ProductModel;
       
        $product->pro_ten           = $request->pro_ten;
        $product->pro_slug          = str_slug($request->pro_ten);
        // $product->pro_noibat
        // $product->pro_banchay
        // $product->pro_hienthi
       
        if ($request->hasFile('pro_thumb')) {

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        $product->pro_thongtin      = $request->pro_thongtin;
        $product->pro_giaban        = $request->pro_giaban;
        $product->pro_giakhuyenmai  = $request->pro_giakhuyenmai;
        $product->pro_title         = $request->pro_title;
        $product->pro_mota          = $request->pro_mota;
        // $product->pro_trangthai
        $product->pro_procatid      = $request->pro_procatid;
        $product->created_at        = Carbon::now();
        $product->updated_at        = Carbon::now();
        $product->save();
        return redirect()->intended('admin/product');

    }

    public function getProductDetail($id){
        $data['editpro'] = ProductModel::find($id);
        $data['procat_list'] = ProductCategoryModel::all();
        return view('admin/editproduct', $data);
    }
    public function postProductDetail(EditProductRequest $request, $id){
        $product = ProductModel::find($id);
       
        $product->pro_ten           = $request->pro_ten;
        // $product->pro_slug          = str_slug($request->pro_ten);
        // $product->pro_noibat
        // $product->pro_banchay
        // $product->pro_hienthi
        if ($request->hasFile('pro_thumb')) {
            File::delete('public/upload/product/'.$product->pro_thumb);

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }
        
        $product->pro_thongtin      = $request->pro_thongtin;
        $product->pro_giaban        = $request->pro_giaban;
        $product->pro_giakhuyenmai  = $request->pro_giakhuyenmai;
        $product->pro_title         = $request->pro_title;
        $product->pro_mota          = $request->pro_mota;
        // $product->pro_trangthai
        $product->pro_procatid      = $request->pro_procatid;
        $product->updated_at        = Carbon::now();
        $product->save();
        return redirect()->intended('admin/product');
    }
    
    public function deleteProduct($id){
        $product = ProductModel::find($id);
        File::delete('public/upload/product/'.$product->pro_thumb);
        ProductModel::destroy($id);
        
        return back();
    }

    public function checkshowProduct($id){
        $product = ProductModel::find($id);
        $product->pro_hienthi = $product->pro_hienthi ? 0 : 1;
        $product->save();
        return back();
    }
}
