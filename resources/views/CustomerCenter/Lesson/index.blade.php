@extends('layouts.app_dashboard')
@section('style')
    <style>
        .btn-wrapper {
            text-align: right;
            margin: 0 50px;
        }

        @media(orientation: portrait) {
            .cover-image {
                height: 250px;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/6.png">
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
        <a href="{{ route('lesson.create') }}"><button class="btn">글쓰기</button></a>
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?page=1">처음</a></li>
        @if($block <= 1)
        @else
            <li class="page-item"><a class="page-link" href="?page={{ $b_start_page - 1 }}">이전</a></li>
        @endif
        @for($i = $b_start_page; $i <=$b_end_page; $i++)
            <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
        @endfor
        @if($block >= $total_block)
        @else
            <li class="page-item"><a class="page-link" href="?page={{ $b_end_page + 1 }}">다음</a></li>
        @endif
        <li class="page-item"><a class="page-link" href="?page={{ $total_page }}">마지막</a></li>
    </ul>
@endsection
@section('script')
@endsection