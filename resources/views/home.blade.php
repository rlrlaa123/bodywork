@extends('layouts.app')
@section('style')
    <style>
        h3 {
            font-size: 2.5vw;
        }

        p {
            font-size: 1vw;
        }

        #main-carousel-inner img {
            height: 550px;
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

        .before-after-more-btn {
            width: 70px;
            height: 30px;
            margin-top: 50px;
            border: 1px solid white;
            border-radius: 20px;
            background-color: #556169;
            color: white;
            font-size: 1vw;
            padding: 5px;
            cursor: pointer;
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
            grid-gap: 30px;
            width: 90%;
            margin: auto;
        }

        .bodywork-menu:nth-child(2) {
            -ms-grid-column: 2;
        }

        .bodywork-menu:nth-child(3) {
            -ms-grid-column: 1;
        }

        .bodywork-menu:nth-child(4) {
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

        .bodywork-menu-text {
            border: 1px solid white;
            border-radius: 20px;
            width: 180px;
            height: 30px;
            background: transparent;
            color: white;
            font-size: 1.5vw;
            font-weight: bold;
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
        }

        @media (orientation: portrait) {
            #main-carousel-inner img {
                height: 250px;
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

            .before-after-wrapper {
                margin: 50px 0;
                padding: 25px;
            }

            .before-after-more-btn {
                margin-top: 20px;
                font-size: 11px;
            }

            .bodywork-menu-wrapper {
                margin: 50px 0;
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

            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
            }

            .bodywork-call-wrapper {
                display: grid;
            }
        }

        @media screen and (min-width: 1200px) {
            .bodywork-menu-text {
                height: 40px;
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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/{{ $home->bf1 }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf2 }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf3 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf4 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf5 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf6 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf7 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf8 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $home->bf9 }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bf" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon bf" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="recipeCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol id="before-after-carousel-indicator" class="carousel-indicators">
                <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#recipeCarousel" data-slide-to="1"></li>
                <li data-target="#recipeCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner w-70" role="listbox">
                <div class="carousel-item row no-gutters active">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf1 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf2 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf3 }}"></div>
                </div>
                <div class="carousel-item row no-gutters">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf4 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf5 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf6 }}"></div>
                </div>
                <div class="carousel-item row no-gutters">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf7 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf8 }}"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid"
                                                                                  src="/{{ $home->bf9 }}"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bf" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bf" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <button class="before-after-more-btn"><a href="/bodychallenger/2">더보기</a></button>
    </div>

    <div class="bodywork-menu-wrapper">
        <h3>BODY WORK</h3>
        <p>그들은 어떻게 다이어트에 성공했을까?</p>
        <div class="bodywork-menu-container">
            <a href="/bodychallenger/2">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">8주 바디체인지</button>
                </div>
            </a>
            <a href="/event">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">이벤트</button>
                </div>
            </a>
            <a href="/branch/1">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">오시는 길</button>
                </div>
            </a>
            <a href="/lesson">
                <div class="bodywork-menu">
                    <button class="bodywork-menu-text">상담신청</button>
                </div>
            </a>
        </div>
    </div>

    <div class="bodywork-call-wrapper">
        <p style="text-align: left; margin: 10px 0 0 15px; font-size: 11px;"><img src="/img/phone-call.png" width="15px" style="margin-right: 5px;">클릭하시면 바디웍 지점으로 전화연결이 됩니다.</p>
        <div class="bodywork-call-box">
            <div class="bodywork-call-container" onclick="location.href='tel:02-408-3966'">
                <span>본점 1호점<br> 전화하기</span>
            </div>
            <div class="bodywork-call-container" onclick="location.href='tel:02-448-7102'">
                <span>방이 2호점<br> 전화하기</span>
            </div>
            <div class="bodywork-call-container" onclick="location.href='tel:02-000-0000'">
                <span>오금 3호점<br> 전화하기</span>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection