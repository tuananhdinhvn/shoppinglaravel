<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/1000271724/1000376256/14/favicon.png?v=88" type="image/png" />
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
    <title>
        Tìm kiếm sản phẩm
    </title>

    <meta name="description" content="Tất cả sản phẩm" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <link rel="canonical" href="https://beauty-farm.myharavan.com/collections/all" />

    <script type='text/javascript'>
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        Haravan.culture = 'vi-VN';
        Haravan.shop = 'beauty-farm.myharavan.com';
        Haravan.theme = {
            "name": "[14/06/2018] Beauty farm",
            "id": 1000376256,
            "role": "main"
        };
        Haravan.domain = 'beauty-farm.myharavan.com';
        //]]>
    </script>

    <script type='text/javascript'>
        window.HaravanAnalytics = window.HaravanAnalytics || {};
        window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
        window.HaravanAnalytics.meta.currency = 'VND';
        var meta = {
            "page": {
                "pageType": "collection"
            }
        };
        for (var attr in meta) {
            window.HaravanAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script async src='//hstatic.net/0/0/global/haravan-analytics.min.js?v=6' type='text/javascript'></script>

    <script src='//theme.hstatic.net/1000271724/1000376256/14/jquery.min.js?v=88' type='text/javascript'></script>

    <!--------------CSS----------->

    <link href='//theme.hstatic.net/1000271724/1000376256/14/plugins.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/styles.css?v=88' rel='stylesheet' type='text/css' media='all' />

    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tất cả sản phẩm" />
    <meta property="og:image" content="http://theme.hstatic.net/1000271724/1000376256/14/share_fb_home.png?v=88" />
    <meta property="og:image" content="https://theme.hstatic.net/1000271724/1000376256/14/share_fb_home.png?v=88" />

    <meta property="og:description" content="Tất cả sản phẩm" />

    <meta property="og:url" content="https://beauty-farm.myharavan.com/collections/all" />
    <meta property="og:site_name" content="Beauty farm" />

    <script>
        window.shop = {
            template: "collection",
            shopCurrency: "VND",
            shopSetting: {},
            collectionSortBy: "created-descending",
            collectionId: "0",
        };
    </script>
</head>

<body class="insTemplate collection">
    <section class="insBody">


       <!--Home Header-->
       @include('frontend.layout.header')


        <div class="insMain">

            <section id="insCollection" class="pageTemplate">

                <div class="insBreadcrumb ">
                    <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                        <h2>Tìm kiếm sản phẩm</h2>
                        
                    </div>
                </div>

                <div class="container">
                    <div class="main">
                        <div class="row">
                            <!-- Left colunm -->
                            <div class="columnSidebar col-xs-12 col-sm-4 col-md-3" id="InsSidebar">
                                <div class="groupSidebar">

                                    <div class="moduleGroup catelogy">
                                        <div class="insHeading">
                                            <h2 class="title">
                                                Danh mục sản phẩm
                                            </h2>
                                        </div>
                                        <div class="moduleContent">
                                            <ul class="notStyle treeMenu">

                                                @foreach ($productcategory_list as $item)
                                                <li class="">
                                                    <a href="{{ asset('productcat/'.$item->procat_slug.'/'.$item->procat_id) }}" title="Trang chủ"><span>{{ $item->procat_ten }}</span></a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="moduleGroup colFilter">
                                        <div class="insHeading">
                                            <h2 class="title">
                                                Lọc sản phẩm
                                            </h2>
                                        </div>
                                        <div class="moduleContent">
                                            <div class="filterGroup">
                                                <div class="filterItem filterPrice">
                                                    <div class="filterHeading">
                                                        <h4>
                                                            Giá
                                                        </h4>
                                                    </div>
                                                    <div class="filterContent">
                                                        <ul class="checkBoxList">
                                                            <li>
                                                                <input type="checkbox" id="p1" name="cc" data-price="(price:product<=100000)" />
                                                                <label for="p1">
                                                                    <span class="button"></span> Dưới 100,000₫
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="p2" name="cc" data-price="((price:product>100000)&amp;&amp;(price:product<=300000))" />
                                                                <label for="p2">
                                                                    <span class="button"></span> 100,000₫ - 300,000₫
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="p3" name="cc" data-price="((price:product>300000)&amp;&amp;(price:product<=500000))" />
                                                                <label for="p3">
                                                                    <span class="button"></span> 300,000₫ - 500,000₫
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="p4" name="cc" data-price="((price:product>500000)&amp;&amp;(price:product<=1000000))" />
                                                                <label for="p4">
                                                                    <span class="button"></span> 500,000₫ - 1,000,000₫
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" id="p5" name="cc" data-price="(price:product>=1000000)" />
                                                                <label for="p5">
                                                                    <span class="button"></span> Trên 1,000,000₫
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="moduleGroup banner">
                                        <div class="insHeading">
                                            <h2 class="title">
                                                Khuyến mãi
                                            </h2>
                                        </div>
                                        <div class="moduleContent">
                                            <div class="imageHover">
                                                <a href="/" title="" target="_blank">
                                        <img src="{{ asset('public/upload/template/'.$product_admin->product_advertise) }}" alt="Products">
                                    </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ./left colunm -->
                            <div class="center_column col-xs-12 col-sm-8 col-md-9 product-col" id="center_column">
                                <!-- view-product-list-->
                                <div id="view-product-list" class="view-product-list">

                                    {{-- <div class="collectionBanner">
                                        <div class="banner">

                                            <img src="{{ asset('public/upload/template/'.$product_admin->product_banner) }}" alt="Products" />

                                        </div>
                                    </div> --}}

                                    <div class="collection_head relative">
                                        <div class="page_head">
                                            <h1 class="collection_title">
                                                Từ khóa tìm kiếm: <strong>{{ $keyword }}</strong> 
                                            </h1>
                                        </div>

                                        <div class="browse-tags ">
                                            <span>Sắp xếp theo:</span>
                                            <span class="custom-dropdown ">
                                                <select class="sort-by ">
                                                    <option value="manual">Sản phẩm nổi bật</option>
                                                    <option value="price-ascending">Giá: Tăng dần</option>
                                                    <option value="price-descending">Giá: Giảm dần</option>
                                                    <option value="title-ascending">Tên: A-Z</option>
                                                    <option value="title-descending">Tên: Z-A</option>
                                                    <option value="created-ascending">Cũ nhất</option>
                                                    <option value="created-descending">Mới nhất</option>
                                                    <option value="best-selling">Bán chạy nhất</option>
                                                </select>
                                            </span>
                                        </div>

                                    </div>

                                    





                                    <!-- PRODUCT LIST -->
                                    <div id="pd_collection">

                                        <div class="pdListItem threePdList clearfix">
                                            <div class="row">

                                                @foreach ($search_result as $item)
                                                <div class="itemProduct col-md-4 col-sm-4 col-xs-6">

                                                    <div class="pdLoopItem animated zoomIn">
                                                        <div class="itemLoop clearfix">
                                                            <div class="pdLoopImg elementFixHeight">

                                                                
                                                                <a href="{{ asset('product/'.$item->pro_slug.'/'.$item->pro_id) }}" title="{{ $item->pro_ten }}">
                                                                    <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" data-reg="false" class="imgLoopItem" alt="{{ $item->pro_ten }}">

                                                                </a>
                                                                <div class="pdLoopAction">
                                                                    <div class="listAction">
                                                                        <a href="{{ asset('cart/add/'.$item->pro_id) }}" onclick="success()" class="add-cart btnLoop" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" ></i> <span>Thêm vào giỏ</span></a>
                                                                        <a href="{{ asset('product/'.$item->pro_slug.'/'.$item->pro_id) }}" class="btnLoop btnViewPd " data-toggle="tooltip" data-placement="left" title="Xem chi tiết"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pdLoopDetail text-center clearfix">
                                                                <h3 class="pdLoopName"><a class="productName" href="{{ asset('product/'.$item->pro_slug.'/'.$item->pro_id) }}" title="{{ $item->pro_ten }}">{{ $item->pro_ten }} </a></h3>
                                                                <p class="pdPrice">

                                                                    @if ($item->pro_giaban==0)
                                                                    <span>Liên hệ</span> @elseif($item->pro_giaban>0 && $item->pro_giakhuyenmai>0)
                                                                    <span>{{ number_format($item->pro_giakhuyenmai, 0, ',', '.') }}₫</span>
                                                                    <del class="pdComparePrice">{{ number_format($item->pro_giaban, 0, ',', '.') }}₫</del> @else
                                                                    <span>{{ number_format($item->pro_giaban, 0, ',', '.') }}₫</span> @endif

                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-md-12 content_sortPagiBar pagi">
                                            <div id="pagination" class="clearfix">

                                                {{ $search_result->links() }}

                                            </div>
                                        </div>

                                    </div>




                                    
                                    

                                    <style>
                                        #view-product-list{
                                            position: relative;
                                        }
                                        .success-order{
                                            position: fixed;
                                            z-index: 100;
                                            background: #fff;
                                            border-radius: 10px;
                                            box-shadow: 0 0 5px;
                                            left: 30%;
                                            right: 30%;
                                            top: 20%;
                                            display: none;
                                        }
                                        @media max-width(768px){
                                            .success-order{
                                                left: 10%;
                                                right: 10%;
                                            }
                                        }
                                    </style>

                                    <!--Modal-->
                                    <div class="success-order" id="success-order">
                                        <div class="swal-icon swal-icon--success">
                                            <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                                            <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                                    
                                            <div class="swal-icon--success__ring"></div>
                                            <div class="swal-icon--success__hide-corners"></div>
                                        </div>
                                        <div class="swal-title" style="">Thêm vào giỏ hàng thành công!</div>
                                        <div class="swal-footer" style="text-align: center;">
                                            <div class="swal-button-container">
                                    
                                                {{-- <button class="swal-button swal-button--confirm" onclick="success()">Đóng</button> --}}
                                    
                                                <div class="swal-button__loader">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        var c = 0;
                                        function success(){
                                            if(c==0){
                                                document.getElementById("success-order").style.display = "block";
                                                c = 1;
                                            }
                                        }
                                    </script>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <input type="text" class="hidden" id="coll-handle" value="(collectionid:product>0)" />
            <div class="overlayFilter filter"></div>

            <script>
                Haravan.queryParams = {};
                if (location.search.length) {
                    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                        aKeyValue = aCouples[i].split('=');
                        if (aKeyValue.length > 1) {
                            Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                        }
                    }
                }
                var collFilters = jQuery('.coll-filter');
                collFilters.change(function() {
                    var newTags = [];
                    var newURL = '';
                    delete Haravan.queryParams.page;
                    collFilters.each(function() {
                        if (jQuery(this).val()) {
                            newTags.push(jQuery(this).val());
                        }
                    });

                    newURL = '/collections/' + 'all';
                    if (newTags.length) {
                        newURL += '/' + newTags.join('+');
                    }
                    var search = jQuery.param(Haravan.queryParams);
                    if (search.length) {
                        newURL += '?' + search;
                    }
                    location.href = newURL;

                });
                jQuery('.sort-by')
                    .val('created-descending')
                    .bind('change', function() {
                        Haravan.queryParams.sort_by = jQuery(this).val();
                        location.search = jQuery.param(Haravan.queryParams);
                    });
            </script>
        </div>
        
        
         <!--Footer-->
         @include('frontend.layout.footer')


        <div class="pageLoading"></div>
        <div class="overlayMenu"></div>
        <a href="javascript:;" class="backToTop"><i class="fa fa-angle-double-up"></i></a>
    </section>

    <script src='//theme.hstatic.net/1000271724/1000376256/14/plugins.js?v=88' type='text/javascript'></script>
    <script src='//theme.hstatic.net/1000271724/1000376256/14/inspired.js?v=88' type='text/javascript'></script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>