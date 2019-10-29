@extends('frontend.master')

@section('title', 'Trang sản phẩm')


@section('css') 
<link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')

<style>
.checkBoxList .active a{
    font-weight:bold;
    color: #49a010;
}
</style>

<div class="insMain">

    <section id="insCollection" class="pageTemplate">

        <div class="insBreadcrumb ">
            <div class="banner-breadcrumb" style="background: url(//theme.hstatic.net/1000271724/1000376256/14/breacrumb_banner.jpg?v=88) no-repeat center center;">
                <h2>Tất cả sản phẩm</h2>
                <ul>
                    <li><a href="{{ asset('/') }}" target="_self">Trang chủ</a></li>

                    <li class="active"><span>Tất cả sản phẩm</span></li>

                </ul>
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
                                                    GIÁ
                                                </h4>
                                            </div>
                                            <div class="filterContent">
                                                <form action="" method="get">
                                                    <ul class="checkBoxList">
                                                       
                                                        <li class="{{ Request::get('price') == 1 ? 'active' : '' }}" >
                                                            <a href="{{ request()->fullUrlWithQuery(['price' => 1]) }}">
                                                                <label for="p1">
                                                                    <span class="button"></span> Dưới 20,000₫
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="{{ Request::get('price') == 2 ? 'active' : '' }}">
                                                            <a href="{{ request()->fullUrlWithQuery(['price' => 2]) }}">
                                                                <label for="p2">
                                                                    <span class="button"></span> 20,000₫ - 30,000₫
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="{{ Request::get('price') == 3 ? 'active' : '' }}">
                                                            <a href="{{ request()->fullUrlWithQuery(['price' => 3]) }}">
                                                                <label for="p3">
                                                                    <span class="button"></span> 30,000₫ - 50,000₫
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="{{ Request::get('price') == 4 ? 'active' : '' }}">
                                                            <a href="{{ request()->fullUrlWithQuery(['price' => 4]) }}">
                                                                <label for="p4">
                                                                    <span class="button"></span> 50,000₫ - 100,000₫
                                                                </label>
                                                            </a>
                                                        </li>
                                                        <li class="{{ Request::get('price') == 5 ? 'active' : '' }}">
                                                            <a href="{{ request()->fullUrlWithQuery(['price' => 5]) }}">
                                                                <label for="p5">
                                                                    <span class="button"></span> Trên 100,000₫
                                                                </label>
                                                            </a>
                                                        </li>
                                                    
                                                    </ul>
                                                </form>
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

                            <div class="collectionBanner">
                                <div class="banner">

                                    <img src="{{ asset('public/upload/template/'.$product_admin->product_banner) }}" alt="Products" />

                                </div>
                            </div>

                            <div class="collection_head relative">
                                <div class="page_head">
                                    <h1 class="collection_title">
                                        Tất cả sản phẩm
                                    </h1>
                                </div>

                                <div class="browse-tags ">
                                    <form action="" id="search_sort" method="get">
                                        <span>Sắp xếp theo:</span> 
                                        <span class="custom-dropdown ">
                                            <select class="sort-by search_sort" name="search_sort">
                                                <option value="default" >Mặc định</option>
                                                <option value="price-asc" {{ Request::get('search_sort') == 'price-asc' ? 'selected="selected"' : '' }} >Giá: Tăng dần</option>
                                                <option value="price-desc" {{ Request::get('search_sort') == 'price-desc' ? 'selected="selected"' : '' }} >Giá: Giảm dần</option>
                                                <option value="title-asc" {{ Request::get('search_sort') == 'title-asc' ? 'selected="selected"' : '' }} >Tên: A-Z</option>
                                                <option value="title-desc" {{ Request::get('search_sort') == 'title-desc' ? 'selected="selected"' : '' }} >Tên: Z-A</option>
                                                <option value="created-asc" {{ Request::get('search_sort') == 'created-asc' ? 'selected="selected"' : '' }} >Cũ nhất</option>
                                                <option value="created-desc" {{ Request::get('search_sort') == 'created-desc' ? 'selected="selected"' : '' }} >Mới nhất</option>
                                            </select>
                                        </span>
                                    </form>
                                    
                                </div>

                            </div>



                            <!-- PRODUCT LIST -->
                            <div id="pd_collection">

                                <div class="pdListItem threePdList clearfix">
                                    <div class="row">

                                        @foreach ($product_list as $item)
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

                                        {{ $product_list->links() }}

                                    </div>
                                </div>

                            </div>
                            
                            <!--Modal success order-->
                            @include('frontend.layout.success_order')

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

@endsection

@section('script')
    <script>
        $(function(){
            $('.search_sort').change(function(){
                $('#search_sort').submit();
            });
        });
        
    </script>
@endsection