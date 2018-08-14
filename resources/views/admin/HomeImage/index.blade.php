@extends('layouts.admin')
@section('style')
    <style>
        p {
            margin: 10px 0;
        }

        th {
            background-color: #f6f6f6;
            font-weight: normal;
            font-size: 15px;
        }
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 홈 화면 관리</h4>
        <button class="create-btn" onclick="location.href='/admin/edit'">수정하기</button>
    </header>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="row" colspan="3">배너 사진</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img src="/{{ $home->home1 }}" width="200px">
                <p>연결된 링크 1: {{ $home->link1 }}</p>
            </td>
            <td>
                <img src="/{{ $home->home2 }}" width="200px">
                <p>연결된 링크 2: {{ $home->link2 }}</p>
            </td>
            <td>
                <img src="/{{ $home->home3 }}" width="200px">
                <p>연결된 링크 3: {{ $home->link3 }}</p>
            </td>
        </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
        <tr>
            <th scope="row" colspan="3">Before & After 사진</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img src="/{{ $home->bf1 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf2 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf3 }}" width="200px">
            </td>
        </tr>
        <tr>
            <td>
                <img src="/{{ $home->bf4 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf5 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf6 }}" width="200px">
            </td>
        </tr>
        <tr>
            <td>
                <img src="/{{ $home->bf7 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf8 }}" width="200px">
            </td>
            <td>
                <img src="/{{ $home->bf9 }}" width="200px">
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('script')
    <script>
    </script>
@endsection