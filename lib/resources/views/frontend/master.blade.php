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
        @yield('title')
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <link rel="canonical" href="{{ asset('/') }}" />

    {{-- <script type='text/javascript'>
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
    </script> --}}

  
    <script async src='//hstatic.net/0/0/global/haravan-analytics.min.js?v=6' type='text/javascript'></script>

    <script src='//theme.hstatic.net/1000271724/1000376256/14/jquery.min.js?v=88' type='text/javascript'></script>

    <!--------------CSS----------->

    <link href='//theme.hstatic.net/1000271724/1000376256/14/plugins.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/styles.css?v=88' rel='stylesheet' type='text/css' media='all' />

    @yield('css')


    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:image" content="http://theme.hstatic.net/1000271724/1000376256/14/share_fb_home.png?v=88" />
    <meta property="og:image" content="https://theme.hstatic.net/1000271724/1000376256/14/share_fb_home.png?v=88" />

    <meta property="og:url" content="{{ asset('/') }}" />
    <meta property="og:site_name" content="@yield('title')" />

    <script>
        window.shop = {
            template: "index",
        };
    </script>

    {{ $setting_info[0]->st_codehead }}
</head>

<body class="insHome index">
    
    {{ $setting_info[0]->st_codebody }}

    <section class="insBody">

        <!--Home Header-->
        @include('frontend.layout.header')

        @yield('main')
        
        <!--Footer-->
        @include('frontend.layout.footer')


        @yield('script')


        <div class="pageLoading"></div>
        <div class="overlayMenu"></div>
        <a href="javascript:;" class="backToTop"><i class="fa fa-angle-double-up"></i></a>
    </section>

    

    @yield('script_product_detail')

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

    {{ $setting_info[0]->st_codefoot }}
</body>

</html>