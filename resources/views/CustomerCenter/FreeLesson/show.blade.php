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
    <h3>무료 PT 신청</h3>
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
                <td colspan="3">{{ $freelesson->title }}</td>
            </tr>
            <tr>
                <th scope="row">이름</th>
                <td>{{ $freelesson->name }}</td>
                <th scope="row">이메일</th>
                <td>{{ $freelesson->email }}</td>
            </tr>
            <tr>
                <th scope="row">조회수</th>
                <td>{{ $freelesson->view }}</td>
                <th scope="row">등록일</th>
                <td>{{ $freelesson->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">내용</th>
                <td colspan="3" class="content">
                    {!! nl2br($freelesson->contents) !!}
                </td>
            </tr>
            <tr>
                <th scope="row">답변 <img src="/img/reply.png" width="15px"></th>
                <td colspan="3" class="content">
                    {!! nl2br($freelesson->reply) !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection