@extends('layouts.app')
@section('style')
    <style>
        .cover-image {
            width: 100%;
            height: 400px;
        }

        .ceo-wrapper-1 {
            margin: 50px;
            background-color: #f1b042;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            height: 125px;
            font-weight: bold;
        }

        .ceo-wrapper-1 p {
            margin: 0;
        }

        .ceo-wrapper-2 {
            margin: 50px;
            display: flex;
            /*grid-template-columns: 50% 50%;*/
            text-align: left;
            align-items: center;
            font-size: 1vw;
        }

        .ceo-wrapper-2 img {
            width: 80%;
            height: 300px;
        }

        .ceo-wrapper-2 h5 {
            font-weight: bold;
        }

        .ceo-wrapper-3 {
            background-color: #454551;
            display: grid;
            grid-template-columns: 50% 50%;
            padding: 50px 10%;
            margin: 50px;
            color: white;
            font-size: 1vw;
        }

        .ceo-wrapper-3 img {
            width: 60%;
            margin-bottom: 20px;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .ceo-wrapper-1 {
                width: 100%;
                margin: 50px 0;
                height: 100px;
            }

            .ceo-wrapper-2 {
                grid-template-columns: unset;
            }

            .ceo-wrapper-2 img {
                height: 200px;
            }

            .ceo-wrapper-3 {
                grid-template-columns: unset;
                padding: 20px 10%;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/pt_program/1.jpg" width="100%" height="400px">
    <h3 style="margin: 50px 0; font-weight: bold;">CEO 소개</h3>
    <hr>
    <div class="ceo-wrapper-1">
        <div>
            <p>현역 보디빌 & 피트니스 팀으로 구성된</p>
            <p>퍼스널트레이닝 전문센터입니다.</p>
        </div>
    </div>
    <div class="ceo-wrapper-2">
        <div style="text-align: center;">
            <img src="/img/bodywork/ceo1.png">
        </div>
        <div>
            <h5>안녕하세요.</h5>
            <h5>바디웍 대표 이우석, 장정훈 입니다.</h5>
            <br>
            <p>바디웍 휘트니스는 10년 이상의 경력과 운동 노하우로 고객의 운동 목적에 맞는 가장 적합한 운동 프로그램을 제공하는 동시에 움직임, 영양, 생활습관, 자세, 획복을 통한 삶의 질 개선을
                최우선으로 합니다.</p>
            <br>
            <p>쾌적하고 즐겁게 운동할 수 있는 공간을 만들도록 최선을 다하겠습니다.</p>
            <p>감사합니다.</p>
        </div>
    </div>
    <div class="hr"></div>
    <div class="ceo-wrapper-3">
        <div>
            <img src="/img/bodywork/ceo2.png">
            <p>
                생활체육지도자자격증(보디빌딩,유도)<br>
                유도 공인 4단<br>
                교원자격증(체육)<br>
                바른체형지도자 / 스트레칭 지도자<br>
                chiropractic certificate<br>
                manual muscle testing certificate<br>
                trigger point & MPS certificate<br>
                rehabillitation training specialist<br>
                JDI sports academy 2기<br>
                Golf training program(JDI)<br>
                PET(physioexercise training)<br>
                primal move instructor<br>
                Seoul Osteopathic Study Group member<br>
            </p>
        </div>
        <div>
            <img src="/img/bodywork/ceo3.png">
            <p>
                생활체육지도자자격증(보디빌딩)<br>
                운동처방사<br>
                sterching instructor<br>
                PNF certificate of education<br>
                core training certificate<br>
                manual muscle testing certificate<br>
                trigger point & MPS certificate<br>
                rehabillitation training specialist<br>
                BOSU training specialist<br>
                davinci academy crtificate<br>
                thera-band academy certificate<br>
                TRX training certificate<br>
                Formroller core training certificate<br>
                PET(physio exercise training<br>
                Seoul Osteopathic Study Group member<br>
            </p>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection