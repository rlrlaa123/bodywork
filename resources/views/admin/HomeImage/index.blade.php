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
            <th scope="row" colspan="3">배너 동영상</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <p><a href="{{ $home->video }}">[동영상 링크 : <span style="font-weight: bold;">{{ $home->video }}</span> ]</a></p>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th scope="row" colspan="3">배너 동영상</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img src="/{{ $home->home1 }}" width="200px">
                <p><a href="{{ $home->link1 }}">[연결된 링크 1 : <span style="font-weight: bold;">{{ $home->link1 }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->home2 }}" width="200px">
                <p><a href="{{ $home->link2 }}">[연결된 링크 2 : <span style="font-weight: bold;">{{ $home->link2 }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->home3 }}" width="200px">
                <p><a href="{{ $home->link3 }}">[연결된 링크 3 : <span style="font-weight: bold;">{{ $home->link3 }}</span> ]</a></p>
            </td>
        </tr>
        </tbody>
    </table>
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
                <p><a href="{{ $home->link1 }}">[연결된 링크 1 : <span style="font-weight: bold;">{{ $home->link1 }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->home2 }}" width="200px">
                <p><a href="{{ $home->link2 }}">[연결된 링크 2 : <span style="font-weight: bold;">{{ $home->link2 }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->home3 }}" width="200px">
                <p><a href="{{ $home->link3 }}">[연결된 링크 3 : <span style="font-weight: bold;">{{ $home->link3 }}</span> ]</a></p>
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
                <p><a href="{{ $home->bf1_link }}">[블로그 이동하기]</a></p>
            </td>
            <td>
                <img src="/{{ $home->bf2 }}" width="200px">
                <p><a href="{{ $home->bf2_link }}">[블로그 이동하기]</a></p>

            </td>
            <td>
                <img src="/{{ $home->bf3 }}" width="200px">
                <p><a href="{{ $home->bf3_link }}">[블로그 이동하기]</a></p>

            </td>
        </tr>
        <tr>
            <td>
                <img src="/{{ $home->bf4 }}" width="200px">
                <p><a href="{{ $home->bf4_link }}">[블로그 이동하기]</a></p>

            </td>
            <td>
                <img src="/{{ $home->bf5 }}" width="200px">
                <p><a href="{{ $home->bf5_link }}">[블로그 이동하기]</a></p>

            </td>
            <td>
                <img src="/{{ $home->bf6 }}" width="200px">
                <p><a href="{{ $home->bf6_link }}">[블로그 이동하기]</a></p>

            </td>
        </tr>
        <tr>
            <td>
                <img src="/{{ $home->bf7 }}" width="200px">
                <p><a href="{{ $home->bf7_link }}">[블로그 이동하기]</a></p>

            </td>
            <td>
                <img src="/{{ $home->bf8 }}" width="200px">
                <p><a href="{{ $home->bf8_link }}">[블로그 이동하기]</a></p>

            </td>
            <td>
                <img src="/{{ $home->bf9 }}" width="200px">
                <p><a href="{{ $home->bf9_link }}">[블로그 이동하기]</a></p>

            </td>
        </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
        <tr>
            <th scope="row" colspan="4">메뉴 사진</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img src="/{{ $home->menu1 }}" width="200px">
                <p><a href="{{ $home->menu1_link }}">[연결된 링크 1 : <span style="font-weight: bold;">{{ $home->menu1_link }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->menu2 }}" width="200px">
                <p><a href="{{ $home->menu2_link }}">[연결된 링크 2 : <span style="font-weight: bold;">{{ $home->menu2_link }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->menu3 }}" width="200px">
                <p><a href="{{ $home->menu3_link }}">[연결된 링크 3 : <span style="font-weight: bold;">{{ $home->menu3_link }}</span> ]</a></p>
            </td>
            <td>
                <img src="/{{ $home->menu4 }}" width="200px">
                <p><a href="{{ $home->menu4_link }}">[연결된 링크 3 : <span style="font-weight: bold;">{{ $home->menu4_link }}</span> ]</a></p>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('script')
    <script>
    </script>
@endsection