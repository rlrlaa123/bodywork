@extends('layouts.admin')
@section('style')
    <style>
        td {
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ PT 레슨 문의</h4>
    </header>
    <hr>
    <table class="table">
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
            <th scope="row"><label for="reply">답변 <img src="/img/reply.png" width="15px"></label></th>
            <td colspan="3" class="content">
                <form method="POST" action="{{ route('admin.lesson.update', $lesson->id) }}" enctype="multipart/form-data" id="lesson" style="display: flex;">
                    {!! csrf_field() !!}
                    {!! method_field('PUT') !!}
                    <textarea id="reply" name="reply" type="text">{{ old('reply', $lesson->reply) }}</textarea>
                    @if ($errors->has('email'))
                        <div class="help-block">
                            {{ $errors->first('reply') }}
                        </div>
                    @endif
                    <button type="submit" style="margin-left: 20px;">작성하기</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('script')
    <script></script>
@endsection