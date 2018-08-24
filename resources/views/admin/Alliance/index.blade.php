@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 제휴업체 리스트</h4>
    </header>
    <hr>
    <table class="table">
        <col width="20%">
        <col width="40%">
        <col width="20%">
        <col width="20%">
        <thead>
        <tr>
            <th>이미지</th>
            <th>내용</th>
            <th>등록일</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($alliances as $alliance)
            <tr>
                <td>
                    <img src="/{{ $alliance->image }}" width="200px">
                    <p style="font-weight: bold;"><a href="{{ $alliance->link }}">[ 링크 바로가기 ]</a></p>
                </td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.alliance.edit', [$alliance->id]) }}">
                        {{ $alliance->description }}
                    </a>
                </td>
                <td>{{ $alliance->created_at }}</td>
                <td><a class="delete" onclick="deleteConversation({{ $alliance->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $alliances->previousPageUrl() }}">이전</a></li>
        @if($alliances->total()/5 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($alliances->total() % 5 == 0)
                @for($i = 1; $i <= $alliances->total()/5; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $alliances->total()/5 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $alliances->nextPageUrl() }}">다음</a></li>
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
                    url: 'alliance/' + id
                }).then(function (res) {
                    window.location.href = '/admin/alliance'
                })
            }
        }
    </script>
@endsection
