@extends('layouts.app')
@section('style')
    <style>
        .bodywork-logo {
            display: grid;
            display: -ms-grid;
            grid-template-columns: 45% 55%;
            -ms-grid-columns: 45% 55%;
            margin: 50px 20%;
            height: auto;
            align-items: center;
            justify-content: center;
        }

        .bodywork-logo div:nth-child(2) {
            -ms-grid-column: 2;
        }

        @media screen and (min-width: 1024px) and (max-width: 1440px) {
            .bodywork-logo img {
                width: 250px;
                height: 250px;
                border-radius: 100%;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .bodywork-logo img {
                width: 200px;
                height: 200px;
                border-radius: 100%;
            }
        }

        @media screen and (min-width: 1441px) {
            .bodywork-logo img {
                width: 350px;
                height: 350px;
                border-radius: 100%;
            }
        }

        .bodywork-logo:nth-child(1) {
            text-align: right;
        }

        .bodywork-logo:nth-child(2) {
            text-align: left;
            padding-left: 50px;
        }

        .purple {
            border: 2px solid #764fd5;
            margin-top: 100px;
        }

        .green {
            border: 2px solid #66c172;
        }

        .grape {
            border: 2px solid #b0359b;
        }

        .bodywork-intro p {
            margin: 50px 50px 100px 50px;
            line-height: 2.25;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .bodywork-logo {
                grid-template-columns: unset;
                margin: 20px 50px;
            }

            .bodywork-logo img {
                width: 100px;
                height: 100px;
                border-radius: 100%;
            }

            .bodywork-logo div {
                text-align: center;
            }

            .bodywork-logo p {
                padding-top: 20px;
            }

            h4 {
                font-size: 4.5vw;
            }

            .hr {
                margin: 35px auto;
            }

            .purple {
                margin-top: 100px;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/pt_program/10.jpg">
    <h3 style="margin: 50px 0; font-weight: bold; font-size: 3vw;">바디웍 소개</h3>
    <hr>
    <h4 style="margin: 50px 0; font-size: 2vw;">바디웍 로고</h4>
    <div class="bodywork-logo">
        <div>
            <img src="/img/logo.jpg">
        </div>
        <div>
            <p style="line-height: 2.25; font-weight: bold;">바디웍의 신념은 엄마 뱃속의 태아,<br>
                측 최초의 건강한 모습을 엄마의 마음으로<br>
                고객 한분 한분의 몸을 기능 손상 없이<br>
                건강하게 만들어 주는 것을 목표로 하며<br>
                늘 초심을 잃지 말자는 의미를 상징합니다.
            </p>
        </div>
    </div>
    <div class="hr purple"></div>
    <div class="bodywork-intro">
        <h4 style="color: #764fd5;">바디웍 휘트니스의 트레이닝은 다릅니다.</h4>
        <p>
            두 눈과 귀를 여는 소통형 서비스로 당신의 목표에 도달할 수 있도록 최선을 다합니다.<br>
            주기적인 해부학적 교육과 리더쉽교육을 통한 커뮤니케이션교육은<br>
            고객님의 건강과 라이프 스타일 변화를 위한 올바른 운동법과 식습관 개선에 최선을 다합니다.
        </p>
    </div>
    <div class="hr green"></div>
    <div class="bodywork-intro">
        <h4 style="color: #66c172;">바디웍휘트니스의 프로그램은 다릅니다.</h4>
        <p>
            바디웍 휘트니스의 퍼스널 트레이닝은 체계적이고 적합한 운동방법을 제공함으로 <br>
            고객의 원하는 목표를 보다 빠르게 달성시키고 정기적 평가와 영양 관리 및 유지를<br>
            위한 가이드라인을 제공하여 지속적인 서비스를 제공합니다
        </p>
    </div>
    <div class="hr grape"></div>
    <div class="bodywork-intro">
        <h4 style="color: #b0359b;">바디웍휘트니스 항상 즐겁습니다.</h4>
        <p>
            바디웍 휘트니스는 2016년 바디웍1호점을 시작으로 2년만에 3호점인 오금역점을 <br>
            오픈할 만큼 직원의 단합과 회원님들의 응원으로 빠르게 성장하고 있는 중입니다. <br>
            그 안에는 일하는 즐거움과 고객님들의 즐겁게 운동하는 모습들이 성장의 원동력이라 생각하며<br>
            바디웍은 더욱 즐거운 휘트니스센터를 만들려 노력합니다.
        </p>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection