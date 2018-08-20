@extends('layouts.app_dashboard')
@section('style')
    <style>
        .cover-image {
            width: 100%;
            height: 400px;
        }

        @media(orientation: portrait) {
            .table-responsive {
                width: 90%;
            }

            hr {
                width: 90%;
            }

            .cover-image {
                height: 250px;
            }
        }
    </style>
@endsection
@section('content')
    <img class="cover-image" src="/img/6.png">
    <h3>공지사항</h3>
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

            @forelse($notices as $notice)
                <tr onclick="location.href = '{{ route('notice.show', $notice->id) }}'">
                    <td>{{ $notice->id }}</td>
                    <td>{{ $notice->title }}</td>
                    <td>{{ $notice->author }}</td>
                    <td>{{ $notice->created_at }}</td>
                    <td>{{ $notice->view }}</td>
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

            @forelse($notices as $notice)
                <tr onclick="location.href = '{{ route('notice.show', $notice->id) }}'">
                    <td>{{ $notice->id }}</td>
                    <td>{{ $notice->title }}</td>
                    <td>{{ $notice->author }}</td>
                    <td>{{ $notice->created_at }}</td>
                    <td>{{ $notice->view }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="min-width: 300px;">게시글이 없습니다.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </div>
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
@endsection