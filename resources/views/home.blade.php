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
            grid-template-columns: repeat(2, 50%);
            grid-gap: 30px;
            width: 90%;
            margin: auto;
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
            width: 150px;
            height: 30px;
            background: transparent;
            color: white;
            font-size: 1.5vw;
            font-weight: bold;
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

            .before-after-wrapper {
                margin: 50px 0;
                padding: 25px;
            }

            .before-after-more-btn {
                margin-top: 20px;
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
            }

            .carousel-item img {
                width: 100%;
                height: 250px;
            }
        }
    </style>
@endsection
@section('content')
    <div id="carouselMainIndicators" class="carousel slide" data-ride="carousel">
        <ol id="main-carousel-indicator" class="carousel-indicators">
            <li data-target="#carouselMainIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselMainIndicators" data-slide-to="1"></li>
            <li data-target="#carouselMainIndicators" data-slide-to="2"></li>
        </ol>
        <div id="main-carousel-inner" class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/main1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/main2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/main3.jpg" alt="Third slide">
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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/bf.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/bf2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/bf3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
            <ol id="before-after-carousel-indicator" class="carousel-indicators">
                <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#recipeCarousel" data-slide-to="1"></li>
                <li data-target="#recipeCarousel" data-slide-to="2"></li>
                <li data-target="#recipeCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner w-70" role="listbox">
                <div class="carousel-item row no-gutters active">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf2.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf3.jpg"></div>
                </div>
                <div class="carousel-item row no-gutters">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf4.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf5.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf6.jpg"></div>
                </div>
                <div class="carousel-item row no-gutters">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf7.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf8.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf9.jpg"></div>
                </div>
                <div class="carousel-item row no-gutters">
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf10.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf11.jpg"></div>
                    <div class="before-after-carousel-item col-4 float-left"><img class="img-fluid" src="/img/bf12.jpg"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <button class="before-after-more-btn">더보기</button>
    </div>

    <div class="bodywork-menu-wrapper">
        <h3>BODY WORK</h3>
        <p>그들은 어떻게 다이어트에 성공했을까?</p>
        <div class="bodywork-menu-container">
            <div class="bodywork-menu">
                <button class="bodywork-menu-text">8주 바디체인지</button>
            </div>
            <div class="bodywork-menu">
                <button class="bodywork-menu-text">이벤트</button>
            </div>
            <div class="bodywork-menu">
                <button class="bodywork-menu-text">오시는 길</button>
            </div>
            <div class="bodywork-menu">
                <button class="bodywork-menu-text">상담신청</button>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection