@extends('frontend.master')

@section('title', 'Trang tin tức')


@section('css')
<link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('main')
        
    <div class="insMain">
        <section id="insBlogs">

            <div class="insBreadcrumb ">
                <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                    <h2>{{ $blogcat_item->blogcat_ten }}</h2>
                    <ul>
                        <li><a href="{{ asset('/') }}" target="_self">Trang chủ</a></li>

                        <li><a href="{{ asset('blog') }}" target="_self">Blog</a></li>

                        <li class="active"><span>{{ $blogcat_item->blogcat_ten }}</span></li>

                    </ul>
                </div>
            </div>

            <section class="latest_news_area ">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="insBlogList">
                                    <div class="insBlogItems clearfix">

                                        <div class="row">

                                            @foreach ($blogcat_list as $item)
                                            <div class="col-md-6 col-sm-6 col-xs-12 article_item">

                                                    <div class="insArticleLoop">
                                                        <div class="articlePostBody bg_w">
                                                            <div class="postThumbIMG relative imageHover">
                                                                <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}">
                                                                    <img data-reg="false" class="" src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}">
                                                                </a>
                                                                <div class="createdInfo">
                                                                    <ul class="notStyle">
                                                                        <li class="time"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                                            <time>{{ date('d/m/Y', strtotime($item->created_at)) }}</time>
                                                                        </li>
                                                                        <li class="post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Beauty farm</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="postDetail">
                                                                <div class="detail clearfix">
                                                                    <h3><a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}" title="{{ $item->blog_ten }}">{{ $item->blog_ten }}</a></h3>
                                                                    <p>{{ $item->blog_mota }}</p>
                                                                    <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}" class="view" title="Xem thêm">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="col-md-12 col-sm-12 col-xs-12 content_sortPagiBar pagi">
                                                {{ $blogcat_list->links() }}
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-12 col-xs-12 ba_sidebar">
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
                                                    Bài viết nổi bật
                                                </h2>
                                                </div>
                                                <div class="sing_right_widg_content">
                                                    <ul class="lat_news_right">

                                                        @foreach ($blog_sidebar as $item)
                                                            <li class="newItem">
                                                                <div class="wrap clearfix">
                                                                    <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}">
                                                                        <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}">
                                                                    </a>
                                                                    <div class="lat_news_right_con">
                                                                        <a href="{{ asset('blog/'.$item->blog_slug.'/'.$item->blog_id) }}"><h3>{{ $item->blog_ten }}</h3></a>
                                                                        <time>{{ date('d/m/Y', strtotime($item->created_at)) }}</time>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                        

                                                       
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
        </section>

    </div>

@endsection