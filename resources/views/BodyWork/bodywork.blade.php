@extends('layouts.app')
@section('style')
    <style>
        .cover-image {
            width: 100%;
            height: 400px;
        }

        .bodywork-logo {
            display: grid;
            display: -ms-grid;
            grid-template-columns: 45% 55%;
            -ms-grid-columns: 45% 55%;
            margin: 50px 20%;
            height: 200px;
            align-items: center;
            justify-content: center;
        }

        .bodywork-logo div:nth-child(2) {
            -ms-grid-column: 3;
        }

        .bodywork-logo img {
            width: 200px;
            height: 200px;
            border-radius: 100px;
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
    <h3 style="margin: 50px 0; font-weight: bold;">바디웍 소개</h3>
    <hr>
    <h4 style="margin: 50px 0;">바디웍 로고</h4>
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
        <h4 style="color: #66c172;">바디웍 휘트니스의 트레이닝은 다릅니다.</h4>
        <p>
            두 눈과 귀를 여는 소통형 서비스로 당신의 목표에 도달할 수 있도록 최선을 다합니다.<br>
            주기적인 해부학적 교육과 리더쉽교육을 통한 커뮤니케이션교육은<br>
            고객님의 건강과 라이프 스타일 변화를 위한 올바른 운동법과 식습관 개선에 최선을 다합니다.
        </p>
    </div>
    <div class="hr grape"></div>
    <div class="bodywork-intro">
        <h4 style="color: #b0359b;">바디웍 휘트니스의 트레이닝은 다릅니다.</h4>
        <p>
            두 눈과 귀를 여는 소통형 서비스로 당신의 목표에 도달할 수 있도록 최선을 다합니다.<br>
            주기적인 해부학적 교육과 리더쉽교육을 통한 커뮤니케이션교육은<br>
            고객님의 건강과 라이프 스타일 변화를 위한 올바른 운동법과 식습관 개선에 최선을 다합니다.
        </p>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection