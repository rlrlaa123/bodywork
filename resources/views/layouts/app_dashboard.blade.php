<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '바이웍') }}</title>
    <meta name="description" content=" 방이동 퍼스널트레이닝. 개인pt샵 바디웍입니다.">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js" async></script>
    @include('layouts.partial.common_style')
    @include('layouts.partial.common_dashboard_style')
    @yield('style')
</head>
<body style="margin:0; text-align: center;">
@include('layouts.partial.navigation_mobile')
<header style="font-size: 2vw;">
    <a href="/">
        <img class="header-image" src="/img/logo.jpg">
        BODY WORK
    </a>
</header>

@include('layouts.partial.navigation')
@yield('content')

<!-- Scripts -->
@include('layouts.partial.common_script')
@yield('script')
</body>

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
</html>