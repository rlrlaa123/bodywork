@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 팝업 배너 관리</h4>
        <button class="create-btn" onclick="location.href='popup/create'">새 팝업 추가</button>
    </header>
    <hr>
    <table class="table">
        <col width="15%">
        <col width="15%">
        <col width="40%">
        <col width="15%">
        <col width="10%">
        <thead>
        <tr>
            <th>이미지</th>
            <th>제목</th>
            <th>위치 및 크기</th>
            <th>링크</th>
            <th>표시</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($popups as $popup)
            <tr>
                <td>
                    @if($popup->image == null)
                        <img src="/img/noimage.png" width="100px">
                    @else
                        <img src="/{{ $popup->image }}" width="100px">
                    @endif
                </td>
                <td>
                    {!! nl2br($popup->title) !!}
                </td>
                <td>
                    <a class="name-selector"
                        href="{{ route('admin.popup.edit', [$popup->id]) }}">
                        x: {{ $popup->top }}, y: {{ $popup->left }}, width: {{ $popup->width }}, height: {{ $popup->height }}
                    </a>
                </td>
                <td>
                    {{ $popup->link }}
                </td>
                <td>
                    <form method="POST" action="{{ route('admin.popup.checked', $popup->id) }}">
                        {!! csrf_field() !!}
                        <input id="checked{{ $popup->id }}" name="checked{{ $popup->id }}" type="checkbox" {{ ($popup->checked == 1 ? "checked" : "") }} onChange="this.form.submit()">
                    </form>
                </td>
                <td><a class="delete" onclick="deleteConversation({{ $popup->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $popups->previousPageUrl() }}">이전</a></li>
        @if($popups->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($popups->total() % 10 == 0)
                @for($i = 1; $i <= $popups->total()/10; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $popups->total()/10 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $popups->nextPageUrl() }}">다음</a></li>
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
                    url: 'popup/' + id
                }).then(function (res) {
                    window.location.href = '/admin/popup'
                })
            }
        }
    </script>
@endsection
