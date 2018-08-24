@extends('layouts.app')
@section('style')
    <style>

        h3 {
            font-size: 3vw;
        }

        h4 {
            font-size: 2vw;
        }

        p {
            font-size: 1.5vw;
            margin: 20px 0;
        }

        .pt-program-wrapper-1 {
            display: grid;
            display: -ms-grid;
            grid-template-columns: 55% 45%;
            -ms-grid-columns: 55% 45%;
            margin: 50px;
            text-align: left;
        }

        .pt-program-wrapper-1 div:nth-child(1) {
            -ms-grid-column: 1;
        }

        .pt-program-wrapper-1 div:nth-child(2) {
            -ms-grid-column: 2;
        }

        .pt-program-wrapper-1 div:nth-child(1) img {
            width: 100%;
        }

        .pt-program-wrapper-1 div:nth-child(2) {
            background-color: #f6cbca;
            padding: 20px;
        }

        .pt-program-wrapper-2 {
            display: grid;
            display: -ms-grid;
            grid-template-columns: 45% 55%;
            -ms-grid-columns: 45% 55%;
            margin: 50px;
            text-align: left;
        }

        .pt-program-wrapper-2 div:nth-child(1) {
            -ms-grid-column: 1;
        }

        .pt-program-wrapper-2 div:nth-child(2) {
            -ms-grid-column: 2;
        }

        .pt-program-wrapper-2 div:nth-child(2) img {
            width: 100%;
        }

        .pt-program-wrapper-2 div:nth-child(1) {
            background-color: #e3eef5;
            padding: 20px;
        }

        .pt-program-wrapper-3 {
            display: none;
            margin: 50px;
            text-align: left;
        }

        .pt-program-wrapper-3 div:nth-child(1) img {
            width: 100%;
        }

        .pt-program-wrapper-3 div:nth-child(2) {
            background-color: #e3eef5;
            padding: 20px;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }

            .pt-program-wrapper-1 {
                display: block;
            }

            .pt-program-wrapper-1 div:nth-child(2) h3 {
                font-size: 20px;
            }

            .pt-program-wrapper-2 {
                display: none;
            }

            .pt-program-wrapper-3 {
                display: block;
            }

            .pt-program-wrapper-3 div:nth-child(2) h3 {
                font-size: 20px;
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
    <h3 style="margin: 50px 0; font-weight: bold;">PT 프로그램</h3>
    <hr>
    <div class="pt-program-wrapper-1">
        <div>
            <img src="/img/pt_program/4.png">
        </div>
        <div>
            <h3>Diet</h3>
            <h3>다이어트 프로그램</h3>
            <p>고객의 목표와 몸상태에 맞는 1:1트레이닝과
                다이어트식단으로 빠르고 정확한 다이어트관리를
                진행하며 요요현상없이 몸이 상하지 않고 건강한
                다이어트를 진행합니다.</p>
        </div>
    </div>
    <div class="pt-program-wrapper-2">
        <div>
            <h3>Body Shaping</h3>
            <h3>바디쉐이핑</h3>
            <p>
                바디쉐이핑은 단순한 근매스증가나 체중감량이아닌
                볼륨감이는 몸매를 만들어드리는 특별한 맞춤
                프로그램입니다.<br><br> 근육은 유지또는 증가시키며 체지방은
                빼내 몸의 데피니션을 살려 탄력있는 바디라이 몸매를
                만들어 드립니다.
            </p>
        </div>
        <div>
            <img src="/img/pt_program/5.png">
        </div>
    </div>

    <div class="pt-program-wrapper-3">
        <div>
            <img src="/img/pt_program/5.png">
        </div>
        <div>
            <h3>Body Shaping</h3>
            <h3>바디쉐이핑</h3>
            <p>
                바디쉐이핑은 단순한 근매스증가나 체중감량이아닌
                볼륨감이는 몸매를 만들어드리는 특별한 맞춤
                프로그램입니다.<br><br> 근육은 유지또는 증가시키며 체지방은
                빼내 몸의 데피니션을 살려 탄력있는 바디라이 몸매를
                만들어 드립니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-1">
        <div>
            <img src="/img/pt_program/6.png">
        </div>
        <div>
            <h3>Rehabilitation</h3>
            <h3>재활 및 교정 프로그램</h3>
            <p>
                각 관절의 부상 및 부정렬로 인한 기능부전을 회복시키기위한
                트레이닝으로 재활에 필료한 도구나 도수를 이용한 운동
                프로그램입니다. <br><br>통증으로 인한 운동부족과 체력저하로
                운동이 겁이나서 하지 못하셨던 분들게 추천하는 프로그램입니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-2">
        <div>
            <h3>Golf</h3>
            <h3>골프 트레이닝</h3>
            <p>
                골프에서 가장 필요한 근력과 파워,유연성,밸런스,
                안정성을 향상 시킬수 있는 전문 운동 프로그램이며
                골프시 부족한 비거리향상, 정확성 증가, 스윙의
                일관성유지등을 위해 더욱 세밀한 트레이닝으로 보완해
                나갈 수 있는 프로그램입니다.
            </p>
        </div>
        <div>
            <img src="/img/pt_program/7.png">
        </div>
    </div>

    <div class="pt-program-wrapper-3">
        <div>
            <img src="/img/pt_program/7.png">
        </div>
        <div>
            <h3>Golf</h3>
            <h3>골프 트레이닝</h3>
            <p>
                골프에서 가장 필요한 근력과 파워,유연성,밸런스,
                안정성을 향상 시킬수 있는 전문 운동 프로그램이며
                골프시 부족한 비거리향상, 정확성 증가, 스윙의
                일관성유지등을 위해 더욱 세밀한 트레이닝으로 보완해
                나갈 수 있는 프로그램입니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-1">
        <div>
            <img src="/img/pt_program/8.png">
        </div>
        <div>
            <h3>Bodybuilding</h3>
            <h3>시합 준비 프로그램</h3>
            <p>
                보디빌딩 / 피트니스 / 비키니 / 피지크 등 각 종목의
                세부적인 트레이닝 기술과 무대를 위한 포즈레슨을 경험이
                많은 국가대표출신의 트레이너가 진행하는 프로그램입니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-2">
        <div>
            <h3>Body Profile</h3>
            <h3>바디프로필 프로그램</h3>
            <p>
                운동을 통해 인생에 있어서 한번쯤은 가장 좋았던 바디라인을 간직할 수 있도록
                진행되는 프로그램입니다.
            </p>
        </div>
        <div>
            <img src="/img/pt_program/14.jpg">
        </div>
    </div>

    <div class="pt-program-wrapper-3">
        <div>
            <img src="/img/pt_program/14.jpg">
        </div>
        <div>
            <h3>Body Profile</h3>
            <h3>바디프로필 프로그램</h3>
            <p>
                운동을 통해 인생에 있어서 한번쯤은 가장 좋았던 바디라인을 간직할 수 있도록
                진행되는 프로그램입니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-1">
        <div>
            <img src="/img/pt_program/12.jpg">
        </div>
        <div>
            <h3>Weight Training</h3>
            <h3>체력 및 근력증가 프로그램</h3>
            <p>
                근육량 증가와 신체기능 개선을 위한 운동으로
                고객의 체형에 맞는 운동프로그램을 제시하여
                체력증진에 도움을 주는 프로그램입니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-2">
        <div>
            <h3>Kids Training</h3>
            <h3>성장기 프로그램</h3>
            <p>
                성장기에 있는 어린이들에게 가장 필요한 신경적응 및 발달과
                운동기능향상, 원활한 성장 유도 그리고 가장 중요한 협응력을
                위해 재미있고 무리되지 않는 운동프로그램을 제고합니다.
            </p>
        </div>
        <div>
            <img src="/img/pt_program/13.jpg">
        </div>
    </div>

    <div class="pt-program-wrapper-3">
        <div>
            <img src="/img/pt_program/13.jpg">
        </div>
        <div>
            <h3>Kids Training</h3>
            <h3>성장기 프로그램</h3>
            <p>
                성장기에 있는 어린이들에게 가장 필요한 신경적응 및 발달과
                운동기능향상, 원활한 성장 유도 그리고 가장 중요한 협응력을
                위해 재미있고 무리되지 않는 운동프로그램을 제고합니다.
            </p>
        </div>
    </div>

    <div class="pt-program-wrapper-1">
        <div>
            <img src="/img/pt_program/11.jpg">
        </div>
        <div>
            <h3>Silver Training</h3>
            <h3>실버 프로그램</h3>
            <p>
                실버 트레이닝은 성인병 예방과 관리, 부상방지, 삶의 자신감 등 장,노년층의
                어른들을 위해 필요한 신체활동을 할 수 있게 도와드리며
                노년에는 근력과 밸런스가 중요하므로 관절에 무리가 가지 않는 안정적인 운동을
                바탕으로 효율적인 운동 프로그램을 적용해 몸에 대한 스스로의 관리가
                될 수 있도록 도와드리는 프로그램입니다.
            </p>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection