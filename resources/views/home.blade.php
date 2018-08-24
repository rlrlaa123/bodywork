@extends('layouts.app')
@section('style')
    <style>
        h3 {
            font-size: 2.5vw;
        }

        p {
            font-size: 1vw;
        }

        @media screen and (min-width: 1024px) and (max-width: 1440px) {
           #main-carousel-inner img {
               height: 550px;
           }


            .bodywork-menu-text {
                border: 1px solid white;
                border-radius: 20px;
                width: 180px;
                height: 40px;
                background: transparent;
                color: white;
                font-size: 1.5vw;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
            }

            .before-after-more-btn {
                width: 70px;
                height: 30px;
                border: 1px solid white;
                border-radius: 20px;
                background-color: #556169;
                color: white;
                font-size: 1vw;
                padding: 5px;
                cursor: pointer;
                box-shadow: 4px 4px 4px #5c5c5c;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
           #main-carousel-inner img {
               height: 550px;
           }


            .bodywork-menu-text {
                border: 1px solid white;
                border-radius: 20px;
                width: 180px;
                height: 30px;
                background: transparent;
                color: white;
                font-size: 1.5vw;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
            }

            .before-after-more-btn {
                width: 70px;
                height: 30px;
                border: 1px solid white;
                border-radius: 20px;
                background-color: #556169;
                color: white;
                font-size: 1vw;
                padding: 5px;
                cursor: pointer;
                box-shadow: 4px 4px 4px #5c5c5c;
            }
        }

        @media screen and (min-width: 1441px) {
           #main-carousel-inner img {
               height: 750px;
           }

            .bodywork-menu-text {
                border: 1px solid white;
                border-radius: 20px;
                width: 300px;
                height: 60px;
                background: transparent;
                color: white;
                font-size: 1.5vw;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
            }

            .before-after-more-btn {
                width: 120px;
                height: 40px;
                border: 1px solid white;
                border-radius: 20px;
                background-color: #556169;
                color: white;
                font-size: 1vw;
                padding: 5px;
                cursor: pointer;
                box-shadow: 4px 4px 4px #5c5c5c;
            }
        }

        @media screen and (max-width: 768px) and (orientation: landscape) {
           #main-carousel-inner img {
               height: 550px;
           }


            .bodywork-menu-text {
                border: 1px solid white;
                border-radius: 20px;
                width: 180px;
                height: 30px;
                background: transparent;
                color: white;
                font-size: 1.5vw;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
            }

            .before-after-more-btn {
                width: 70px;
                height: 30px;
                border: 1px solid white;
                border-radius: 20px;
                background-color: #556169;
                color: white;
                font-size: 1vw;
                padding: 5px;
                cursor: pointer;
                box-shadow: 4px 4px 4px #5c5c5c;
            }
        }

        #main-carousel-indicator {
            bottom: -40px;
        }

        #main-carousel-indicator li {
            background-color: black;
            width: 50px;
            height: 5px;
        }

        #main-carousel-indicator .active {
            background-color: orange;
        }

        .before-after-wrapper {
            margin: 50px;
            margin-top: 100px;
            text-align: center;
            background-color: #556169;
            color: white;
            padding: 20px;
        }

        #carouselExampleControls {
            display: none;
        }

        #recipeCarousel {
            width: 90%;
            margin: auto;
        }

        .before-after-carousel-item img {
            width: 90%;
            height: 200px;
        }

        #before-after-carousel-indicator {
            bottom: -40px;
        }

        #before-after-carousel-indicator li {
            background-color: white;
            width: 30px;
            height: 4px;
        }

        #before-after-carousel-indicator .active {
            background-color: orange;
        }

        .bodywork-menu-wrapper {
            background-color: #64947f;
            color: white;
            margin: 50px;
            text-align: center;
            padding: 20px;
        }

        .bodywork-menu-container {
            display: grid;
            display: -ms-grid;
            grid-template-columns: repeat(2, 50%);
            -ms-grid-columns: 50% 50%;
            /*grid-gap: 30px;*/
            width: 90%;
            margin: auto;
        }


        .bodywork-menu-container div{
            cursor: pointer;
            margin: 5px;
        }

        .bodywork-menu-container div:nth-child(1) {
            -ms-grid-row: 1;
            -ms-grid-column: 1;

        }

        .bodywork-menu-container div:nth-child(2) {
            -ms-grid-row: 1;
            -ms-grid-column: 2;
        }

        .bodywork-menu-container div:nth-child(3) {
            -ms-grid-row: 2;
            -ms-grid-column: 1;

        }

        .bodywork-menu-container div:nth-child(4) {
            -ms-grid-row: 2;
            -ms-grid-column: 2;
        }

        .bodywork-menu {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('img/menu.png');
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 300px;
            cursor: pointer;
        }

        .bodywork-call-wrapper {
            display: none;
            background-color: #3b3b3b;
            height: 100px;
            align-items: center;
            color: white;
            border: 1px solid black;
        }

        .bodywork-call-box {
            display: grid;
            grid-template-columns: 33.3% 33.3% 33.3%;
        }

        /*.bodywork-call-container:nth-child(1) {*/
            /*background-image: url('/img/main2.jpg');*/
            /*-webkit-background-size: 100%;*/
            /*background-size: 100%;*/
            /*opacity: 0.9;*/
        /*}*/

        /*.bodywork-call-container:nth-child(2) {*/
            /*background-image: url('/img/main2.jpg');*/
            /*-webkit-background-size: 100%;*/
            /*background-size: 100%;*/
            /*opacity: 0.9;*/
        /*}*/

        /*.bodywork-call-container:nth-child(3) {*/
            /*background-image: url('/img/main2.jpg');*/
            /*-webkit-background-size: 100%;*/
            /*background-size: 100%;*/
            /*opacity: 0.9;*/
        /*}*/

        .bodywork-call-container {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            border: 1px solid #f9f9f9;
            margin: 10px;
            height: 50px;
            padding: 5px;
            font-size: 11px;
            box-shadow: 4px 4px 4px black;
        }

        .owl-prev {
            position: absolute;
            left: 0;
            top: 45%;
            color: black !important;
            opacity: 0.7;
            background-color: white !important;
            font-weight: bold;
        }

        .owl-next {
            position: absolute;
            right: 0;
            top: 45%;
            color: black !important;
            opacity: 0.7;
            background-color: white !important;
        }

        .bodywork-kakao-wrapper {
            display: none;
        }

        @media (orientation: portrait) {
            #main-carousel-inner img {
                height: 250px;
            }

            .owl-prev {
                top: 50px;
            }

            .owl-next {
                top: 50px;
            }
            #recipeCarousel {
                display: none;
            }

            #carouselExampleControls {
                display: block;
            }

            .before-after-title-wrapper h3 {
                font-size: 20px;
            }

            .before-after-title-wrapper p {
                font-size: 11px;
            }

            .bodywork-menu-wrapper h3 {
                font-size: 20px;
            }

            .bodywork-menu-wrapper p {
                font-size: 11px;
            }

            .bodywork-menu-text {
                border: 1px solid white;
                border-radius: 20px;
                width: 180px;
                height: 30px;
                background: transparent;
                color: white;
                font-size: 1.5vw;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
            }

            .before-after-wrapper {
                margin: 50px 0;
                padding: 25px 0;
            }

            .before-after-more-btn {
                width: 70px;
                height: 30px;
                border: 1px solid white;
                border-radius: 20px;
                background-color: #556169;
                color: white;
                font-size: 11px;
                padding: 5px;
                cursor: pointer;
                box-shadow: 4px 4px 4px #5c5c5c;
                margin-top: 0;
            }

            .bodywork-menu-wrapper {
                margin: 50px 0;
                padding: 10px;
            }

            .bodywork-menu-container {
                grid-gap: unset;
                width: unset;
                margin: unset;
            }

            .bodywork-menu {
                height: 120px;
                background-size: 90%;
            }

            .bodywork-menu-text {
                width: 70%;
                height: 25px;
                font-size: 11px;
            }

            .carousel-item img {
                width: 100%;
                height: 250px;
            }

            .bodywork-menu-container div{
                cursor: pointer;
                margin: 0;
            }

            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
            }

            .bodywork-call-wrapper {
                display: grid;
            }

            .bodywork-kakao-wrapper {
                display: block;
                background-color: #fce94e;
                color: #402a2d;
                padding-top: 10px;
            }

            .bodywork-kakao-container {
                display: grid;
                grid-template-columns: 33.3% 33.3% 33.3%;
            }

            .bodywork-kakao {
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 20px;
                margin: 10px;
                height: 50px;
                padding: 5px;
                font-size: 11px;
                background-color: #402a2d;
                color: white;
                box-shadow:2px 2px 2px 2px #999;
            }

            .owl-carousel img {
                height: 125px;
            }
        }
    </style>
@endsection
@section('content')
    <div id="carouselMainIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol id="main-carousel-indicator" class="carousel-indicators">
            <li data-target="#carouselMainIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselMainIndicators" data-slide-to="1"></li>
            <li data-target="#carouselMainIndicators" data-slide-to="2"></li>
        </ol>
        <div id="main-carousel-inner" class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ $home->link1 }}">
                    <img class="d-block w-100" src="/{{ $home->home1 }}" alt="First slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ $home->link2 }}">
                    <img class="d-block w-100" src="/{{ $home->home2 }}" alt="Second slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ $home->link3 }}">
                    <img class="d-block w-100" src="/{{ $home->home3 }}" alt="Third slide">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselMainIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselMainIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="before-after-wrapper">
        <div class="before-after-title-wrapper">
            <h3>Before & After</h3>
            <p>바디웍 회원님들의 비포애프터 입니다.</p>
        </div>
        <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item"><a href="{{ $home->bf1_link }}"><img class="img-fluid" src="/{{ $home->bf1 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf2_link }}"><img class="img-fluid" src="/{{ $home->bf2 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf3_link }}"><img class="img-fluid" src="/{{ $home->bf3 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf4_link }}"><img class="img-fluid" src="/{{ $home->bf4 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf5_link }}"><img class="img-fluid" src="/{{ $home->bf5 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf6_link }}"><img class="img-fluid" src="/{{ $home->bf6 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf7_link }}"><img class="img-fluid" src="/{{ $home->bf7 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf8_link }}"><img class="img-fluid" src="/{{ $home->bf8 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf9_link }}"><img class="img-fluid" src="/{{ $home->bf9 }}"></a></div>
                </div>

                <div class="owl-nav">
                    <div class="owl-prev"><</div>
                    <div class="owl-next">></div>
                </div>
            </div>
        </div>
        <button class="before-after-more-btn"><a href="/bodychallenger/2">더보기</a></button>
    </div>

    <div class="bodywork-menu-wrapper">
        <h3>BODY WORK</h3>
        <p>그들은 어떻게 다이어트에 성공했을까?</p>
        <div class="bodywork-menu-container">
            <div onclick="location.href='/bodychallenger/2'">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">8주 바디체인지</button>
                </div>
            </div>
            <div onclick="location.href='/event'">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">이벤트</button>
                </div>
            </div>
            <div onclick="location.href='/branch/1/1'">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">오시는 길</button>
                </div>
            </div>
            <div onclick="location.href='/lesson'">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">상담신청</button>
                </div>
            </div>
        </div>
    </div>

    <div class="bodywork-kakao-wrapper">
        <p style="margin: 0; text-align: center; font-size: 11px">
            <img src="/img/kakaoplus.png" width="15px" style="margin-right: 5px;">
            클릭하시면 카카오 플러스 친구 페이지로 이동합니다.
        </p>
        <div class="bodywork-kakao-container">
            <div class="bodywork-kakao" onclick="location.href='http://pf.kakao.com/_VZdxoC'">
                <span>본점 1호점<br> 친구추가</span>
            </div>
            <div class="bodywork-kakao" onclick="location.href='http://pf.kakao.com/_cpSAj'">
                <span>방이 2호점<br> 친구추가</span>
            </div>
            <div class="bodywork-kakao" onclick="location.href='http://pf.kakao.com/_pxjpxoC'">
                <span>오금 3호점<br> 친구추가</span>
            </div>
        </div>
    </div>

    <div class="bodywork-call-wrapper">
        <p style="text-align: center; margin: 10px 0 0 0; font-size: 11px;"><img src="/img/phone-call.png" width="15px" style="margin-right: 5px;">클릭하시면 바디웍 지점으로 전화연결이 됩니다.</p>
        <div class="bodywork-call-box">
            <div class="bodywork-call-container" onclick="location.href='tel:{{ \App\Branch::where('number', 1)->first()->phone }}'">
                <span>본점 1호점<br> 전화하기</span>
            </div>
            <div class="bodywork-call-container" onclick="location.href='tel:{{ \App\Branch::where('number', 2)->first()->phone }}'">
                <span>방이 2호점<br> 전화하기</span>
            </div>
            <div class="bodywork-call-container" onclick="location.href='tel:{{ \App\Branch::where('number', 3)->first()->phone }}'">
                <span>오금 3호점<br> 전화하기</span>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 3,
                loop:true,
                margin:0,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                pagination: false,
                slideSpeed: 600
            });
            $('.owl-next').on('click',function(){
                owl.trigger('next.owl.carousel',[500])
            });
            $('.owl-prev').on('click',function(){
                owl.trigger('prev.owl.carousel',[500])
            })
        });
    </script>
@endsection