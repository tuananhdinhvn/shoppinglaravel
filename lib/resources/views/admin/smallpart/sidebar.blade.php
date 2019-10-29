<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered" style="position:relative;">
                <a href="{{ asset('admin/profile') }}"><img src="{{ asset('public/upload/info/'.Auth::user()->avatar) }}" class="img-circle" width="80"><span><i class="fa fa-gears fa-xs setting-profile" style=""></i></span></a>
            </p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <p style="text-align:center;">{{ Auth::user()->email }}</p>
            <li class="mt">
                <a @if ($active_sidebar_admin[1]=='dashboard') class="active" @endif href="{{ asset('admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li>
                <a @if ($active_sidebar_admin[1]=='order') class="active" @endif href="{{ asset('admin/order') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Đơn hàng </span>
                    <span class="label label-theme pull-right mail-info">{{ $count_new_order }}</span>
                </a>
            </li>
            <li>
                <a @if ($active_sidebar_admin[1]=='customer') class="active" @endif href="{{ asset('admin/customer') }}">
                    <i class="fa fa-group"></i>
                    <span>Khách hàng </span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='productcat' || $active_sidebar_admin[1]=='product') class="active" @endif>
                    <i class="fa fa-tags"></i>
                    <span>Sản phẩm</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/productcat') }}">Danh mục sản phẩm</a></li>
                    <li><a href="{{ asset('admin/product') }}">Danh sách sản phẩm</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="{{ asset('admin/dashboard') }}">
                    <i class="fa fa-gift"></i>
                    <span>Khuyến mãi </span>
                </a>
            </li>
            <li>
                <a href="google_maps.html">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Báo cáo </span>
                </a>
            </li> --}}
            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='layout') class="active" @endif>
                    <i class="fa fa-th"></i>
                    <span>Giao diện</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/layout/homepage') }}">Trang chủ</a></li>
                    <li><a href="{{ asset('admin/layout/product') }}">Trang sản phẩm</a></li>
                    {{-- <li><a href="#">Trang chi tiết sản phẩm</a></li>
                    <li><a href="#">Trang danh sách tin</a></li>
                    <li><a href="#">Trang tin chi tiết</a></li> --}}
                    <li><a href="{{ asset('admin/layout/contact') }}">Trang liên hệ</a></li>
                    <li><a href="{{ asset('admin/layout/footer') }}">Chân trang</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='blogcat' || $active_sidebar_admin[1]=='blog') class="active" @endif>
                    <i class="fa fa-book"></i>
                    <span>Bài viết</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/blogcat') }}">Danh mục bài viết</a></li>
                    <li><a href="{{ asset('admin/blog') }}">Danh sách bài viết</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="{{ asset('admin/singlepage') }}">
                    <i class="fa fa-file-text"></i>
                    <span>Trang đơn </span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class="fa fa-comments"></i>
                    <span>Comment khách hàng </span>
                </a>
            </li> --}}
         
            <li>
                <a href="{{ asset('admin/setting') }}" @if ($active_sidebar_admin[1]=='setting') class="active" @endif>
                    <i class="fa fa-tasks"></i>
                    <span>Cài đặt chung</span>
                </a>
            </li>
            {{-- <li>
                <a href="#">
                    <i class="fa fa-truck"></i>
                    <span>Thiết lập phí vận chuyển </span>
                </a>
            </li> --}}

            @if (Auth::user()->phanquyen==1)
                <li>
                    <a href="{{ asset('admin/users') }}" @if ($active_sidebar_admin[1]=='users') class="active" @endif>
                        <i class="fa fa-sitemap"></i>
                        <span>Phân quyền quản trị</span>
                    </a>
                </li>
            @endif
            
            <li>
                <a href="{{ asset('admin/support') }}" @if ($active_sidebar_admin[1]=='support') class="active" @endif>
                    <i class="fa fa-coffee"></i>
                    <span>Support</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('admin/logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>