@extends('layouts.app_dashboard')
@section('style')
    <style>
        .btn-wrapper {
            text-align: right;
            margin: 0 50px;
        }
    </style>
@endsection
@section('content')
    <h3>PT 레슨 문의</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover landscape">
            <col width="10%">
            <col width="45%">
            <col width="15%">
            <col width="15%">
            <col width="15%">
            <thead>
            <tr>
                <th>No</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>작성일</th>
                <th>조회수</th>
            </tr>
            </thead>
            <tbody>

            @forelse($lessons as $lesson)
                <tr onclick="location.href = '{{ route('lesson.lock', $lesson->id) }}'">
                    <td>{{ $lesson->id }}</td>
                    <td>
                        {{ $lesson->title }}
                        <img src="/img/lock.png" width="20px" style="margin-bottom: 5px;">
                        @if($lesson->reply != null)
                            <span style="color: red;">답변완료!</span>
                        @else
                        @endif
                    </td>
                    <td>{{ $lesson->name }}</td>
                    <td>{{ $lesson->created_at }}</td>
                    <td>{{ $lesson->view }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="min-width: 1200px;">게시글이 없습니다.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <table class="table table-hover portrait">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <thead>
            <tr>
                <th>No</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>작성일</th>
                <th>조회수</th>
            </tr>
            </thead>
            <tbody>

            @forelse($lessons as $lesson)
                <tr onclick="location.href = '{{ route('lesson.lock', $lesson->id) }}'">
                    <td>{{ $lesson->id }}</td>
                    <td>{{ $lesson->title }}</td>
                    <td>{{ $lesson->name }}</td>
                    <td>{{ $lesson->created_at }}</td>
                    <td>{{ $lesson->view }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="min-width: 300px;">게시글이 없습니다.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="btn-wrapper">
        <button class="btn"><a href="{{ route('lesson.create') }}">글쓰기</a></button>
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $lessons->previousPageUrl() }}">이전</a></li>
        @if($lessons->total()/10 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @for($i = 1; $i <= $lessons->total()/10; $i++)
                <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        @endif
        <li class="page-item"><a class="page-link" href="{{ $lessons->nextPageUrl() }}">다음</a></li>
    </ul>
@endsection
@section('script')
@endsection