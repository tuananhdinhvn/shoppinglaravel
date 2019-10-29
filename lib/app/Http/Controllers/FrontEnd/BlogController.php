<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

use App\model\BlogModel;
use App\model\BlogCategoryModel;

class BlogController extends Controller
{
    public function getBlog(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['blog_list']      = BlogModel::orderBy('blog_id', 'desc')->paginate(4);
        $data['blog_sidebar']   = BlogModel::orderBy('blog_id', 'desc')->take(5)->get();

        return view('frontend.blog', $data);
    }

    public function getBlogDetail($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $data['blogdetail_item'] = BlogModel::find($id);
        
        return view('frontend.blogdetail', $data);
    }

    public function getBlogCategory($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $data['blog_sidebar']   = BlogModel::orderBy('blog_id', 'desc')->take(5)->get();
        $data['blogcat_item']    = BlogCategoryModel::find($id);
        $data['blogcat_list']    = BlogModel::where('blog_blogcatid', $id)->orderBy('blog_id', 'desc')->paginate(4);
  
        return view('frontend.blogcat', $data);
    }
}
