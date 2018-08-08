<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>바디웍 관리자</title>
    <meta name="description" content=" 바디웍 관리자 페이지 입니다.">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js" async></script>
    @include('layouts.partial.admin_common_style')
    @yield('style')
    <style>
        a {
            color: black;
        }

        footer {
            margin: 0;
            padding: 20px 50px;
            display: grid;
            grid-template-columns: 15% 85%;
            background-color: #4b4b4b;
            color: white;
            text-align: left;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-image {
            width: 100px;
            height: 100px;
            border-radius: 50px;
        }
    </style>
</head>
<body style="margin:0; text-align: center;">
@yield('content')
<footer>
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="/img/logo.jpg" class="footer-image">
    </div>
    <div>
        <p>상호명:바디웍휘트니스/주소:서울특별시 송파구 오금동 위례성대로 20길 23 신승빌딩3층</p>
        <p>대표: 이우석,장정훈/TEL: (02)408-3966/사업자등록번호:501-37-279974</p>
        <p>Copyright all right reserved BODYWORK</p>
    </div>
</footer>
<!-- Scripts -->
@yield('script')
</body>
</html>
