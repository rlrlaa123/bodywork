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
    <h3>무료 PT 신청</h3>
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

            @forelse($freelessons as $freelesson)
                <tr onclick="location.href = '{{ route('freelesson.lock', $freelesson->id) }}'">
                    <td>{{ $freelesson->id }}</td>
                    <td>
                        {{ $freelesson->title }}
                        <img src="/img/lock.png" width="20px" style="margin-bottom: 5px;">
                        @if($freelesson->reply != null)
                            <span style="color: red;">답변완료!</span>
                        @else
                        @endif
                    </td>
                    <td>{{ $freelesson->name }}</td>
                    <td>{{ $freelesson->created_at }}</td>
                    <td>{{ $freelesson->view }}</td>
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

            @forelse($freelessons as $freelesson)
                <tr onclick="location.href = '{{ route('freelesson.lock', $freelesson->id) }}'">
                    <td>{{ $freelesson->id }}</td>
                    <td>{{ $freelesson->title }}</td>
                    <td>{{ $freelesson->name }}</td>
                    <td>{{ $freelesson->created_at }}</td>
                    <td>{{ $freelesson->view }}</td>
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
        <a href="{{ route('freelesson.create') }}"><button class="btn">글쓰기</button></a>
    </div>
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
@endsection