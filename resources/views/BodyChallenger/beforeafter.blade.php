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
            /*grid-gap: 20px;*/
        }

        .review-container {
            margin: 20px 0;
            cursor: pointer;
        }

        .review-container img {
            width: 100%;
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
        <div class="review-container">
            <img src="/img/bf.jpg">
        </div>
        <div class="review-container">
            <img src="/img/bf2.jpg">
        </div>
        <div class="review-container">
            <img src="/img/bf3.jpg">
        </div>
        <div class="review-container">
            <img src="/img/bf4.jpg">
        </div>
        <div class="review-container">
            <img src="/img/bf5.jpg">
        </div>
        <div class="review-container">
            <img src="/img/bf6.jpg">
        </div>
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">이전</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">다음</a></li>
    </ul>
@endsection
@section('script')
    <script>
    </script>
@endsection