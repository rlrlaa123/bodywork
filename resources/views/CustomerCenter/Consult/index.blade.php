@extends('layouts.app_dashboard')
@section('style')
    <style>
        .bodywork-kakao {
            display: flex;
            justify-content: space-between;
            margin: 0 50px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: #3f2121;
        }

        .bodywork-kakao div {
            margin: 0 20px;
        }

        @media (orientation: portrait) {
            .cover-image {
                height: 250px;
            }

            .bodywork-kakao {
                display: flex;
                justify-content: space-between;
                margin: 0 50px;
                margin-bottom: 50px;
                padding: 5px;
                background-color: #3f2121;
            }

            .bodywork-kakao div {
                margin: 0 5px;
            }
        }
    </style>
@endsection
@section('content')
    <h3>실시간 상담</h3>
    <hr>
    <div style="margin: 0 50px;">
        <img src="/img/consult1.png" width="100%">
    </div>
    <div class="bodywork-kakao">
        <div>
            <a href="http://pf.kakao.com/_VZdxoC">
                <img src="/img/consult2.png" width="100%">
            </a>
        </div>
        <div>
            <a href="http://pf.kakao.com/_cpSAj">
                <img src="/img/consult3.png" width="100%">
            </a>
        </div>
        <div>
            <a href="http://pf.kakao.com/_pxjpxoC">
                <img src="/img/consult4.png" width="100%">
            </a>
        </div>
    </div>
@endsection
@section('script')
@endsection