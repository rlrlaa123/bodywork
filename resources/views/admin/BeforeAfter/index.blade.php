@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ Before & After 리스트</h4>
    </header>
    <hr>
    <table class="table">
        <col width="33.3%">
        <col width="33.3%">
        <col width="33.3%">
        <thead>
        <tr>
            <th>이미지</th>
            <th>등록일</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($bfs as $bf)
            <tr>
                <td><img src="/{{ $bf->image }}" width="200px"></td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.beforeafter.edit', [$bf->id]) }}">
                        {{ $bf->created_at }}
                    </a>
                </td>
                <td><a class="delete" onclick="deleteConversation({{ $bf->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $bfs->previousPageUrl() }}">이전</a></li>
        @if($bfs->total()/5 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($bfs->total() % 5 == 0)
                @for($i = 1; $i <= $bfs->total()/5; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $bfs->total()/5 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $bfs->nextPageUrl() }}">다음</a></li>
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
                    url: 'beforeafter/' + id
                }).then(function (res) {
                    window.location.href = '/admin/beforeafter'
                })
            }
        }
    </script>
@endsection
