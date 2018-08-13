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
    <h3>PT 레슨 문의</h3>
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
                <td colspan="3">{{ $lesson->title }}</td>
            </tr>
            <tr>
                <th scope="row">이름</th>
                <td>{{ $lesson->name }}</td>
                <th scope="row">이메일</th>
                <td>{{ $lesson->email }}</td>
            </tr>
            <tr>
                <th scope="row">조회수</th>
                <td>{{ $lesson->view }}</td>
                <th scope="row">등록일</th>
                <td>{{ $lesson->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">내용</th>
                <td colspan="3" class="content">
                    {!! nl2br($lesson->contents) !!}
                </td>
            </tr>
            <tr>
                <th scope="row">답변 <img src="/img/reply.png" width="15px"></th>
                <td colspan="3" class="content">
                    {!! nl2br($lesson->answers) !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection