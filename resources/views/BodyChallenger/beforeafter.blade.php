@extends('layouts.app')
@section('style')
    <style>
        h3 {
            margin: 0 50px;
        }

        hr {
            margin: 50px;
        }

        .review-wrapper {
            display: grid;
            display: -ms-grid;
            grid-template-columns: repeat(3, 33.3%);
            -ms-grid-columns: 33.3% 33.3% 33.3%;
            margin: 0 50px;
        }

        .review-container:nth-child(1) {
            -ms-grid-column: 1;
        }

        .review-container:nth-child(2) {
            -ms-grid-column: 2;
        }

        .review-container:nth-child(3) {
            -ms-grid-column: 3;
        }

        .review-container:nth-child(4) {
            -ms-grid-column: 4;
        }

        .review-container:nth-child(5) {
            -ms-grid-column: 5;
        }

        .review-container:nth-child(6) {
            -ms-grid-column: 6;
        }

        .review-container {
            margin: 20px 0;
            cursor: pointer;
        }

        .review-container img {
            width: 100%;
            max-width: 270px;
        }

        .pagination {
            margin: 50px;
            justify-content: center;
        }

        .page-link {
            color: grey;
        }

        .page-link:hover {
            color: unset;
        }
        @media (orientation: portrait) {
            .review-wrapper {
                display: block;
                margin: 0 50px;
            }
        }
    </style>
@endsection
@section('content')
    <h3 style="margin: 50px 0; font-weight: bold;">Before & After</h3>
    <hr>
    <p style="text-align: left; margin: 20px 50px;">포토샵없는 리얼 후기사진입니다.</p>
    <div class="review-wrapper">
        @foreach($bfs as $bf)
            <div class="review-container">
                <img src="/{{ $bf->image }}">
            </div>
        @endforeach
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $bfs->previousPageUrl() }}">이전</a></li>
        @if($bfs->total()/6 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($bfs->total() % 6 == 0)
                @for($i = 1; $i <= $bfs->total()/6; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $bfs->total()/6 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $bfs->nextPageUrl() }}">다음</a></li>
    </ul>
@endsection
@section('script')
    <script>
    </script>
@endsection