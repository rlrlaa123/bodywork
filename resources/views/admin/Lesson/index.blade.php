@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ PT 레슨 문의</h4>
    </header>
    <hr>
    <table class="table">
        <col width="10%">
        <col width="20%">
        <col width="50%">
        <col width="10%">
        <col width="10%">
        <thead>
        <tr>
            <th>일련번호</th>
            <th>제목</th>
            <th>내용</th>
            <th>작성자</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($lessons as $lesson)
            <tr>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->title }}</td>
                <td style="text-align: left;">
                    <a class="name-selector"
                       href="{{ route('admin.lesson.show', [$lesson->id]) }}">
                        {!! nl2br($lesson->contents) !!}
                    </a>
                </td>
                <td>{{ $lesson->name }}</td>
                <td><a class="delete" onclick="deleteConversation({{ $lesson->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $lessons->previousPageUrl() }}">이전</a></li>
        @if($lessons->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($lessons->total() % 10 == 0)
                @for($i = 1; $i <= $lessons->total()/10; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $lessons->total()/10 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $lessons->nextPageUrl() }}">다음</a></li>
    </ul>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteConversation(id) {
            if (confirm('글을 삭제합니다.')) {
                $.ajax({
                    type: 'DELETE',
                    url: 'lesson/' + id
                }).then(function (res) {
                    window.location.href = '/admin/lesson'
                })
            }
        }
    </script>
@endsection
