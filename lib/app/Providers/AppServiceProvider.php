<?php

namespace App\Providers;

use DB;

use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;

use App\model\OrderModel;

use App\model\ProductCategoryModel;

use App\model\BlogModel;
use App\model\BlogCategoryModel;

use App\model\LayoutHomepageModel;

use App\model\LayoutFooterModel;

use App\model\SettingModel;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $data['count_new_order']            = OrderModel::where('od_status', 0)->count();

        $data['active_sidebar_admin']       = $request->segments(2);

        $data['productcategory_list']       = ProductCategoryModel::orderBy('procat_id', 'desc')->get();
        // $data['cart_items']             = Cart::getContent();
        $data['getindex']                   = LayoutHomepageModel::find(1);
       
        $data['getindex_topproductcat_1']   = DB::table('tb_layout_homepage')
                                                    ->join('tb_productcat', 'tb_productcat.procat_id', '=', 'tb_layout_homepage.topproduct_1')
                                                    ->get();
        $data['getindex_topproduct_list_1'] = DB::table('tb_product')
                                                    ->join('tb_layout_homepage', 'tb_product.pro_procatid', '=', 'tb_layout_homepage.topproduct_1')
                                                    ->take(8)
                                                    ->get();
                                                    
        $data['getindex_topproductcat_2']   = DB::table('tb_layout_homepage')
                                                    ->join('tb_productcat', 'tb_productcat.procat_id', '=', 'tb_layout_homepage.topproduct_2')
                                                    ->get();
        $data['getindex_topproduct_list_2'] = DB::table('tb_product')
                                                    ->join('tb_layout_homepage', 'tb_product.pro_procatid', '=', 'tb_layout_homepage.topproduct_2')
                                                    ->take(8)
                                                    ->get();

        $data['getindex_topproductcat_3']   = DB::table('tb_layout_homepage')
                                                    ->join('tb_productcat', 'tb_productcat.procat_id', '=', 'tb_layout_homepage.topproduct_3')
                                                    ->get();
        $data['getindex_topproduct_list_3'] = DB::table('tb_product')
                                                    ->join('tb_layout_homepage', 'tb_product.pro_procatid', '=', 'tb_layout_homepage.topproduct_3')
                                                    ->take(8)
                                                    ->get();

        $data['getindex_topproductcat_4']   = DB::table('tb_layout_homepage')
                                                    ->join('tb_productcat', 'tb_productcat.procat_id', '=', 'tb_layout_homepage.topproduct_4')
                                                    ->get();
        $data['getindex_topproduct_list_4'] = DB::table('tb_product')
                                                    ->join('tb_layout_homepage', 'tb_product.pro_procatid', '=', 'tb_layout_homepage.topproduct_4')
                                                    ->take(8)
                                                    ->get();

        $data['getblog_index']              = BlogModel::all();
        $data['blogcategory_list']          = BlogCategoryModel::orderBy('blogcat_id', 'desc')->get();
        $data['getfooter']                  = LayoutFooterModel::find(1);

        $data['setting_info']               = SettingModel::all();
        view()->share($data);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
