@extends('frontend.master')

@section('title', 'Đăng nhập')


@section('css')
    <link href='{{ asset('css/users.css') }}' rel='stylesheet' type='text/css' media='all' />
    <link href='{{ asset('css/pages.css') }}' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')

<div class="insMain">
    <section id="new-login">
        <div class="fv-login bg_w">
            <div class="container">
                {{-- <div id="loginApp" class="boxLogin">
                    <h4>
                        Đăng nhập bằng
                    </h4>
                    <div class="loginSocial text-center">
                        <button type="button" class="btsocialloginfb">Facebook</button>
                        <button type="button" class="btsociallogingg">Google+</button>
                        <script src="//multiapp.haravan.com/social-login/customer/scriptv2.js"></script>
                    </div>
                </div>
                <div class="liner-or">
                    <span>Hoặc</span>
                </div> --}}
                <div class="box-login-two">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                              

                                @if (Session::has('confirm_success'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('confirm_success') !!}</p>
                                    </div>
                                @elseif (Session::has('check_mail'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-danger">{!! Session::get('check_mail') !!}</p>
                                    </div>
                                @elseif (Session::has('invalid-email'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-danger">{!! Session::get('invalid-email') !!}</p>
                                    </div>
                                @elseif (Session::has('valid-email'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('valid-email') !!}</p>
                                    </div>
                                @elseif (Session::has('reset_done'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('reset_done') !!}</p>
                                    </div>
                                @endif

                                


                            <h1 class="title-box-login">
                                <strong>Đăng nhập để thanh toán đơn hàng <br/>và nhận những ưu đãi hấp dẫn</strong>
                            </h1>
                            <br/>
                            
                            <div class="content-cus-form cus-login">
                                <div id='login'>
                                    <form id='customer_login' method='post'>
                                        @include('error.note')
                                        

                                        <div class="col_full">
                                            <span class="not-null">*</span>
                                            <span class="icon_checkout ico-email"></span>
                                            <input type="email" name="email" placeholder="Email của bạn" required value="" class="form-control" />
                                        </div>

                                        <div class="col_full">
                                            <span class="not-null">*</span>
                                            <span class="icon_checkout ico-pass"></span>
                                            <input type="password" name="password" placeholder="Nhập mật khẩu" required value="" class="form-control" />
                                        </div>

                                        <div class="col_full nobottommargin action">
                                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type='submit' value="login">Đăng nhập</button>
                                            <div class="col-md-6">
                                                <a href="#" onclick="showRecoverPasswordForm();return false;" class="">Quên mật khẩu?</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ asset('register') }}"  class="">Đăng ký tài khoản</a>
                                            </div>
                                        </div>

                                        <!--</form>-->
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                <div id="recover-password" style="display:none;" class="userbox">

                                    
                                    <div class="acctitle"><i class="fa fa-refresh"></i>Quên mật khẩu</div>
                                    <div class="">
                                        <form action="{{ asset('/forgot-password') }}" class="form-horizontal form-without-legend nobottommargin" method="get" >
                                           
                                            <div class="col_full">
                                                <span class="not-null">*</span>
                                                <span class="icon_checkout ico-email"></span>
                                                <input required type="text" autocomplete="off"  id="recover-email" name="email" value="" class="form-control" placeholder="Email của bạn" />
                                            </div>

                                            <div class="col_full nobottommargin text-center">
                                                <button class="button button-3d button-black nomargin" type="submit">Gửi mã xác nhận</button>
                                                <button class="button button-3d button-red nomargin cancel" onclick="hideRecoverPasswordForm(); return false;" name="">Hủy</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('login').style.display = 'none';
        }

        function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        }
        $('#accepts_marketing').click(function() {
            if ($(this).is(':checked'))
                $('#marketingCheck').val(true);
            else
                $('#marketingCheck').val(false);
        })
    </script>
</div>

@endsection    