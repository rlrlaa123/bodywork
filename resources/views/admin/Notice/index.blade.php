@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 공지사항</h4>
        <button class="create-btn" onclick="location.href='notice/create'">새 글 쓰기</button>
    </header>
    <hr>
    <table class="table">
        <col width="10%">
        <col width="70%">
        <col width="10%">
        <col width="10%">
        <thead>
        <tr>
            <th>일련번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($notices as $notice)
            <tr>
                <td>{{ $notice->id }}</td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.notice.edit', [$notice->id]) }}">
                        {{ $notice->title }}
                    </a>
                </td>
                <td>{{ $notice->author }}</td>
                <td><a class="delete" onclick="deleteConversation({{ $notice->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $notices->previousPageUrl() }}">이전</a></li>
        @if($notices->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @for($i = 1; $i <= $notices->total()/10; $i++)
                <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        @endif
        <li class="page-item"><a class="page-link" href="{{ $notices->nextPageUrl() }}">다음</a></li>
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
                    url: 'notice/' + id
                }).then(function (res) {
                    window.location.href = '/admin/notice'
                })
            }
        }
    </script>
@endsection
