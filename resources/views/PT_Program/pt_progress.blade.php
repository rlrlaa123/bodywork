@extends('layouts.app')
@section('style')
    <style>
        .cover-image {
            width: 100%;
            height: 400px;
        }

        .pt-progress {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            border-radius: 100%;
            background-color: #efa19d;
            width: 550px;
            height: 550px;
        }

        .pt-progress img {
            width: 25px;
            height: 25px;
        }

        .pt-progress p {
            color: white;
            margin: 10px 0;
        }

        .pt-progress-info {
            margin: 50px;
            margin-left: 100px;
            border-left: 3px solid #efa19d;
            color: #efa19d;
            text-align: left;
            padding-left: 20px;
            font-size: 13px;
        }

        .pt-progress-info p{
            margin-bottom: 5px;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .pt-progress {
                width: 300px;
                height: 300px;
            }

            .pt-progress img {
                width: 15px;
                height: 15px;
            }

            h4 {
                font-size: 4.5vw;
            }

            h6 {
                font-size: 4.0vw;
                margin: 0 20px;
            }

            .pt-progress-info {
                margin: 50px;
            }

            p {
                font-size: 11px;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/pt_program/1.jpg">
    <h3 style="margin: 50px 0; font-weight: bold;">PT 진행순서</h3>
    <hr style="margin: 0 50px;">
    <h4 style="margin-top: 50px;">바디웍 전문 트레이너와 함께하는 맞춤 트레이닝</h4>
    <h6 style="font-weight: lighter;">바디웍은 고객님들의 체형, 성별, 연령에 맞는 최고의 1:1 퍼스널 트레이닝을 선사합니다.</h6>
    <div class="pt-progress">
        <div>
            <p>고객상담</p>
            <img src="/img/pt_program/arrow.png">
            <p>인바디검사</p>
            <img src="/img/pt_program/arrow.png">
            <p>운동부하 검사 및 움직임 검사</p>
            <img src="/img/pt_program/arrow.png">
            <p>결과 상담 및 방향성 제시</p>
            <img src="/img/pt_program/arrow.png">
            <p>프로그램 설계 및 PT진행</p>
            <img src="/img/pt_program/arrow.png">
            <p>주기적 재평가 및 관리</p>

        </div>
    </div>
    <div class="pt-progress-info">
        <p>바디웍PT는</p>
        <p>운동 전 고객의 운동 부하검사와 움직임</p>
        <p>상태를 정확히 분석하여 트레이닝을 시작하며</p>
        <p>과학적인 데이터를 가지고 주기적인 측정과관리를 통하여</p>
        <p>고객이 원하는 목표를 이룰수 있도록 퍼스널 트레이닝 해드립니다.</p>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection