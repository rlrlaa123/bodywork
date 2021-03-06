@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 이벤트</h4>
        <button class="create-btn" onclick="location.href='event/create'">새 글 쓰기</button>
    </header>
    <hr>
    <table class="table">
        <col width="20%">
        <col width="20%">
        <col width="45%">
        <col width="10%">
        <col width="10%">
        <thead>
        <tr>
            <th>이미지</th>
            <th>제목</th>
            <th>내용</th>
            <th>작성자</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($events as $event)
            <tr>
                <td>
                    @if($event->image == null)
                        <img src="/img/noimage.png" width="100px">
                    @else
                        <img src="/{{ $event->image }}" width="100px"></td>
                @endif
                <td>{{ $event->title }}</td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.event.edit', [$event->id]) }}">
                        {!! nl2br($event->contents) !!}
                    </a>
                </td>
                <td>{{ $event->author }}</td>
                <td><a class="delete" onclick="deleteConversation({{ $event->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $events->previousPageUrl() }}">이전</a></li>
        @if($events->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($events->total() % 10 == 0)
                @for($i = 1; $i <= $events->total()/10; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $events->total()/10 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $events->nextPageUrl() }}">다음</a></li>
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
                    url: 'event/' + id
                }).then(function (res) {
                    window.location.href = '/admin/event'
                })
            }
        }
    </script>
@endsection
