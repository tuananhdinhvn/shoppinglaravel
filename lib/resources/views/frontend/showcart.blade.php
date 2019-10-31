@extends('frontend.master')

@section('title', 'Giỏ Hàng')


@section('css')
<link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')
<script type="text/javascript">
    function updateCart(qty, rowId){
        $.get(
            '{{ asset('cart/update') }}',
            { qty:qty, rowId:rowId },
            function(){
                location.reload();
            }
        );
    }
</script>        

@if ($cart_count==0)
    <div class="insMain">
        <section id="insCartPage" class="bg_w ajax-cart-popup">
            <div class="container">
                <div class="content">
                    <div id="AjaxifyCart" class="ajaxcart">
                        <h1 class="page-header">Giỏ Hàng</h1>

                        <div class="page-content not-item text-center">
                            <div class="img text-center">
                                <img src="{{ asset('public/upload/info/empty_cart.png') }}" alt="Không có sản phẩm nào trong giỏ hàng của bạn" />
                            </div>
                            <p>
                                Không có sản phẩm nào trong giỏ hàng của bạn
                            </p>
                            <div class="ctnBuy">
                                <a href="{{ asset('product') }}" class="btn insButton closeCartLine">Tiếp tục mua hàng </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@else
    <div class="insMain">
        <section id="insCartPage" class="bg_w ajax-cart-popup">
            <div class="container">
                <div class="content">
                    <div id="AjaxifyCart" class="ajaxcart">
                        <h1 class="page-header">Giỏ Hàng</h1>
    
                        <div class="page-content">
                            <div class="row">
                                <div class="boxCart leftCart col-md-8 col-sm-12 col-xs-12 ">

                                    <div class="cart_header_labels hidden-xs clearfix">
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_product first_item">
                                                Sản phẩm
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-3 col-md-3">
                                            <div class="cart_description item">
                                                Mô Tả
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_price item">
                                                Giá
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_quantity item">
                                                Số Lượng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_total item">
                                                Tổng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-1 col-md-1">
                                            <div class="cart_delete last_item">
                                                Xóa
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ajax_content_cart">
                                        @foreach ($cart_items as $item)
                                            <div class="list_product_cart clearfix itemCart" data-id="1025198797">
                                                <div class="cpro_item image col-xs-3 col-sm-2 col-md-2">
        
                                                    <div class="cpro_item_inner">
                                                        <a class="cart__image">
                                                            <img class="img-responsive" src="{{ asset('public/upload/product/'.$item->options->img) }}" alt="{{ $item->name }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cpro_item text-left title col-xs-9 col-sm-3 col-md-3">
                                                    <div class="cpro_item_inner">
                                                        <a class="product_name" >
                                                            {{ $item->name }}
                                                        </a>
        
                                                    </div>
                                                </div>
                                                <div class="cpro_item price col-xs-9 col-sm-2 col-md-2">
                                                    <div class="cpro_item_inner">
                                                        <span class="price product-price"><span class="money">{{ number_format($item->price, 0, ',', '.') }} ₫</span></span>
                                                    </div>
                                                </div>
                                                <div class="cpro_item qty text-center col-xs-6 col-sm-2 col-md-2">
                                                    <div class="cpro_item_inner">
                                                        <div class="ajaxcart__qty">
                                                            <input type="number" class="ajaxcart__qty-num" onchange="updateCart(this.value, '{{ $item->rowId }}')" min="1" value="{{ $item->qty }}" min="0" aria-label="quantity" pattern="[0-9]*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cpro_item line-price col-xs-12 col-sm-2 col-md-2 hidden-xs">
                                                    <div class="cpro_item_inner">
                                                        <span class="price product-price money_line"><span class="money">{{ number_format($item->price*$item->qty, 0, ',', '.') }} ₫</span></span>
                                                    </div>
                                                </div>
                                                <div class="cpro_item remove col-xs-2 col-sm-1 col-md-1">
                                                    <div class="cpro_item_inner">
                                                        <a href="{{ asset('cart/delete/'.$item->rowId) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="cart__remove ajaxcart__remove">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>


                                <div class="boxCart rightCart col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="list_button_cart clearfix">
                                        <div class="actionCart clearfix text-right">
                                            <p>
                                                <span class="cart__subtotal-title pull-left">Tổng</span>
                                                <span class="h3 cart__subtotal pull-right"><span class="money">{{ $cart_get_total }} ₫</span></span>
                                            </p>
                                            <!--<p><em>Đã bao gồm thuế và phí Shipping</em></p>-->
                                            <div class="groupButton text-center">
                                                <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('product') }}" title="Tiếp Tục Mua Sắm">Tiếp Tục Mua Sắm</a>
                                                @if (Auth::check())
                                                    <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('payment') }}" title="Thanh toán">Thanh toán</a>
                                                @else
                                                    <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('login') }}" title="Thanh toán">Thanh toán</a>
                                                @endif
                                                
                                            </div>
                                        </div>
                                        <div class="note_item">
    
                                            <div class="note_cart">
                                                <label class="control-label" for="CartSpecialInstructions">Chú Thích</label>
                                                <textarea name="note" class="form-control" placeholder="Bạn muốn mô tả rõ hơn về đơn hàng..." id="CartSpecialInstructions"></textarea>
                                            </div>
    
                                        </div>
    
                                        <div class="pd_saler">
                                            <h3>Dịch vụ & Khuyến mãi</h3>
    
                                            <p>
                                                Nhập mã ECQLJKY7QROS khi thanh toán, giảm ngay 50.000đ.
                                            </p>
    
                                            <p>
                                                Tặng mã coupon giảm 500.000đ khi đơn hàng trên 10 triệu đồng.
                                            </p>
    
                                            <p>
                                                Giao hàng miễn phí trong nội thành Tp. Hồ Chí Minh
                                            </p>
    
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endif



@endsection