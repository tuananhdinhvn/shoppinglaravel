<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\BlogModel;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;

use App\model\BlogCategoryModel;

class BlogController extends Controller
{
    public function getBlog(Request $request){
        $data['blogcat_list']       = BlogCategoryModel::all();
        if(isset($request->search_name)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_ten', 'like', '%'.$query.'%')
                                        ->orderBy('blog_id', 'asc')
                                        ->paginate(10);
        } elseif(isset($request->search_category) && !isset($request->search_name)) {
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_blogcatid', '=', $request->search_category)
                                        ->orderBy('blog_id', 'asc')
                                        ->paginate(10);
        } elseif(isset($request->search_name) && isset($request->search_category)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_ten', 'like', '%'.$query.'%')
                                        ->where('blog_blogcatid', '=', $request->search_category)
                                        ->orderBy('blog_id', 'asc')
                                        ->paginate(10);
        } else {
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->orderBy('blog_id', 'asc')
                                        ->paginate(10);
        }
        return view('admin/blog', $data);
    }

    public function addBlog(){
        $data['blogcat_list'] = BlogCategoryModel::all();
        return view('admin/addblog', $data);
    }
    public function postaddBlog(AddBlogRequest $request){
        $blog = new BlogModel;
        $blog->blog_ten         = $request->blog_ten;
        $blog->blog_slug        = str_slug($request->blog_ten);

        if ($request->hasFile('blog_thumb')) {

            $file                   = $request->file('blog_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $blog->blog_thumb       = $image_save_name;
            $file->move('public/upload/blog/', $image_save_name);
        }

        $blog->blog_noidung     = $request->blog_noidung;
        $blog->blog_title       = isset($request->blog_title) ? $request->blog_title : $request->blog_ten;
        $blog->blog_mota        = $request->blog_mota;
        $blog->blog_blogcatid   = $request->blog_blogcatid;
        $blog->blog_nguoiviet   = $request->blog_nguoiviet;
        $blog->created_at       = Carbon::now();
        $blog->updated_at       = Carbon::now();
        $blog->save();
        return redirect()->intended('admin/blog');
    }

    public function editBlog($id){
        $data['blogcat_list']   = BlogCategoryModel::all();
        $data['blog_edit']      = BlogModel::find($id);
        return view('admin/editblog', $data);
    }
    public function posteditBlog(EditBlogRequest $request, $id){
        $blog = BlogModel::find($id);
        $blog->blog_ten         = $request->blog_ten;
        
        if ($request->hasFile('blog_thumb')) {
            File::delete('public/upload/blog/'.$blog->blog_thumb);

            $file                   = $request->file('blog_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $blog->blog_thumb       = $image_save_name;
            $file->move('public/upload/blog/', $image_save_name);
        }

        $blog->blog_noidung     = $request->blog_noidung;
        $blog->blog_blogcatid   = $request->blog_blogcatid;
        $blog->blog_title       = isset($request->blog_title) ? $request->blog_title : $request->blog_ten;
        $blog->blog_mota        = $request->blog_mota;
        $blog->updated_at       = Carbon::now();
        $blog->save();
        return redirect()->intended('admin/blog');
    }

    public function deleteBlog($id){
        $blog = BlogModel::find($id);
        File::delete('public/upload/blog/'.$blog->blog_thumb);
        BlogModel::destroy($id);
        return back();
    }

    public function checkshowBlog($id){
        $blog = BlogModel::find($id);
        $blog->blog_hienthi = $blog->blog_hienthi ? 0 : 1;
        $blog->save();
        return back();
    }
}
