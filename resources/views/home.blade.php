@extends('layouts.app')
@section('style')
    <style>
        h3 {
            font-size: 2.5vw;
        }

        p {
            font-size: 1vw;
        }

        .carousel-inner {
            width: 80%;
            margin: auto;
        }

        .popup-inner {
            position: relative;
            height: 40px;
            border: 3px solid #cdcdcd;
            width: 100%;
            height: 100%;
        }
        .popup-image-container {
            padding-bottom: 40px;
        }
        .popup-check-container {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: left;
        }
        .popup-check-container input {
            cursor: pointer;
            position: absolute;
        }
        .popup-check-container label {
            font-size: 12px;
            margin: 0;
            position: relative;
            padding-left: 24px;
            cursor: pointer;
        }

        .popup-label-container {
            margin-bottom: 5px;
            margin-left: 5px;
        }

        .popup-close-button {
            position: absolute;
            right: 0;
            bottom: 0;
            padding: 5px;
            color: #333333;
            line-height: 14px;
            border: 1px solid #999999;
            font-size: 12px;
            cursor: pointer;
            margin-bottom: 3px;
            margin-right: 3px;
        }

        #btn-wrapper {
            display: none;
        }

        #phone-button {
            position:fixed;
            right: 20px;
            bottom: 20px;
            width: 114px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            border-radius: 5%;
            z-index: 200;
            font-size: 16px;
            cursor: pointer;
        }

        #kakao-channel-button {
            position:fixed;
            right: 20px;
            bottom: 80px;
            width: 114px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: yellow;
            border-radius: 5%;
            z-index: 200;
            cursor: pointer;
        }

        .phone-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid white;
            height: 50px;
            font-size: 11px;
            color: white;
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
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                vertical-align: middle;
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
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                vertical-align: middle;
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
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                vertical-align: middle;
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
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                vertical-align: middle;
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

        .bodywork-menu-container div {
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
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 300px;
            cursor: pointer;
            position: relative;
        }

        .bodywork-menu-box {
            width: 100%;
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
                width: 100px;
                height: 25px;
                background: transparent;
                color: white;
                font-size: 11px;
                font-weight: bold;
                box-shadow: 4px 4px 4px black;
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                vertical-align: middle;
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
                display: flex;
                justify-content: space-between;
            }

            .bodywork-menu {
                height: 120px;
                /* background-size: 90%; */
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                cursor: pointer;
                position: relative;
            }

            .carousel-item img {
                width: 100%;
                height: 250px;
            }

            .bodywork-menu-container div {
                cursor: pointer;
                margin: 0;
            }

            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
            }

            .owl-carousel img {
                height: 125px;
            }

            .popup-image {
                width: 80%;
            }

            #btn-wrapper {
                display: block;
            }
        }
    </style>
@endsection
@section('content')
    @component('Components.video', ['home' => $home])
    @endcomponent
    <div id="carouselMainIndicators" class="carousel slide" data-ride="carousel" data-interval="5000" style="margin-top: 50px;">
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
                    <div class="owl-item"><a href="{{ $home->bf1_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf1 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf2_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf2 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf3_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf3 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf4_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf4 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf5_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf5 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf6_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf6 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf7_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf7 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf8_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf8 }}"></a></div>
                    <div class="owl-item"><a href="{{ $home->bf9_link }}"><img class="img-fluid"
                                                                               src="/{{ $home->bf9 }}"></a></div>
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
        <div class="bodywork-menu-container" style="margin-bottom: 10px;">
            <div class="bodywork-menu-box" onclick="location.href='{{ $home->menu1_link }}'">
                <div class="bodywork-menu" style="margin-right: 5px; background-image: url({{ $home->menu1 }})">
                    <button class="bodywork-menu-text">8주 바디체인지</button>
                </div>
            </div>
            <div class="bodywork-menu-box" onclick="location.href='{{ $home->menu2_link }}'">
                <div class="bodywork-menu" style="margin-left: 5px; background-image: url({{ $home->menu2 }})">
                    <button class="bodywork-menu-text">이벤트</button>
                </div>
            </div>
        </div>
        <div class="bodywork-menu-container">
            <div class="bodywork-menu-box" onclick="location.href='{{ $home->menu3_link }}'">
                <div class="bodywork-menu" style="margin-right: 5px; background-image: url({{ $home->menu3 }})">
                    <button class="bodywork-menu-text">오시는 길</button>
                </div>
            </div>
            <div class="bodywork-menu-box" onclick="location.href='{{ $home->menu4_link }}'">
                <div class="bodywork-menu" style="margin-left: 5px; background-image: url({{ $home->menu4 }})">
                    <button class="bodywork-menu-text">상담신청</button>
                </div>
            </div>
        </div>
    </div>
    <div id="btn-wrapper">
        <div id="phone-button">
            <span><img src="/img/call.png" width="20px" style="margin-right: 5px;"> 전화연결</span>
        </div>
        <img id="kakao-channel-button" src="/img/kakaoplus.png" width="40px"/>
    </div>
    <style>
        .backdrop {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 300;
        }

        .modal-wrapper {
            background-color: #3f2121;
            width: 80%;
            max-height: 500px;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: auto;
            padding: 20px;
            border: 3px solid grey;
        }

        .phone-wrapper {
            border: 3px solid grey;
            background-color: #3b3b3b;
            width: 80%;
            max-height: 500px;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: auto;
            color: white;
            padding: 20px;
        }

        .modal-wrapper img {
            border-bottom: 1px solid white;
        }
    </style>
    <div class="backdrop"></div>
    <div class="modal kakao-modal">
        <div class="modal-wrapper">
            @foreach($branches as $branch)
            <a href="{{ $branch->kakao }}">
                <img src="{{ $branch->kakao_image }}" width="75%" style="border-top: 1px solid white;">
            </a>
            @endforeach
        </div>
    </div>
    <style>
        .phone-modal-container {
            width: 100%;
            cursor: pointer;
        }
        .phone-modal-box {
            padding: 15px;
            width: 80%;
            height: 120px;
            margin: auto;
            border-bottom: 1px solid white;
        }
        .phone-modal-label {
            font-size: 11px;
            height: 30px;
            padding: 5px;
        }
        .phone-modal-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 200px;
            height: 60px;
            margin: auto;
            background-color: black;
        }
        .phone-modal-btn-image {
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-right: 1px solid white;
        }
        .phone-modal-btn-text {
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70%;
        }
    </style>
    <div class="modal phone-modal">
        <div class="phone-wrapper" style="height: inherit;">
            @foreach($branches as $branch)
                <div class="phone-modal-container" onclick="location.href='tel:{{ $branch->phone }}'">
                    <div class="phone-modal-box" style="border-top: 1px solid white;">
                        <div class="phone-modal-label">
                            <span style="border-bottom: 1px solid white;">클릭하시면 바디웍 지점으로 전화연결이 됩니다.</span>
                        </div>
                        <div class="phone-modal-btn">
                            <div class="phone-modal-btn-image">
                                <img src="/img/phone-call.png" width="25px"/>
                            </div>
                            <div class="phone-modal-btn-text">
                                {{ $branch->name }} <br> 전화하기
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@each('Components.popup', $popups, 'popup')
@section('script')
    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                pagination: false,
                slideSpeed: 600
            });
            $('.owl-next').on('click', function () {
                owl.trigger('next.owl.carousel', [500])
            });
            $('.owl-prev').on('click', function () {
                owl.trigger('prev.owl.carousel', [500])
            })
        });

        var video = document.getElementsByTagName("video")[0];
        var control = document.getElementById("video-control");

        if (video !== undefined) {
            video.addEventListener("click", function() {
                if(!video.paused){
                    video.pause();
                    control.src = '/img/play.png';
                    control.style.transition = '0.1s all';
                    control.style.opacity = 1;
                } else {
                    video.play();
                    control.style.transition = '1.5s all';
                    control.style.opacity = 0;
                }
            });
        }
        if ({!! $popups !!}) {
            var popups = {!! json_encode($popups) !!};
            popups.map(function(ele) {
                if(getCookie('popup-check' + ele.id) != 'Y') {
                    document.getElementById('popup' + ele.id).style.display = 'block';
                }
            });
        }

        function setCookie(name, value, expiredays) {
            var date = new Date();
            date.setDate(date.getDate() + expiredays);
            document.cookie = escape(name) + "=" + escape(value) + "; path=/; expires=" + date.toUTCString();
        }

        function getCookie(name) {
            var cookie = document.cookie;
            if (document.cookie != "") {
                var cookieArray = cookie.split("; ");
                for ( var index in cookieArray) {
                    var cookieName = cookieArray[index].split("=");
                    if (cookieName[0] == name) {
                        return cookieName[1];
                    }
                }
            } return ;
        }

        function closePopUp(id, day) {
            var popupName = "popup-check" + id;
            if (document.getElementById(popupName).checked) {
                setCookie(popupName, "Y", day);
            }
            document.getElementById('popup' + id).style.display = 'none';
        }
    </script>
@endsection