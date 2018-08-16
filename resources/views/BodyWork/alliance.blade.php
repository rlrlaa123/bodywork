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
            grid-template-columns: repeat(3, 33.3%);
            -ms-grid-columns: 33.3% 33.3% 33.3%;
            margin: 0 50px;
        }

        .review-container {
            margin: 20px 50px;
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
    <h3 style="margin: 50px 0; font-weight: bold;">제휴업체</h3>
    <hr>
    <div class="review-wrapper">
        @foreach($alliances as $alliance)
            <div class="review-container">
                <img src="/{{ $alliance->image }}">
                <p style="font-weight: bold; margin: 10px 0;">{{ $alliance->description }}!</p>
            </div>
        @endforeach
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $alliances->previousPageUrl() }}">이전</a></li>
        @if($alliances->total()/6 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($alliances->total() % 6 == 0)
                @for($i = 1; $i <= $alliances->total()/6; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $alliances->total()/6 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $alliances->nextPageUrl() }}">다음</a></li>
    </ul>
@endsection
@section('script')
    <script>
    </script>
@endsection