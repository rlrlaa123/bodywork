@extends('layouts.app')
@section('style')
    <style>
        h3 {
            font-size: 2vw;
        }

        .pt-info-1 {
            margin: 50px;
            background-color: #faf8f6;
            padding: 0 100px 50px 100px;
        }
        .pt-info-2 {
            margin: 50px;
            background-color: #fef9db;
            padding: 50px 200px;
        }

        p {
            font-size: 1.0vw;
        }

        .comma-image {
            display: block;
            width: 40px;
            margin: 50px auto;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .comma-image {
                width: 25px;
                height: 25px;
                margin: 20px auto;
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
    <img class="cover-image" src="/img/body_challenger/1.png">
    <h3 style="margin: 50px 0; font-weight: bold;">바디웍 바디챌린져란?</h3>
    <hr>
    <div class="pt-info-2">
        <h4 style="margin: 50px 0;">바디챌린져란?</h4>
        <img class="comma-image" src="/img/pt_program/comma.png">
        <p class="content-2">
            기수별로 진행되는 프로그램으로 그룹수업이 아닌 1:1 트레이닝으로<br>
            8주간 집중적으로 운동할 수 있는 기회를 제공하는 바디웍만의 특별한 프로그램입니다.<br>
            <br>
            각 회원의 움직임검사 / 체력검사 / 체형분석 / 인바디체크를 통하여 고객의 목적과<br>
            담당트레이너의 컨설팅을 통한 최적의 운동프로그램과 식단을 구성하여 단기간에<br>
            건강하게 최상의 결과를 얻을 수 있습니다.
        </p>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection