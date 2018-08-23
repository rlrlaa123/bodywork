<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="google-site-verification" content="cOAveFcpl0J7z3FJpsZNSRW4Qw9E4FWwADNrd3Eh7Qc" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>바디웍</title>
    <meta name="description" content=" 방이동 퍼스널트레이닝. 개인pt샵 바디웍입니다.">

    @include('layouts.partial.bootstrap')
    @include('layouts.partial.jquery_js')
    @include('layouts.partial.boostrap_js')
    @include('layouts.partial.common_style')
    @include('layouts.partial.common_dashboard_style')
    @yield('style')

    <style>
        header {
            display: flex;
            justify-content: space-between;
        }

        @media(orientation: portrait) {
            header {
                display: block;
                justify-content: space-between;
            }

            .sns-wrapper {
                display: none;
            }

            header div:nth-child(1) {
                display: none;
            }

            footer p {
                font-size: 10px;
            }

            header a {
                font-size: 15px;
            }
        }
    </style>
</head>
<body style="margin:0; text-align: center;">
@include('layouts.partial.navigation_mobile')
<header style="font-size: 2vw;">
    <div style="width: 100px;"></div>
    <div>
        <a href="/">
            <img class="header-image" src="/img/logo.jpg">
            BODY WORK
        </a>
    </div>
    <div class="sns-wrapper">
        <a href="https://cafe.naver.com/bodywork119"><img src="/img/sns3.jpg" width="30px"></a>
        <a href="https://blog.naver.com/crossfita2f"><img src="/img/sns1.png" width="30px"></a>
        <a href="https://www.instagram.com/bodywork119/"><img src="/img/sns2.png" width="30px"></a>
    </div>
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
        <p>대표: 이우석,장정훈/TEL: (02)408-3966/사업자등록번호:501-37-27997</p>
        <p>Copyright all right reserved BODYWORK</p>
    </div>
</footer>
</html>