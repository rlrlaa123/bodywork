@extends('layouts.app')
@section('style')
    <style>
        .cover-image {
            width: 100%;
            height: 400px;
        }

        @media (orientation: portrait) {
            .cover-image {
                width: 100%;
                height: 250px;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/pt_program/1.jpg">
    <h3 style="margin: 50px 0; font-weight: bold;">제휴업체</h3>
    <hr>
@endsection
@section('script')
    <script>
    </script>
@endsection