@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 이벤트</h4>
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
        @forelse($freelessons as $freelesson)
            <tr>
                <td>{{ $freelesson->id }}</td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.freelesson.show', [$freelesson->id]) }}">
                        {{ $freelesson->title }}
                    </a>
                </td>
                <td>{{ $freelesson->name }}</td>
                <td><a class="delete" onclick="deleteConversation({{ $freelesson->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $freelessons->previousPageUrl() }}">이전</a></li>
        @if($freelessons->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @for($i = 1; $i <= $freelessons->total()/10; $i++)
                <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        @endif
        <li class="page-item"><a class="page-link" href="{{ $freelessons->nextPageUrl() }}">다음</a></li>
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
                    url: 'freelesson/' + id
                }).then(function (res) {
                    window.location.href = '/admin/freelesson'
                })
            }
        }
    </script>
@endsection
