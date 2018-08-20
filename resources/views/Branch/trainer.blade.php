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
            display: -ms-grid;
            grid-template-columns: 50% 50%;
            -ms-grid-columns: 50% 50%;
            margin: 50px;
        }

        .trainer-container div:nth-child(1) {
            -ms-grid-column: 1;
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
                @if($i == 1)
                    <div class="trainer-btn {{ $i }} active">{{ $i }}호점</div>
                @else
                    <div class="trainer-btn {{ $i }}">{{ $i }}호점</div>
                @endif
            @endfor
        </div>
    </div>
    @foreach($branches as $i => $branch)
        @foreach(\App\Trainer::where('branch_id', $branch->number)->get() as $trainer)
            @if($i== 0)
                <div class="trainer-wrapper {{ $branch->number }}" style="display: block;">
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
            @else
                <div class="trainer-wrapper {{ $branch->number }}" style="display: none;">
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
            @endif
        @endforeach
    @endforeach
@endsection
@section('script')
    <script>
        $('.trainer-btn').click(function () {
            var index = $(this).attr('class').slice(-1);

            for (var i = 1; i <= 3; i++) {
                $('.trainer-wrapper.' + i).css('display', 'none');
                $('.trainer-btn')[i - 1].classList.remove('active');
            }
            $('.trainer-wrapper.' + index).css('display', 'block');

            $(this).addClass('active');
        });
    </script>
@endsection