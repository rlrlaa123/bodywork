@extends('layouts.app')
@section('style')
    <style>
        .branch-selector {
            margin: 0 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            /*border: 1px solid #e3e3e3;*/
        }

        .branch-btn {
            border-right: 1px solid #e3e3e3;
            padding: 10px;
            background-color: darkgrey;
            color: white;
            width: 150px;
        }

        h3 {
            font-size: 2vw;
            margin: 0 50px;
        }

        hr {
            margin: 50px;
        }

        @media screen and (min-width: 1024px) and (max-width: 1440px) {
            .carousel {
                margin: 0 50px;
                height: 650px;
            }

            .carousel-inner {
                height: 650px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .carousel {
                margin: 0 50px;
                height: 450px;
            }

            .carousel-inner {
                height: 450px;
            }
        }

        @media screen and (min-width: 1441px) {
            .carousel {
                margin: 0 50px;
                height: 900px;
            }

            .carousel-inner {
                height: 900px;
            }
        }

        @media screen and (max-width: 768px) and (orientation: landscape) {
            .carousel {
                margin: 0 50px;
                height: 450px;
            }

            .carousel-inner {
                height: 450px;
            }
        }

        .carousel-indicators li {
            background-color: white;
        }

        .carousel-indicators .active {
            background-color: orange;
        }

        .branch-location {
            display: grid;
            display: -ms-grid;
            grid-template-columns: 50% 50%;
            -ms-grid-columns: 50% 50%;
            margin: 50px;
            border-left: 2px solid orange;
            text-align: left;
        }

        .branch-location-text {
            text-align: left;
            padding: 0 20px;
            -ms-grid-column: 1;
        }

        .branch-location-map {
            padding: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            -ms-grid-column: 2;
        }

        .branch-info-wrapper {
            text-align: left;
            margin: 0 50px;
            margin-bottom: 50px;
        }

        .branch-info {
            margin: 20px 0;
            border-bottom: 1px solid #e3e3e3;
        }

        .branch-info img {
            width: 25px;
        }

        .active {
            background-color: grey;
            border: none;
        }

        @media (orientation: portrait) {
            .carousel {
                height: 200px;
            }

            .carousel-inner {
                height: 200px;
            }

            .carousel-indicators {
                bottom: 30px;
            }

            .carousel-item img {
                height: 200px;
            }

            .branch-selector {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                width: 100%;
            }

            .branch-btn {
                padding: 10px;
                width: unset;
            }

            .branch-location {
                display: block;
                border: none;
            }

            .branch-location-text {
                text-align: left;
                padding: 0 20px;
                border-left: 2px solid orange;
                margin: 50px 0;
            }

            .branch-location-map {
                padding: 20px;
                width: 100%;
                display: flex;
                justify-content: center;
                height: 200px;
            }

            .branch-info img {
                width: 20px;
            }
        }
    </style>
@endsection
@section('content')
    <script type="text/javascript"
            src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=OmiueUFkWx50WHTaLjZl&submodules=geocoder"></script>
    <h3 style="margin: 50px 0; font-weight: bold;">바디웍 지점 소개</h3>
    <hr>
    <div style="display: flex; width: 100%;">
        <div class="branch-selector">
            @for($i = 1; $i <= count($branches); $i++)
                @if($i == 1)
                    <a href="/branch/1/{{ $i }}">
                    @php($pattern = '/\/branch\/1\/' . $i . '/')
                        <div class="branch-btn {{ $i }} {{ preg_match($pattern, $_SERVER['REQUEST_URI']) ? ' active' : '' }}">
                            {{ $i }}호점
                        </div>
                    </a>
                @else
                    @php($pattern = '/\/branch\/1\/' . $i . '/')
                    <a href="/branch/1/{{ $i }}">
                        <div class="branch-btn {{ $i }} {{ preg_match($pattern, $_SERVER['REQUEST_URI']) ? ' active' : '' }}">
                            {{ $i }}호점
                        </div>
                    </a>
                @endif
            @endfor
        </div>
    </div>
    <div class="branch-location-wrapper" style="display: block;">
        <div id="carouselMainIndicators" class="carousel slide" data-ride="carousel">
            <ol id="main-carousel-indicator" class="carousel-indicators">
                <li data-target="#carouselMainIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="1"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="2"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="3"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="4"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="5"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="6"></li>
                <li data-target="#carouselMainIndicators" data-slide-to="7"></li>
            </ol>
            <div id="main-carousel-inner" class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/{{ $branch->image1 }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image2 }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image3 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image4 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image5 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image6 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image7 }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/{{ $branch->image8 }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselMainIndicators" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMainIndicators" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="branch-location">
            <div class="branch-location-text">
                <h3 style="text-align: center;">Location</h3>
                <p>
                    {!! nl2br($branch->description) !!}
                </p>
                <p>{{ $branch->location }}</p>
            </div>
            <div id="map" class="branch-location-map"></div>
        </div>
        <div class="branch-info-wrapper">
            <h6>바디웍 {{ $branch->number }}호점 운영시간</h6>
            <div class="branch-info">
                <img src="/img/branch/time.png">
                {{ $branch->time1 }}
            </div>
            <div class="branch-info">
                <img src="/img/branch/time.png">
                {{ $branch->time2 }}
            </div>
            <div class="branch-info">
                <img src="/img/branch/time.png">
                {{ $branch->time3 }}
            </div>
            <div class="note">Note: {{ $branch->note }}</div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var map = new naver.maps.Map('map');
        var myaddress = '{{ $branch->location }}';// 도로명 주소나 지번 주소만 가능 (건물명 불가!!!!)
        naver.maps.Service.geocode({address: myaddress}, function (status, response) {
            if (status !== naver.maps.Service.Status.OK) {
                return alert(myaddress + '의 검색 결과가 없거나 기타 네트워크 에러');
            }
            var result = response.result;
            // 검색 결과 갯수: result.total
            // 첫번째 결과 결과 주소: result.items[0].address
            // 첫번째 검색 결과 좌표: result.items[0].point.y, result.items[0].point.x
            var myaddr = new naver.maps.Point(result.items[0].point.x, result.items[0].point.y);
            map.setCenter(myaddr); // 검색된 좌표로 지도 이동
            // 마커 표시
            var marker = new naver.maps.Marker({
                position: myaddr,
                map: map
            });
            // 마커 클릭 이벤트 처리
            naver.maps.Event.addListener(marker, "click", function (e) {
                if (infowindow.getMap()) {
                    infowindow.close();
                } else {
                    infowindow.open(map, marker);
                }
            });
            // 마크 클릭시 인포윈도우 오픈
            var infowindow = new naver.maps.InfoWindow({
                content: '<h4> [네이버 개발자센터]</h4><a href="https://developers.naver.com" target="_blank"><img src="https://developers.naver.com/inc/devcenter/images/nd_img.png"></a>'
            });
        });
    </script>
@endsection