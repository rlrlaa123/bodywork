@extends('layouts.app')
@section('style')
    <style>
        .wrapper {
            margin: 0 50px;
        }
        .branch-selector {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            border: 1px solid #e3e3e3;
        }

        .branch-btn {
            /*margin-right: 20px;*/
            border-right: 1px solid #e3e3e3;
            /*border-bottom: 1px solid #e3e3e3;*/
            padding: 20px;
            background-color: darkgrey;
            color: white;
            width: 150px;
        }

        hr {
            margin: 50px 0;
        }

        .carousel {
            height: 500px;
        }

        .carousel-inner {
            height: 500px;
        }

        .carousel-indicators li {
            background-color: white;
        }

        .carousel-indicators .active {
            background-color: orange;
        }

        .branch-location {
            display: grid;
            grid-template-columns: 50% 50%;
            /*padding: 40px;*/
            margin: 50px 0;
            border-left: 2px solid orange;
        }

        .branch-location div:nth-child(1) {
            text-align: left;
            padding: 20px;
        }

        .branch-location div:nth-child(2) {
            padding: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .branch-info-wrapper {
            text-align: left;
            margin-bottom: 50px;
        }

        .branch-info {
            margin: 20px 0;
            border-bottom: 1px solid #e3e3e3;
        }

        .active {
            background-color: grey;
            border: none;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        <h3 style="margin: 50px 0; font-weight: bold;">바디웍 지점 소개</h3>
        <hr>
        <div style="display: flex; width: 100%;">
            <div class="branch-selector">
                @for($i = 1; $i <= 3; $i++)
                    @if($i == 1)
                        <div class="branch-btn {{ $i }} active">{{ $i }}호점</div>
                    @else
                        <div class="branch-btn {{ $i }}">{{ $i }}호점</div>
                    @endif
                @endfor
            </div>
        </div>
        @for($i = 1; $i <= 3; $i++)
            @if($i == 1)
                <div class="branch-location-wrapper {{ $i }}" style="display: block;">
                    <div id="carouselMainIndicators{{ $i }}" class="carousel slide" data-ride="carousel">
                        <ol id="main-carousel-indicator" class="carousel-indicators">
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="1"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="2"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="3"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="4"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="5"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="6"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="7"></li>
                        </ol>
                        <div id="main-carousel-inner" class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/branch/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/4.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/5.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/6.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/7.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/8.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="branch-location">
                        <div>
                            <h3 style="text-align: center;">Location</h3>
                            <p>1호점(본점)<br>
                                바디웍 1호점은 personal training studio로 1:1 개인레슨만을 하는<br>
                                프라이빗한 공간으로 다른사람의 시선을 신경쓰지 않고 운동에만 집중할 수 있는<br>
                                개인피티전문 스튜디오입니다.
                            </p>
                            <p>송파구 위례성대로 20길 23 신승빌딩 3층</p>
                        </div>
                        <div id="map{{ $i }}"></div>
                    </div>
                    <div class="branch-info-wrapper">
                        <h6>바디웍 1호점 운영시간</h6>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            월~금 AM 07:00 ~ PM 11:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            토요일 AM 10:00 ~ PM 5:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            국경일/일요일  휴관
                        </div>
                        <div class="note">Note: 국경일은 쉽니다.</div>
                    </div>
                </div>
            @elseif($i == 2)
                <div class="branch-location-wrapper {{ $i }}" style="display: none;">
                    <div id="carouselMainIndicators{{ $i }}" class="carousel slide" data-ride="carousel">
                        <ol id="main-carousel-indicator" class="carousel-indicators">
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="1"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="2"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="3"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="4"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="5"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="6"></li>
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="7"></li>
                        </ol>
                        <div id="main-carousel-inner" class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/branch/2-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-4.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-5.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-6.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-7.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/branch/2-8.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="branch-location">
                        <div>
                            <h3 style="text-align: center;">Location</h3>
                            <p>{{ $i }}호점(방이역점)<br>
                                바디웍 2호점은 open fitness center로 누구나 자유롭게 이용할 수 있으며
                                주중 24시간 운영하여 시간에 제한없이 운동할 수 있는 공간이며
                                다양한 기구를 이용한 퍼스널트레이닝 받을 수 있습니다.
                            </p>
                            <p>송파구 오금동 마천로 61 덕산빌딩 2층</p>
                        </div>
                        <div id="map{{ $i }}"></div>
                    </div>
                    <div class="branch-info-wrapper">
                        <h6>바디웍 {{ $i }}호점 운영시간</h6>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            월요일 AM 06:00 ~ 24:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            화요일-금요일 AM 00:00 ~ 24:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            툐요일 AM 00:00 ~ 20:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            국경일 AM 00:00 ~ 17:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            일요일 휴관
                        </div>
                        <div class="note">Note: 휴무는 센터 사정에 따라 변동 됩니다</div>
                    </div>
                </div>
            @else

                <div class="branch-location-wrapper {{ $i }}" style="display: none;">
                    <div id="carouselMainIndicators{{ $i }}" class="carousel slide" data-ride="carousel">
                        <ol id="main-carousel-indicator" class="carousel-indicators">
                            <li data-target="#carouselMainIndicators{{ $i }}" data-slide-to="0" class="active"></li>
                        </ol>
                        <div id="main-carousel-inner" class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/branch/comingsoon.jpeg" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselMainIndicators{{ $i }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="branch-location">
                        <div>
                            <h3 style="text-align: center;">Location</h3>
                            <p>{{ $i }}호점(오금역점)<br>
                                바디웍 3호점은 호텔급 시설과 운동하기 좋은 최적의 웨이트시설로
                                피트니스선수도 제대로 운동할 수 있도록 셋팅한 최적의 운동공간입니다.
                                오금역점은 국가대표출신의 트레이너가 상주하여 일반인 PT만이 아닌
                                피트니스선수육성 전문 휘트니스입니다.
                            </p>
                            <p>주소: 송파구 가락동 2-8 김해빌딩 5층</p>
                        </div>
                        <div id="map{{ $i }}"></div>
                    </div>
                    <div class="branch-info-wrapper">
                        <h6>바디웍 {{ $i }}호점 운영시간</h6>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            월-금 AM 06:00 ~ PM 12:00
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            토요일 AM 08:00 ~ PM 8:00
                        </div>
                        <div class="branch-info">
                            <img src="/img/branch/time.png" width="25px">
                            일요일 휴관
                        </div>
                        <div class="note">Note: 국경일은 쉽니다.</div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
@endsection
@section('script')
    <script>
        $('.branch-btn').click(function() {
            var index = $(this).attr('class').slice(-1);

            for(var i = 1; i <= 3; i++) {
                $('.branch-location-wrapper.' + i).css('display', 'none');
                $('.branch-btn')[i -1].classList.remove('active');
            }
            $('.branch-location-wrapper.' + index).css('display', 'block');

            $(this).addClass('active');
        });

        function getMap(address, i) {
            console.log(i);
            var map = new naver.maps.Map('map' + i);
            var myaddress = address;// 도로명 주소나 지번 주소만 가능 (건물명 불가!!!!)
            console.log(myaddress);
            naver.maps.Service.geocode({address: myaddress}, function(status, response) {
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
        }

        var address = [
            '송파구 위례성대로 20길 23',
            '송파구 위례성대로 176',
            '송파구 위례성대로 20길 23'
        ];

        for(var i = 1; i <= 3; i++) {
            getMap(address[i-1], i);
        }
    </script>
@endsection