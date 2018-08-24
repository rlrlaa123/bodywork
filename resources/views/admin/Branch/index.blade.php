@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 지점소개</h4>
    </header>
    <hr>
    <table class="table">
        <col width="5%">
        <col width="50%">
        <col width="15%">
        <col width="15%">
        <col width="10%">
        <col width="5%">
        <thead>
        <tr>
            <th>호점</th>
            <th>소개글</th>
            <th>주소</th>
            <th>전화번호</th>
            <th>운영시간</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($branches as $branch)
            <tr>
                <td>{{ $branch->number }}호점</td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.branch.edit', [$branch->id]) }}">
                        {{ $branch->description }}
                    </a>
                </td>
                <td>{{ $branch->location }}</td>
                <td>{{ $branch->phone }}</td>
                <td>
                    <p>{{ $branch->time1 }}</p>
                    <p>{{ $branch->time2 }}</p>
                    <p>{{ $branch->time3 }}</p>
                </td>
                <td><a class="delete" onclick="deleteConversation({{ $branch->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $branches->previousPageUrl() }}">이전</a></li>
        @if($branches->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($branches->total() % 10 == 0)
                @for($i = 1; $i <= $branches->total()/10; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $branches->total()/10 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $branches->nextPageUrl() }}">다음</a></li>
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
                    url: 'branch/' + id
                }).then(function (res) {
                    window.location.href = '/admin/branch'
                })
            }
        }
    </script>
@endsection
