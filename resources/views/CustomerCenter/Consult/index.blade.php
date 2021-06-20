@extends('layouts.app_dashboard')
@section('style')
<style>
    .consult {
        margin: 0 50px;
    }
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
        .consult {
            margin: 0 25px;
        }

        .cover-image {
            height: 250px;
        }

        .bodywork-kakao {
            display: block;
            margin: 0 25px;
            margin-bottom: 50px;
            padding: 5px;
            background-color: #3f2121;
        }
    }
</style>
@endsection
@section('content')
    <h3>실시간 상담</h3>
    <hr>
    @component('Components.consult')
    @endcomponent
@endsection
@section('script')
@endsection