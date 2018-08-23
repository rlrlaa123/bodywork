@extends('layouts.app')
@section('style')
    <style>
        .pt-info-1 {
            margin: 50px;
            background-color: #faf8f6;
            padding: 0 100px 50px 100px;
        }
        .pt-info-2 {
            margin: 50px;
            background-color: #f0f6f4;
            padding: 50px 100px;
        }

        h3 {
            font-size: 3vw;
        }

        h4 {
            font-size: 2vw;
        }

        p {
            font-size: 1.0vw;
        }

        @media screen and (min-width: 1024px) and (max-width: 1440px) {
            .content-image {
                width: 80%;
                height: 500px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .content-image {
                width: 80%;
                height: 300px;
            }
        }

        @media screen and (min-width: 1441px) {
            .content-image {
                width: 80%;
                height: 500px;
            }
        }

        .comma-image {
            display: block;
            width: 40px;
            margin: 50px auto;
        }

        .content-1 {
            margin: 20px 0;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .content-image {
                width: 100%;
                height: 250px;
                margin: 0;
                margin-bottom: 20px;
            }

            .comma-image {
                width: 25px;
                height: 25px;
                margin: 20px auto;
            }

            .pt-info-1 {
                padding: 0;
                padding-bottom: 20px;
            }

            .content-1 {
                margin: 20px;
            }

            .pt-info-2 {
                padding: 20px 0;
            }

            .content-2 {
                margin: 20px;
            }

            p {
                font-size: 11px;
                text-align: left;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/pt_program/1.jpg">
    <h3 style="margin: 50px 0; font-weight: bold;">퍼스널 트레이닝 소개</h3>
    <hr>
    <h4 style="margin: 50px 0;">퍼스널 트레이닝이란?</h4>
    <div class="pt-info-1">
        <img class="content-image" src="/img/pt_program/2.jpg">
        <img class="comma-image" src="/img/pt_program/comma.png">
        <p class="content-1">퍼스널트레이닝이란?
            인체의 구조와 기능에 대한 지식을 전문트레이너가 회원 개개인에 대한 상담을 실시한 후, 이에 맞는 프로그램을 제시하며 올바른 운동방법을 지도하는 것입니다.
            또한 운동과 올바른 식습관을 지킬수 있도록 끈임없는 조언과 동기부여를  해주는 것이 퍼스널트레이닝의 1:1 맞춤형 운동의 핵심이라고 할 수 있습니다.
        </p>
    </div>
    <div class="pt-info-2">
        <h4 style="margin: 50px 0;">퍼스널 트레이닝의 효과</h4>
        <img class="comma-image" src="/img/pt_program/comma.png">
        <p class="content-2">
            퍼스널트레이닝은 운동 뿐만이 아닌 신체의 움직임, 영양, 생활습관, 자세, 회복과 관련하여 고객의 의지와 싦의 질이 높아질 수 있도록하며 고객의 생활습관과 신체조건을 분석하여 인체 본연의 기능을 중심으로 몸의 순환과 관련된 신체움직임과 기능을 개선시켜 신체활성과 대사기능을 향상시킬수 있는 효과를 얻을 수 있습니다
        </p>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection