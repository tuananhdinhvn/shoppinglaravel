@extends('frontend.master')

@section('title')
{{ $setting_info[0]->st_title }} 
@endsection

@section('css')
<link href='{{ asset('css/home.css') }}' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')

<div class="insMain">

    <!--Home Slider-->
    @include('frontend.layout.homeslider')

    <!--Home Banner Top-->
    @include('frontend.layout.homebannertop')

    <!--Home About Us-->
    @include('frontend.layout.homeaboutus')

    <!--Home Top Product-->
    @include('frontend.layout.hometopproduct')

    <!--Home Promotion-->
    @include('frontend.layout.homecountdown')

   <!--Home Whyus-->
   @include('frontend.layout.homewhyus')

    {{-- <!--Home Brand-->
        @include('frontend.layout.homebrand')

        <!--Home Review-->
        @include('frontend.layout.homereview') --}}

        
    <!--Home Blog Section-->
    @include('frontend.layout.homeblog')

</div>

@endsection


@section('script')
    <!--Popup-->
    {{-- @include('frontend.layout.popup') --}}

    <script>
        jQuery(document).ready(function($) {
            setTimeout(function() {
                if (sessionStorage.mega_popup == null) {
                    $('#insPopupNewletter').addClass('active');
                }
            }, 500)
            $("#popup-newletter form").submit(function(e) {
                e.preventDefault();
                $.post('/account/contact', {
                    form_type: "customer",
                    utf8: "✓",
                    "contact": {
                        "tags": "Khách hàng đăng ký nhận bản tin",
                        "first_name": '',
                        "last_name": '',
                        "email": $(this).find('input[name="contact[email]"]').val()
                    }
                }, function(r) {
                    $('#insPopupNewletter').removeClass('active');
                    swal({
                        title: "Hoàn thành!",
                        text: "Đăng ký bản tin thành công...",
                        icon: "success",
                        button: "Đóng",
                    })
                });
            });
        });
        $(document).on('click', '.overlay, .close_newletter', function(e) {
            e.preventDefault();
            $('#insPopupNewletter').removeClass('active');
            sessionStorage.mega_popup = 'show';
        })
    </script>

<script src='{{ asset('js/jquery.countdown.min.js') }}' type='text/javascript'></script>

@endsection

       
