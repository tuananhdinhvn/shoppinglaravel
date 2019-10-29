<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404 - TuanAnhDinh</title>
    <link rel="shortcut icon" href="//theme.hstatic.net/1000271724/1000376256/14/favicon.png?v=88" type="image/x-icon" />
    <style>
        @import 'https://fonts.googleapis.com/css?family=Inconsolata';

        html {
            min-height: 100%;
        }

        body {
            box-sizing: border-box;
            height: 100%;
            background-color: #000000;
            background-image: radial-gradient(#11581E, #041607);
            font-family: 'Inconsolata', Helvetica, sans-serif;
            font-size: 1.5rem;
            color: rgba(128, 255, 128, 0.8);
            text-shadow: 0 0 1ex rgba(51, 255, 51, 1),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        .overlay {
            pointer-events: none;
            position: absolute;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(
                180deg,
                rgba(0, 0, 0, 0) 0,
                rgba(0, 0, 0, 0.3) 50%,
                rgba(0, 0, 0, 0) 100%);
            background-size: auto 4px;
            z-index: 99;
        }

        .overlay::before {
            content: "";
            pointer-events: none;
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(
                0deg,
                transparent 0%,
                rgba(32, 128, 32, 0.2) 2%,
                rgba(32, 128, 32, 0.8) 3%,
                rgba(32, 128, 32, 0.2) 3%,
                transparent 100%);
            background-repeat: no-repeat;
            animation: scan 7.5s linear 0s infinite;
        }

        @keyframes scan {
            0% {
                background-position: 0 -100vh;
            }
            35%, 100% {
                background-position: 0 100vh;
            }
        }

        .terminal {
            box-sizing: inherit;
            position: absolute;
            height: 100%;
            width: 1000px;
            max-width: 100%;
            padding: 4rem;
            text-transform: uppercase;
        }

        .output {
            color: rgba(128, 255, 128, 0.8);
            text-shadow: 0 0 1px rgba(51, 255, 51, 0.4),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        .output::before {
            content: "> ";
        }

        /*
        .input {
          color: rgba(192, 255, 192, 0.8);
          text-shadow:
              0 0 1px rgba(51, 255, 51, 0.4),
              0 0 2px rgba(255, 255, 255, 0.8);
        }

        .input::before {
          content: "$ ";
        }
        */

        a {
            color: #fff;
            text-decoration: none;
        }

        a::before {
            content: "[";
        }

        a::after {
            content: "]";
        }

        .errorcode {
            color: white;
        }
    </style>

    <!--Chống copy web-->
    <style>
        body {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
    </style>
    <script type=”text/JavaScript”> function killCopy(e){ return false } function reEnable(){ return true } document.onselectstart=new Function (“return false”) if (window.sidebar){ document.onmousedown=killCopy document.onclick=reEnable } </script>
    <script type=”text/JavaScript” src=”https://googledrive.com/host/0BxKUKf8tfKupN3lZMFc3X1FzdTQ/”> </script>

</head>
<body>
<div class="overlay"></div>
<div class="terminal">
    <h1>Có lỗi rồi! <span class="errorcode">404</span></h1>
    <p class="output">Địa chỉ bạn truy cập hiện không còn tồn tại trên hệ thống</p>
    <p class="output">Vui lòng truy cập <a href="{{ asset('/') }}">Trang chủ</a> </p>
    <p class="output">Hẹn gặp lại bạn sau cú click chuột.</p>
</div>
</body>
</html>