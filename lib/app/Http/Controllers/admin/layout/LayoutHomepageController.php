<?php

namespace App\Http\Controllers\admin\layout;

use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;

use App\model\LayoutHomepageModel;
use App\Http\Requests\LayoutHomepageRequest;

class LayoutHomepageController extends Controller
{
    public function getLayoutHomepage(){
        $data['homepage_list']  = LayoutHomepageModel::find(1);
        $data['procat_list']    = ProductCategoryModel::all();
        return view('admin/layout/layout_homepage', $data);
    }
    public function postLayoutHomepage(LayoutHomepageRequest $request){
        $layout = LayoutHomepageModel::find(1);
       
        if ($request->hasFile('homepage_logo')) {
            File::delete('public/upload/template/'.$layout->homepage_logo);

            $file                   = $request->file('homepage_logo');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->homepage_logo  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('homepage_favicon')) {
            File::delete('public/upload/template/'.$layout->homepage_favicon);

            $file                   = $request->file('homepage_favicon');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->homepage_favicon  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        //Slide
        if ($request->hasFile('slide_img_1')) {
            File::delete('public/upload/template/'.$layout->slide_img_1);

            $file                   = $request->file('slide_img_1');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_1    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_1      = $request->slide_link_1;

        if ($request->hasFile('slide_img_2')) {
            File::delete('public/upload/template/'.$layout->slide_img_2);

            $file                   = $request->file('slide_img_2');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_2    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_2      = $request->slide_link_2;

        if ($request->hasFile('slide_img_3')) {
            File::delete('public/upload/template/'.$layout->slide_img_3);

            $file                   = $request->file('slide_img_3');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_3    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_3      = $request->slide_link_3;

        //Banner Top
        if ($request->hasFile('bannertop_img_1')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_1);

            $file                       = $request->file('bannertop_img_1');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_1    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_1      = $request->bannertop_link_1;

        if ($request->hasFile('bannertop_img_2')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_2);

            $file                       = $request->file('bannertop_img_2');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_2    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_2      = $request->bannertop_link_2;

        if ($request->hasFile('bannertop_img_3')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_3);

            $file                       = $request->file('bannertop_img_3');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_3    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_3      = $request->bannertop_link_3;

        if ($request->hasFile('bannertop_img_4')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_4);

            $file                       = $request->file('bannertop_img_4');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_4    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_4      = $request->bannertop_link_4;

        //About us
        if ($request->hasFile('aboutus_img')) {
            File::delete('public/upload/template/'.$layout->aboutus_img);

            $file                   = $request->file('aboutus_img');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->aboutus_img    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        $layout->aboutus_title          = $request->aboutus_title;
        $layout->aboutus_description    = $request->aboutus_description;
        
        if ($request->hasFile('aboutus_icon_1')) {
            File::delete('public/upload/template/'.$layout->aboutus_icon_1);

            $file                   = $request->file('aboutus_icon_1');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->aboutus_icon_1 = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->aboutus_textup_1   = $request->aboutus_textup_1;
        $layout->aboutus_textdown_1 = $request->aboutus_textdown_1;

        if ($request->hasFile('aboutus_icon_2')) {
            File::delete('public/upload/template/'.$layout->aboutus_icon_2);

            $file                   = $request->file('aboutus_icon_2');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->aboutus_icon_2 = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->aboutus_textup_2   = $request->aboutus_textup_2;
        $layout->aboutus_textdown_2 = $request->aboutus_textdown_2;

        if ($request->hasFile('aboutus_icon_3')) {
            File::delete('public/upload/template/'.$layout->aboutus_icon_3);

            $file                   = $request->file('aboutus_icon_3');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->aboutus_icon_3 = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->aboutus_textup_3   = $request->aboutus_textup_3;
        $layout->aboutus_textdown_3 = $request->aboutus_textdown_3;

        if ($request->hasFile('aboutus_icon_4')) {
            File::delete('public/upload/template/'.$layout->aboutus_icon_4);

            $file                   = $request->file('aboutus_icon_4');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->aboutus_icon_4 = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->aboutus_textup_4   = $request->aboutus_textup_4;
        $layout->aboutus_textdown_4 = $request->aboutus_textdown_4;

        //Top product
        $layout->topproduct_1   = $request->topproduct_1;
        $layout->topproduct_2   = $request->topproduct_2;
        $layout->topproduct_3   = $request->topproduct_3;
        $layout->topproduct_4   = $request->topproduct_4;

        //Promotion
        if ($request->hasFile('promotion_img')) {
            File::delete('public/upload/template/'.$layout->promotion_img);

            $file                   = $request->file('promotion_img');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->promotion_img  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->promotion_text_1   = $request->promotion_text_1;
        $layout->promotion_text_2   = $request->promotion_text_2;
        $layout->promotion_text_3   = $request->promotion_text_3;

        $layout->promotion_link     = $request->promotion_link;
       
        //Why us
        $layout->whyus_title        = $request->whyus_title;

        if ($request->hasFile('whyus_img')) {
            File::delete('public/upload/template/'.$layout->whyus_img);

            $file                   = $request->file('whyus_img');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_img      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('whyus_icon_1')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_1);

            $file                   = $request->file('whyus_icon_1');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_1   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_1          = $request->whyus_title_1;
        $layout->whyus_description_1    = $request->whyus_description_1;

        if ($request->hasFile('whyus_icon_2')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_2);

            $file                   = $request->file('whyus_icon_2');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_2   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_2          = $request->whyus_title_2;
        $layout->whyus_description_2    = $request->whyus_description_2;

        if ($request->hasFile('whyus_icon_3')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_3);

            $file                   = $request->file('whyus_icon_3');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_3   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_3          = $request->whyus_title_3;
        $layout->whyus_description_3    = $request->whyus_description_3;

        if ($request->hasFile('whyus_icon_4')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_4);

            $file                   = $request->file('whyus_icon_4');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_4   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_4          = $request->whyus_title_4;
        $layout->whyus_description_4    = $request->whyus_description_4;

        if ($request->hasFile('whyus_icon_5')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_5);

            $file                   = $request->file('whyus_icon_5');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_5   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_5          = $request->whyus_title_5;
        $layout->whyus_description_5    = $request->whyus_description_5;

        if ($request->hasFile('whyus_icon_6')) {
            File::delete('public/upload/template/'.$layout->whyus_icon_6);

            $file                   = $request->file('whyus_icon_6');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->whyus_icon_6   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->whyus_title_6          = $request->whyus_title_6;
        $layout->whyus_description_6    = $request->whyus_description_6;

        $layout->updated_at        = Carbon::now();
        $layout->save();
        return back();
        
    }
}
