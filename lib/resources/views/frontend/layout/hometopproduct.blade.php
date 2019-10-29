<section id="insProductTabs" class="seasionPage">
    <div class="container">
        <div class="groupProductTabs">
            <div class="effectTitle">
                <h2>Sản phẩm nổi bật</h2>
                <div class="borderLine">
                    <div class="icon">
                        <img src="//theme.hstatic.net/1000271724/1000376256/14/icon_border.png?v=88" alt="<span>Sản phẩm </span>nổi bật nhất">
                    </div>
                </div>
            </div>


            <div class="tabsCatelogy">

                <ul class="tabHeading shadowStyle nav nav-tabs" role="tablist">
                    @if ($getindex->topproduct_1>0)
                        <li role="presentation" class="active">
                            <a href="#groupPdTab-1" aria-controls="groupPdTab-1" role="tab" data-toggle="tab">
                            @foreach ($getindex_topproductcat_1 as $item)
                                {{ $item->procat_ten }}
                            @endforeach
                            </a>
                        </li>
                    @endif

                    @if ($getindex->topproduct_2>0)
                        <li role="presentation">
                            <a href="#groupPdTab-2" aria-controls="groupPdTab-2" role="tab" data-toggle="tab">
                            @foreach ($getindex_topproductcat_2 as $item)
                                {{ $item->procat_ten }}
                            @endforeach
                            </a>
                        </li>
                    @endif

                    @if ($getindex->topproduct_3>0)
                        <li role="presentation">
                            <a href="#groupPdTab-3" aria-controls="groupPdTab-3" role="tab" data-toggle="tab">
                            @foreach ($getindex_topproductcat_3 as $item)
                                {{ $item->procat_ten }}
                            @endforeach
                            </a>
                        </li>
                    @endif
                    
                    @if ($getindex->topproduct_4>0)
                        <li role="presentation">
                            <a href="#groupPdTab-4" aria-controls="groupPdTab-4" role="tab" data-toggle="tab">
                            @foreach ($getindex_topproductcat_4 as $item)
                                {{ $item->procat_ten }}
                            @endforeach
                            </a>
                        </li>
                    @endif
                </ul>

                <div class="tabContent tab-content">
                    
                    <div role="tabpanel" class="tab-pane fade in active " id="groupPdTab-1">
                        <div class="pdListItem pdListTab">

                            <div class="row">
                                @foreach ($getindex_topproduct_list_1 as $item)

                                    <div class="itemProduct col-md-3 col-sm-3 col-xs-6">

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
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="groupPdTab-2">
                        <div class="pdListItem pdListTab">

                            <div class="row">
                                @foreach ($getindex_topproduct_list_2 as $item)

                                    <div class="itemProduct col-md-3 col-sm-3 col-xs-6">
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
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="groupPdTab-3">
                        <div class="pdListItem pdListTab">

                            <div class="row">
                                @foreach ($getindex_topproduct_list_3 as $item)
                                    <div class="itemProduct col-md-3 col-sm-3 col-xs-6">
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
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="groupPdTab-4">
                        <div class="pdListItem pdListTab">

                            <div class="row">
                                @foreach ($getindex_topproduct_list_4 as $item)
                                    <div class="itemProduct col-md-3 col-sm-3 col-xs-6">
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
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>