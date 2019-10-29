<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\Http\Requests\AddProductCatRequest;
use App\Http\Requests\EditProductCatRequest;

class ProductCategoryController extends Controller
{
    public function getProductCat(){
        $data['procat_list'] = ProductCategoryModel::all();
        return view('admin/productcat', $data);
    }
    public function addProductCat(){
        return view('admin/addproductcat');
    }
    public function postaddProductCat(AddProductCatRequest $request){
        $procat                 = new ProductCategoryModel;
        $procat->procat_ten     = $request->procat_ten;
        $procat->procat_slug    = str_slug($request->procat_ten);
        $procat->procat_mota    = $request->procat_mota;
        $procat->created_at     = Carbon::now();
        $procat->updated_at     = Carbon::now();
        $procat->save();
        return redirect()->intended('admin/productcat');
    }
    public function editProductCat($id){
        $data['edit_procat'] = ProductCategoryModel::find($id);
        return view('admin/editproductcat', $data);
    }
    public function posteditProductCat(EditProductCatRequest $request, $id){
        $procat                 = ProductCategoryModel::find($id);
        $procat->procat_ten     = $request->procat_ten;
        // $procat->procat_slug    = str_slug($request->procat_name);
        $procat->procat_mota    = $request->procat_mota;
        $procat->updated_at     = Carbon::now();
        $procat->save();
        return redirect()->intended('admin/productcat');
    }
    public function deleteProductCat($id){
        ProductCategoryModel::destroy($id);
        return back();
    }
}
