<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\BlogCategoryModel;
use App\Http\Requests\BlogCatRequest;
use App\Http\Requests\EditBlogCatRequest;

class BlogCategoryController extends Controller
{
    public function getBlogCat(){
        $data['blogcat_list'] = BlogCategoryModel::all();
        return view('admin/blogcat', $data);
    }

    public function addBlogCat(){
        return view('admin/addblogcat');
    }
    public function postaddBlogCat(BlogCatRequest $request){
        $blogcat = new BlogCategoryModel;
        $blogcat->blogcat_ten     = $request->blogcat_ten;
        $blogcat->blogcat_slug    = str_slug($request->blogcat_ten);
        $blogcat->blogcat_mota    = $request->blogcat_mota;
        $blogcat->created_at        = Carbon::now();
        $blogcat->updated_at        = Carbon::now();
        $blogcat->save();
        return redirect()->intended('admin/blogcat');
    }

    public function editBlogCat($id){
        $data['blogcat_edit'] = BlogCategoryModel::find($id);
        return view('admin/editblogcat', $data);
    }
    public function posteditBlogCat(EditBlogCatRequest $request, $id){
        $blogcat = BlogCategoryModel::find($id);
        $blogcat->blogcat_ten     = $request->blogcat_ten;
        // $blogcat->blogcat_slug    = str_slug($request->blogcat_ten);

        $blogcat->blogcat_mota    = $request->blogcat_mota;
        $blogcat->updated_at      = Carbon::now();
        $blogcat->save();
        return redirect()->intended('admin/blogcat');
    }

    public function deleteBlogCat($id){
        BlogCategoryModel::destroy($id);
        return back();
    }
}
