@extends('frontend.master')
@section('title', 'tên bv')


@section('css')
    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')
    <div class="insMain">
        <style>
            #insArtCommentFRM .input-group {
                width: 50% !important;
                float: left;
                margin-bottom: 15px;
                padding-right: 10px;
            }
            
            #insArtCommentFRM .input-group.bd {
                width: 100% !important;
            }
            
            #insArtCommentFRM .input-group .form-control {
                width: 100% !important;
                border: 1px solid #eaeaea;
                padding-left: 15px;
                box-shadow: none;
                -webkit-transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -o-transition: all .25s ease-in-out;
                transition: all .25s ease-in-out;
                border-radius: 0;
            }
            
            #insArtCommentFRM .input-group .form-control:focus {
                border-color: #49a010;
            }
            
            #insArtCommentFRM .input-group textarea#comment_body {
                margin-bottom: 20px;
            }
            
            div#insArtCommentList {
                padding: 0px 15px;
            }
            
            #insArtCommentList h2 {
                display: inline-block;
                font-size: 17px;
                text-transform: uppercase;
                margin: 5px 0px;
            }
            
            #binhluan .comment {
                margin: 0px 0px 10px;
                padding: 10px 0px;
                border-bottom: 1px dashed #00a651;
            }
            
            #binhluan .comment h3.author {
                background: #f1f1f1;
                padding: 5px;
                margin-bottom: 5px;
                font-size: 15px;
            }
            
            #binhluan .comment div {
                padding: 0px 10px;
            }
            
            .subtext,
            .notice {
                color: #49a010;
                font-size: 15px;
                display: block;
                margin-bottom: 10px;
                font-style: italic;
            }
            
            .main_article #comment-submit {
                border-radius: 0;
                padding: 10px 20px;
            }
            
            @media screen and (max-width: 479px) {
                #insArtCommentFRM .input-group {
                    width: 100% !important;
                    padding-right: 0px;
                }
            }
        </style>
        <section id="insArticlePage">

            <div class="insBreadcrumb blog-breadcrumb">
                <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                    <h2>{{ $blogdetail_item->blog_ten }}</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>

                        <li><a href="{{ asset('blog') }}" target="_self">Blog</a> </li>

                        <li class="active"><span>{{ $blogdetail_item->blog_ten }}</span></li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="wrapperArticlePage">
                    <div class="row">
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="insCtMain">
                                <div class="main_article bg_w">
                                    <div class="head">
                                        <h1>{{ $blogdetail_item->blog_ten }}</h1>
                                        <div class="info_edu">
                                            <ul>
                                                {{-- <li><i class="fa fa-book" aria-hidden="true"></i> Beauty farm</li> --}}
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d/m/Y', strtotime($blogdetail_item->created_at)) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="body-content">
                                            {!! $blogdetail_item->blog_noidung !!}
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-xs ba_sidebar">
                            <aside id="insBlogSidebar">
                                <div class="right_sidebar">
                                    <div class="all_right_widgets">

                                        <div class="sing_right_widget catelogy">
                                            <div class="insHeading">
                                                <h2 class="title">
                                                    Danh mục sản phẩm
                                                </h2>
                                            </div>
                                            <div class="moduleContent">
                                                <ul class="notStyle treeMenu">

                                                    @foreach ($productcategory_list as $item)
                                                        <li class="">
                                                            <a href="{{ asset('productcat/'.$item->procat_slug.'/'.$item->procat_id) }}" title="{{ $item->procat_ten }}"><span>{{ $item->procat_ten }}</span></a>
                                                        </li>
                                                    @endforeach
                                                    

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="sing_right_widget">
                                            <div class="insHeading">
                                                <h2 class="title">
                    Bài viết mới
                </h2>
                                            </div>
                                            <div class="sing_right_widg_content">
                                                <ul class="lat_news_right">

                                                    <li class="newItem">
                                                        <div class="wrap clearfix">
                                                            <a href="/blogs/news/7-loai-rau-nen-trong-vao-mua-dong">
                                                                <img src="//file.hstatic.net/1000271724/article/3-min_large.jpg" alt="7 loại rau nên trồng vào mùa đông">
                                                            </a>
                                                            <div class="lat_news_right_con">
                                                                <h3><a href="/blogs/news/7-loai-rau-nen-trong-vao-mua-dong">7 loại rau nên trồng...</a></h3>
                                                                <h4>14/06/2018</h4>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="newItem">
                                                        <div class="wrap clearfix">
                                                            <a href="/blogs/news/6-dau-hieu-cua-co-the-canh-bao-ban-an-qua-it-rau-qua">
                                                                <img src="//file.hstatic.net/1000271724/article/6-min_large.jpg" alt="6 dấu hiệu của cơ thể cảnh báo bạn ăn quá ít rau quả">
                                                            </a>
                                                            <div class="lat_news_right_con">
                                                                <h3><a href="/blogs/news/6-dau-hieu-cua-co-the-canh-bao-ban-an-qua-it-rau-qua">6 dấu hiệu của cơ...</a></h3>
                                                                <h4>09/05/2018</h4>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="newItem">
                                                        <div class="wrap clearfix">
                                                            <a href="/blogs/news/nhung-loai-rau-xanh-nen-an-nhieu-trong-mua-thu">
                                                                <img src="//file.hstatic.net/1000271724/article/4-min_large.jpg" alt="Những loại rau xanh nên ăn nhiều trong mùa thu">
                                                            </a>
                                                            <div class="lat_news_right_con">
                                                                <h3><a href="/blogs/news/nhung-loai-rau-xanh-nen-an-nhieu-trong-mua-thu">Những loại rau xanh nên...</a></h3>
                                                                <h4>21/03/2018</h4>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="newItem">
                                                        <div class="wrap clearfix">
                                                            <a href="/blogs/news/rua-rau-cu-qua-bang-dung-dich-gi-la-sach-nhat">
                                                                <img src="//file.hstatic.net/1000271724/article/7-min_large.jpg" alt="Rửa rau củ quả bằng dung dịch gì là sạch nhất?">
                                                            </a>
                                                            <div class="lat_news_right_con">
                                                                <h3><a href="/blogs/news/rua-rau-cu-qua-bang-dung-dich-gi-la-sach-nhat">Rửa rau củ quả bằng...</a></h3>
                                                                <h4>21/03/2018</h4>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        

                                    </div>
                                </div>
                            </aside>
                            <style>
                                #insBlogSidebar .all_right_widgets {
                                    margin-top: 0px;
                                }
                                
                                #insBlogSidebar .all_right_widgets .sing_right_widget {
                                    background: #fff;
                                    padding: 0px;
                                    margin-bottom: 20px;
                                }
                                
                                .sing_right_widget ul {
                                    margin: 0;
                                    padding: 0;
                                    list-style: none;
                                }
                                
                                .lat_news_right .newItem {
                                    margin-bottom: 10px;
                                    padding-bottom: 10px;
                                    border-bottom: 1px dashed #eaeaea;
                                }
                                
                                .lat_news_right .newItem:last-child {
                                    margin-bottom: 15px;
                                    border-bottom: 0;
                                }
                                
                                .lat_news_right .newItem .lat_news_right_con {
                                    padding: 0;
                                }
                                
                                .lat_news_right .newItem h3 {
                                    font-size: 15px;
                                    display: block;
                                    margin: 0;
                                    line-height: 1.3;
                                    margin-bottom: 5px;
                                }
                                
                                .lat_news_right .newItem time {
                                    font-size: 13px;
                                    font-style: italic;
                                    color: #999;
                                }
                                
                                ul.category_right.blogTags li {
                                    display: inline-block;
                                    margin: 0px 5px 10px 0px;
                                }
                                
                                ul.category_right.blogTags li a {
                                    display: inline-block;
                                    background: #e2e2e2;
                                    color: #333;
                                    padding: 4px 9px;
                                    position: relative;
                                    margin: 5px;
                                    font-size: 12px;
                                    border-left: 3px solid #49a010;
                                }
                                
                                ul.category_right.blogTags li a:before {
                                    left: 0;
                                    top: 8px;
                                    border: solid transparent;
                                    content: " ";
                                    height: 0;
                                    width: 0;
                                    position: absolute;
                                    pointer-events: none;
                                    border-color: rgba(136, 183, 213, 0);
                                    border-left-color: #49a010;
                                    border-width: 4px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection        
        
      