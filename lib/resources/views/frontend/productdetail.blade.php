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
        {{ $productdetail_item->pro_ten }}
    </title>

    <meta name="description" content="{{ $productdetail_item->pro_mota }}" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <link rel="canonical" href="{{ Request::fullUrl() }}" />

    {{-- <script async src='//hstatic.net/0/0/global/haravan-analytics.min.js?v=6' type='text/javascript'></script> --}}

    </span>
    </span>

    <script src='{{ asset('js/jquery.min.js') }}' type='text/javascript'></script>

    <!--------------CSS----------->

    <link href='//theme.hstatic.net/1000271724/1000376256/14/plugins.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/styles.css?v=88' rel='stylesheet' type='text/css' media='all' />

    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <script>
        window.shop = {
            template: "product",

        };
    </script>

</head>

<body class="insTemplate product">
    <section class="insBody">

        @include('frontend.layout.header')

        <div class="insMain">

            <section id="pd-1013019934-template" class="productTemplate">

                <div class="insBreadcrumb ">
                    <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                        <h2>{{ $productdetail_item->pro_ten }}</h2>
                        <ul>
                            <li><a href="/" target="_self">Trang chủ</a></li>

                            <!--li><a href="/collections" target="_self">Danh mục</a></li-->

                            <li><a href="/collections/hot-products" target="_self">Sản phẩm</a></li>

                            <li class="active"><span> {{ $productdetail_item->pro_ten }}</span></li>

                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="wrapperPdPage">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12 pdRightCol">
                                <div class="pdBlockDetail pdFirstInfo">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pdImages">
                                            <div class="wrapperPdImage clearfix">

                                                <div class="pull-left">
                                                    <img alt="{{ $productdetail_item->pro_ten }}" src="{{ asset('public/upload/product/'.$productdetail_item->pro_thumb) }}">
                                                </div>

                                                {{-- <div id="leftThumbsImg" class="pdImgThumbs pull-left">
                                                    <ul class="listThumbs">

                                                        <li class="imgThumb active">
                                                            <a href="javascript:void(0)" data-fancybox="//product.hstatic.net/1000271724/product/upload_3e8ae0c37762469d9d10039a0ca29c25_master.jpg" data-image="//product.hstatic.net/1000271724/product/upload_3e8ae0c37762469d9d10039a0ca29c25_master.jpg">
                                                                <img alt="Xương ống heo" src="//product.hstatic.net/1000271724/product/upload_3e8ae0c37762469d9d10039a0ca29c25_small.jpg">
                                                            </a>
                                                        </li>

                                                        <li class="imgThumb ">
                                                            <a href="javascript:void(0)" data-fancybox="//product.hstatic.net/1000271724/product/upload_13c02292ac1d45cda65888eec9d961d3_master.jpg" data-image="//product.hstatic.net/1000271724/product/upload_13c02292ac1d45cda65888eec9d961d3_master.jpg">
                                                                <img alt="Xương ống heo" src="//product.hstatic.net/1000271724/product/upload_13c02292ac1d45cda65888eec9d961d3_small.jpg">
                                                            </a>
                                                        </li>

                                                        <li class="imgThumb ">
                                                            <a href="javascript:void(0)" data-fancybox="//product.hstatic.net/1000271724/product/upload_6bf0870f06e940a0b891c5f86dd6687a_master.jpg" data-image="//product.hstatic.net/1000271724/product/upload_6bf0870f06e940a0b891c5f86dd6687a_master.jpg">
                                                                <img alt="Xương ống heo" src="//product.hstatic.net/1000271724/product/upload_6bf0870f06e940a0b891c5f86dd6687a_small.jpg">
                                                            </a>
                                                        </li>

                                                        <li class="imgThumb ">
                                                            <a href="javascript:void(0)" data-fancybox="//product.hstatic.net/1000271724/product/upload_84ba469ca9cf43a386986a7b48ef667b_master.jpg" data-image="//product.hstatic.net/1000271724/product/upload_84ba469ca9cf43a386986a7b48ef667b_master.jpg">
                                                                <img alt="Xương ống heo" src="//product.hstatic.net/1000271724/product/upload_84ba469ca9cf43a386986a7b48ef667b_small.jpg">
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div id="imgFeatured" class="featureImg pull-left">
                                                    <a class="pdFancybox" href="//product.hstatic.net/1000271724/product/upload_3e8ae0c37762469d9d10039a0ca29c25_master.jpg">
                                                        <img alt="Xương ống heo" src="//product.hstatic.net/1000271724/product/upload_3e8ae0c37762469d9d10039a0ca29c25_grande.jpg">
                                                    </a>
                                                </div> --}}

                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pdInfo">
                                            <div class="wrapPdInfo">
                                                <h1 class="title pdTitle">
                                                    {{ $productdetail_item->pro_ten }}
                                                </h1>

                                               
                                                <div class="pdBox listInfoDesc">
                                                    <ul>
                                                        <li class="vendor"><i class="fa fa-gg" aria-hidden="true"></i> Danh mục: <span>{{ $product_cat_name[0]->procat_ten }}</span> </li>
                                                    </ul>
                                                </div>
                                                <div class="pdBox pdPriceBoxInfo">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12 pdBlockInfo pdPriceWrap">
                                                            <div class="wrapBlockInfo">


                                                                <div class="pdPrice">

                                                                    @if ($productdetail_item->pro_giaban==0 )
                                                                        <p class="item price">
                                                                            <span class="pdLabelPrice">Giá bán: </span>
                                                                            <span id="pdPriceNumber">Liên hệ</span>
                                                                        </p>
                                                                    @elseif($productdetail_item->pro_giaban>0 && $productdetail_item->pro_giakhuyenmai>0)
                                                                        <p class="item price">
                                                                            <span class="pdLabelPrice">Tại Beauty farm: </span>
                                                                            <span id="pdPriceNumber">{{ number_format($productdetail_item->pro_giakhuyenmai, 0, ',', '.') }} ₫</span>
                                                                        </p>
                                                                        <p class="item comparePrice ">
                                                                            <span class="pdLabelPrice">Giá thị trường: </span>
                                                                            <span id="pdComparePriceNumber">{{ number_format($productdetail_item->pro_giaban, 0, ',', '.') }} ₫</span>
                                                                        </p>
                                                                        <p class="item compareSaleOff ">
                                                                            <span class="pdLabelPrice">Tiết kiệm: </span>
                                                                            <span id="pdCompareSalePrice">-{{ number_format($productdetail_item->pro_giaban-$productdetail_item->pro_giakhuyenmai, 0, ',', '.') }} ₫ </span>
                                                                            {{-- <span id="pdCompareSaleOff">-0%</span> --}}
                                                                        </p>
                                                                    @else
                                                                        <p class="item price">
                                                                            <span class="pdLabelPrice">Tại Beauty farm: </span>
                                                                            <span id="pdPriceNumber">{{ number_format($productdetail_item->pro_giaban, 0, ',', '.') }} ₫</span>
                                                                        </p>
                                                                    @endif
                                                                    
                                                                </div>

                                                                
                                                                <div class="actionCart">
                                                                    
                                                                    <div class="select-swatch">

                                                                        <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                                                            <div class="header">Số lượng mua hàng (Kg)</div>
                                                                            <div class="select-swap">

                                                                            

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="groupQty">
                                                                        <button type="button" class="qtyControl minus">-</button>
                                                                        <input type="number" maxlength="12" min="1" class="input-text qty" title="Số lượng" size="2" value="1" name="Lines" id="pdQuantity">
                                                                        <button type="button" class="qtyControl plus">+</button>
                                                                    </div>
                                                                    <div class="listAction">
                                                                        <a href="{{ asset('cart/add/'.$productdetail_item->pro_id) }}">
                                                                            <button type="button" class="button btn-outline btn-addCart " onclick="success()">
                                                                                Thêm vào giỏ
                                                                            </button>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="button btn-outline btnSoldout hidden">Hết hàng</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="pdBlockDetail pdTabInfo">
                                    <div class="listTabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tabDescription" aria-controls="tabDescription" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tabFbComment" aria-controls="tabFbComment" role="tab" data-toggle="tab">Bình luận</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="tabDescription">

                                                <div class="content">
                                                    {!! $productdetail_item->pro_thongtin !!}
                                                </div>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tabFbComment">
                                                <div class="container-comments">
                                                    <div id="fb-root"></div>
                                                    <div class="fb-comments" data-href="{{ Request::fullUrl() }}" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs pdLeftCol" id="InsSidebar">
                                <div class="groupSidebar">

                                    <div class="moduleGroup catelogy">
                                        <div class="insHeading">
                                            <h2 class="title">
                                                Danh mục
                                            </h2>
                                        </div>
                                        <div class="moduleContent">
                                            <ul class="notStyle treeMenu">

                                                @foreach ($productcategory_list as $item)

                                                <li class="">
                                                    <a href="/" title="{{ $item->procat_ten }}"><span>{{ $item->procat_ten }}</span></a>
                                                </li>

                                                @endforeach
                                                
                                            </ul>
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
                                                <a href="{{ asset('/') }}" title="" target="_blank">
                                                    <img src="{{ asset('public/upload/info/banner_pd_sidebar.jpg') }}" alt="Khuyến mãi">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>    

                        <!--Modal success order-->
                        @include('frontend.layout.success_order')
                        

                        <div class="pdBlockDetail pdRelatedInfo">
                            <div class="relatedPD">
                                <div class="pdRelated">
                                    <div class="headingSeasion">
                                        <h2>
                                            Sản phẩm cùng loại
                                        </h2>
                                    </div>
                                    <div class="relatedListting">

                                        <div class="contentRelatedPd owlStyle notDots">

                                            @foreach ($product_relate as $item)

                                            @if ($productdetail_item->pro_procatid == $item->pro_procatid && $item->pro_id != $productdetail_item->pro_id)
                                                <div class="productItem">

                                                    <div class="pdLoopItem animated zoomIn">
                                                        <div class="itemLoop clearfix">
                                                            <div class="pdLoopImg elementFixHeight">

                                                                <a href="{{ asset('product/'.$item->pro_slug.'/'.$item->pro_id) }}" title="{{ $item->pro_ten }}">
                                                                    <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" data-reg="false" class="imgLoopItem" alt="{{ $item->pro_ten }}">

                                                                </a>
                                                                <div class="pdLoopAction">
                                                                    <div class="listAction">
                                                                        <a href="{{ asset('cart/add/'.$item->pro_id) }}" onclick="success()" class="add-cart btnLoop Addcart" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
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
                                            @endif
                                                
                                            @endforeach
                                            

                                            
                                            

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

        @include('frontend.layout.footer')

        <div class="pageLoading"></div>
        <div class="overlayMenu"></div>
        <a href="javascript:;" class="backToTop"><i class="fa fa-angle-double-up"></i></a>
    </section>

    <script src='{{ asset('public/admin/js/jquery.fancybox.js') }}' type='text/javascript'></script>
    <link href='{{ asset('public/admin/css/jquery.fancybox.css') }}' rel='stylesheet' type='text/css' media='all' />

    <script src='{{ asset('public/admin/js/plugins.js') }}' type='text/javascript'></script>
    <script src='{{ asset('public/admin/js/inspired.js') }}' type='text/javascript'></script>
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