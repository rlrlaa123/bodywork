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
            font-size: 2vw;
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
            display: -ms-grid;
            grid-template-columns: 50% 50%;
            -ms-grid-columns: 50% 50%;
            margin: 50px;
        }

        .trainer-container div:nth-child(1) {
            -ms-grid-column: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .trainer-container div:nth-child(2) {
            -ms-grid-column: 2;
        }

        .trainer-container div:nth-child(1) img {
            /*width: 80%;*/
            height: 400px;
        }

        .trainer-container div:nth-child(2) {
            margin: 50px;
            border-left: 2px solid orange;
            text-align: left;
            padding-left: 30px;
        }

        @media (orientation: portrait) {
            .trainer-selector {
                display: block;
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
                /*width: 100%;*/
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
            @for($i = 1; $i <= count($branches); $i++)
                <div class="trainer-btn {{ preg_match('/branch\/2\/' . $i . '/', $_SERVER['REQUEST_URI'])
                                           ? 'active' : ''}}"><a href="/branch/2/{{ $i }}">{{ $i }}호점</a></div>
            @endfor
        </div>
    </div>
    @foreach($trainers as $trainer)
        <div class="trainer-wrapper">
            <div class="trainer-container">
                <div>
                    <img src="/{{ $trainer->image }}">
                </div>
                <div>
                    <h3 style="margin: 20px 0; margin-top: 0;">{{ $trainer->name }}</h3>
                    <h6>자격사항</h6>
                    <p>{!! nl2br($trainer->description) !!}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script>
    </script>
@endsection