@extends('layouts.app_dashboard')
@section('style')
    <style>
        .content {
            text-align: left;
        }

        .content img {
            width: 80%;
            display: block;
            margin-bottom: 50px;
        }

        th {
            background-color: #f6f6f6;
            /*min-width: 100px;*/
        }

        td {
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <h3>공지사항</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">
            <col width="20%">
            <col width="30%">
            <col width="20%">
            <col width="30%">
            <tbody>
            <tr>
                <th scope="row">제목</th>
                <td colspan="3">{{ $notice->title }}</td>
            </tr>
            <tr>
                <th scope="row">조회수</th>
                <td>{{ $notice->view }}</td>
                <th scope="row">등록일</th>
                <td>{{ $notice->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">내용</th>
                <td colspan="3" class="content">
                    @if($notice->image == null)
                    @else
                        <img src="/{{ $notice->image }}">
                    @endif
                    {!! nl2br($notice->contents) !!}
                </td>
            </tr>
            <tr>
                <th scope="row">첨부파일</th>
                <td colspan="3">{{ substr($notice->image, 16) }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection