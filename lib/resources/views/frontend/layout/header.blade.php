<style>
    .lang-item li{
        margin-right:10px;
        float:left;
        padding: 5px;
        border: 1px solid #cecece;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        text-align: center;
    }

    .lang-item-mobile li{
        margin-right: 10px;
        float: right;
        padding: 0px;
        border: 1px solid #cecece;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        text-align: center;
        
    }

    .lang-item-mobile li a{
        border-bottom: none !important;
        color: #fff;
    }
    
</style>

<header id="insHeaderPage" class="headerTemp">
    <div id="headerPage">
        <div class="container">
            <div class="insHeaderWrap">
                <div class="row">
                    <div id="headerLogo" class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="visible-xs visible-sm mbToggle translateY-50">
                            <a href="javascript:void(0)" class="btnMBToggleNav menuHeading">
                                <div class="icon"><span></span></div>
                            </a>
                        </div>

                        <p>
                            <a itemprop="url" href="{{ asset('/') }}"><img itemprop="logo" src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="Beauty farm" /></a>
                        </p>

                        <h1 class="hide">
                            Beauty farm
                        </h1>

                        

                        <div class="visible-xs visible-sm mbCart translateY-50">
                            <a href="{{ asset('cart/show') }}">
                                <div class="icon">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </div>
                                <span id="cartCountMB" class="numberCart" >{{ $cart_count }}</span>
                            </a>
                        </div>
                    </div>
                    <div id="headerNav" class="col-lg-7 col-md-6 col-sm-12 col-xs-12 navSiteMain">

                       
                        
                        @if (Auth::check())

                            <div class="loginMB visible-xs visible-sm">
                                <div class="wrapLogin clearfix">
                                    <div class="icon">
                                        <a href="{{ asset('account') }}"><img src="{{ asset('public/upload/info/'.Auth::user()->avatar) }}" alt=" "></a>
                                    </div>
                                    

                                    <div>
                                        <ul class="lang-item-mobile">
                                            <li>
                                                <p><a href="{!! route('user.change-language', ['vi']) !!}">VI</a></p>
                                            </li>
                                            <li>
                                                <p><a href="{!! route('user.change-language', ['en']) !!}">EN</a></p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="user">
                                        <h3>
                                            <a class="log-only" href="{{ asset('logout') }}" title="Đăng nhập">Đăng xuất</a>
                                        </h3>
                                    </div>


                                </div>
                            </div>

                        @else

                            <div class="loginMB visible-xs visible-sm">
                                <div class="wrapLogin clearfix">
                                    <div class="icon">
                                        <a href="{{ asset('account') }}"><img src="{{ asset('public/upload/info/avatar.png') }}" alt=" "></a>
                                    </div>
                                    

                                    <div>
                                        <ul class="lang-item-mobile">
                                            <li>
                                                <p><a href="{!! route('user.change-language', ['vi']) !!}">VI</a></p>
                                            </li>
                                            <li>
                                                <p><a href="{!! route('user.change-language', ['en']) !!}">EN</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                    <div class="user">    
                                        <h3>
                                            <a class="log-only" href="{{ asset('login') }}" title="Đăng nhập">Đăng nhập</a>
                                        </h3>
                                    </div>
                                    
                                </div>
                            </div>

                        @endif

                        <ul id="navMenu" class="nav-navbar notStyle clearfix text-center">

                            <li class=" active">
                                <a href="{{ asset('/') }}" class=" current" title="Trang chủ">
                                    <span>@lang('messages.home')</span>
                                </a>
                            </li>

                            {{-- <li class="">
                                <a href="" class="" title="Rau củ">
                                    <span>Về chúng tôi</span>
                                </a>
                            </li> --}}

                            <li class="liChild ">
                                <a href="{{ asset('product') }}" title="Sản phẩm" class="">
                                    <span>@lang('messages.product')</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="mainChild levlup_2" role="menu">
                                    @foreach ($productcategory_list as $item)
                                    <li class="">
                                        <a href="{{ asset('productcat/'.$item->procat_slug.'/'.$item->procat_id) }}" title="{{ $item->procat_ten }}"><span>{{ $item->procat_ten }}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="liChild ">
                                <a href="{{ asset('blog') }}" title="Sản phẩm" class="">
                                    <span>@lang('messages.blog')</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="mainChild levlup_2" role="menu">
                                    @foreach ($blogcategory_list as $item)
                                    <li class="">
                                        <a href="{{ asset('blogcat/'.$item->blogcat_slug.'/'.$item->blogcat_id) }}" title="{{ $item->blogcat_ten }}"><span>{{ $item->blogcat_ten }}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            

                            

                            <li class="">
                                <a href="{{ asset('contact') }}" class="" title="Liên hệ">
                                    <span>@lang('messages.contact')</span>
                                </a>
                            </li>

                        </ul>

                        

                        
                        <div class="visible-xs visible-sm closeMenuMB text-center">
                            <a href="javascript:void(0)" class="closeNav viewAll">Đóng</a>
                        </div>


                        

                        
                    </div>
                    <div id="headerUser" class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <div class="wrap cleafix text-right">

                            <div>
                                <ul class="lang-item">
                                    <li>
                                        <p><a href="{!! route('user.change-language', ['vi']) !!}">VI</a></p>
                                    </li>
                                    <li>
                                        <p><a href="{!! route('user.change-language', ['en']) !!}">EN</a></p>
                                    </li>
                                </ul>
                            </div>

                            
                            <div class="userBox itemUse relative">
                                <a href="{{ asset('account') }}">
                                    <div class="box">
                                        <div class="icon">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>

                                @if (Auth::check())
                                    <div id="userListDetail" class="popupLogin success">
                                        <ul class="notStyle list text-left">
                                            <li><a href="{{ asset('account') }}" title="Đăng ký"><i class="fa fa-user" aria-hidden="true"></i> @lang('messages.account')</a></li>
                                            <li><a href="{{ asset('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> @lang('messages.logout')</a></li>
                                        </ul>
                                    </div>
                                @else
                                    <div id="userListDetail" class="popupLogin success">
                                        <ul class="notStyle list text-left">
                                            <li><a href="{{ asset('register') }}" title="Đăng ký"><i class="fa fa-registered" aria-hidden="true"></i> @lang('messages.register')</a></li>
                                            <li><a href="{{ asset('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> @lang('messages.login')</a></li>
                                        </ul>
                                    </div>
                                @endif
                                

                            </div>
                            <div class="searchBox itemUse">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="icon">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>


                                <div class="frmSearch popupLogin">
                                    <form id="searchFRM" action="{{ asset('/search') }}" method="get">
                                        <i class="glyphicon glyphicon-search"></i>
                                        <input required autocomplete="off" type="text" name="keyword" id="inputSearchAuto" placeholder="" />
                                        <button type="submit" class="insButton btnSearch">
                                            @lang('messages.search')
                                        </button>
                                        {{ csrf_field() }}
                                    </form>
                                </div>

                            </div>
                            <div class="cartBox itemUse">

                                <a href="{{ asset('cart/show') }}">
                                    <div class="groupCart">
                                        <div class="box">
                                            <div class="icon">
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                <span id="cartCount" class="numberCart">{{ $cart_count }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="miniPopup cartPopup">
                                    <div class="wrap">
                                        <div class="popupHeading">
                                            <h4 class="title">
                                                Giỏ hàng
                                            </h4>
                                        </div>
                                       
         
                                        @if ($cart_count==0)
                                        <div class="popupBody">
                                            <div class="miniCart">
                                                <div class="listCart">
                                                    <p class="emptyData">
                                                        Giỏ hàng của bạn đang trống...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="popupBody">
                                            <div class="miniCart">
                                        
                                                <div class="listCart">

                                                    @foreach ($cart_items as $item)
                                                        <div class="itemCart clearfix relative" data-id="1025198797">
                                                            <div class="row">
                                                                <div class="col-xs-3 image">
                                                                    <div class="img">
                                                                        <a href="{{ asset('product/'.$item->options->pro_slug.'/'.$item->options->pro_id) }}">
                                                                            <img src="{{ asset('public/upload/product/'.$item->options->img) }}" alt="{{ $item->name }}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-9 info">
                                                                    <div class="detail">
                                                                        <a class="itemTitle" href="{{ asset('product/'.$item->options->pro_slug.'/'.$item->options->pro_id) }}">
                                                                            <h3>{{ $item->name }}</h3>
                                                                        </a>
                                                                        <p class="itemPrice pdPrice">
                                                                            <span class="price">{{ number_format($item->price, 0, ',', '.') }} ₫</span> x <span class="qty">{{ $item->qty }}</span>
                                                                        </p>
                                                                        <p class="remove">
                                                                            <a href="{{ asset('cart/delete/'.$item->rowId) }}" ><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa sản phẩm</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                        
                                                </div>
                                                <div class="miniCartButtons">
                                                    <div class="wrap clearfix text-center">
                                                        <a href="{{ asset('cart/show') }}" class="insButton viewCart">Giỏ hàng</a>
                                                        @if (Auth::check())
                                                            <a href="{{ asset('payment') }}" class="insButton checkout">thanh toán</a>
                                                        @else
                                                            <a href="{{ asset('login') }}" class="insButton checkout">thanh toán</a>
                                                        @endif
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                        @endif
                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>