@extends('layouts.app')
@section('style')
    <style>
        .trainer-selector {
            margin: 0 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            border: 1px solid #e3e3e3;
        }

        .trainer-btn {
            border-right: 1px solid #e3e3e3;
            padding: 10px;
            background-color: darkgrey;
            color: white;
            width: 150px;
        }

        h3 {
            margin: 0 50px;
        }

        hr {
            margin: 50px;
        }

        .active {
            background-color: grey;
            border: none;
        }

        .trainer-container {
            display: grid;
            grid-template-columns: 50% 50%;
            margin: 50px;
        }

        .trainer-container div:nth-child(1) img {
            width: 80%;
            height: 400px;
        }

        .trainer-container div:nth-child(2) {
            margin: 50px;
            border-left: 2px solid orange;
            text-align: left;
            padding: 20px;
        }

        @media (orientation: portrait) {
            .trainer-selector {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                width: 100%;
            }

            .trainer-btn {
                padding: 10px;
                width: unset;
            }

            .trainer-container {
                display: block;
            }

            .trainer-container div:nth-child(1) img {
                width: 100%;
                height: 250px;
            }

            .trainer-container div:nth-child(2) {
                margin: 50px 0;
            }
        }
    </style>
@endsection
@section('content')
    <h3 style="margin: 50px 0; font-weight: bold;">트레이너 소개</h3>
    <hr>
    <div style="display: flex; width: 100%;">
        <div class="trainer-selector">
            @for($i = 1; $i <= 3; $i++)
                @if($i == 1)
                    <div class="trainer-btn {{ $i }} active">{{ $i }}호점</div>
                @else
                    <div class="trainer-btn {{ $i }}">{{ $i }}호점</div>
                @endif
            @endfor
        </div>
    </div>
    @for($i = 1; $i <=3; $i++)
        @if($i == 1)
            <div class="trainer-wrapper {{ $i }}" style="display: block;">
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t1.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">이우석</h3>
                        <h6>자격사항</h6>
                        <p>생활체육지도자자격증(보디빌딩,유도)
                            유도 공인 4단
                            교원자격증(체육)
                            바른체형지도자 / 스트레칭 지도자
                            chiropractic certificate
                            manual muscle testing certificate
                            trigger point & MPS certificate
                            rehabillitation training specialist
                            JDI sports academy 2기
                            Golf training program(JDI)
                            PET(physioexercise training)
                            primal move instructor
                            Seoul Osteopathic Study Group member
                        </p>
                    </div>
                </div>
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t3.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">장정훈</h3>
                        <h6>자격사항</h6>
                        <p>
                            생활체육지도자자격증(보디빌딩)
                            운동처방사
                            sterching instructor
                            PNF certificate of education
                            core training certificate
                            manual muscle testing certificate
                            trigger point & MPS certificate
                            rehabillitation training specialist
                            BOSU training specialist
                            davinci academy crtificate
                            thera-band academy certificate
                            TRX training certificate
                            Formroller core training certificate
                            PET(physio exercise training
                            Seoul Osteopathic Study Group member
                        </p>
                    </div>
                </div>
            </div>
        @elseif($i == 2)
            <div class="trainer-wrapper {{ $i }}" style="display: none;">
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t5.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">윤석훈</h3>
                        <h6>자격사항</h6>
                        <p>
                            생활체육지도자(3급)
                            FIASF 퍼스널 트레이너
                            다이어트 프로그래머 2급
                            한국인재교육원-운동재활 트레이닝 수료
                            K.E.M.A - 심화과정 수료(분당 재생병원)
                            A.C.S.M - CPT(미국대학 스포츠의학회)
                            Ares Kinesiology Taping Instructor
                        </p>
                    </div>
                </div>
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t6.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">송동섭</h3>
                        <h6>자격사항</h6>
                        <p>
                            생활체육지도자자격증(보디빌딩)
                            GYM BALL / GYM STICK certificate
                            MUSCL ACADEMY certificate
                            응그버치 CPR수료
                            스포츠마사지
                            스트레칭지도사
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div class="trainer-wrapper {{ $i }}" style="display: none;">
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t7.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">김재훈</h3>
                        <h6>자격사항</h6>
                        <p>
                            생활체육지도자 3급(보디빌딩)
                            스트레칭지도사
                            스포츠마사지
                            교원자격증(체육실기교사)
                            대한무예타이지도자 자격증
                            core training ceritificate
                            BOSU training specialist
                        </p>
                    </div>
                </div>
                <div class="trainer-container">
                    <div>
                        <img src="/img/branch/t8.jpg">
                    </div>
                    <div>
                        <h3 style="margin: 20px 0;">고민지</h3>
                        <h6>자격사항</h6>
                        <p>
                            대한퍼스널트레이닝자격증
                            대한요가지도자협회 3,2급 자격
                            대한요가지도자협회 1급 수료
                            CES(corrective exercise specialist)
                            교정운동전문가
                            Formroller core tranining certificate
                        </p>
                    </div>
                </div>
            </div>
        @endif
    @endfor
@endsection
@section('script')
    <script>
        $('.trainer-btn').click(function() {
            var index = $(this).attr('class').slice(-1);

            for(var i = 1; i <= 3; i++) {
                $('.trainer-wrapper.' + i).css('display', 'none');
                $('.trainer-btn')[i -1].classList.remove('active');
            }
            $('.trainer-wrapper.' + index).css('display', 'block');

            $(this).addClass('active');
        });
    </script>
@endsection