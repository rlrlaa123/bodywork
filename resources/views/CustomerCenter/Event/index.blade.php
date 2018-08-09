@extends('layouts.app_dashboard')
@section('style')
    <style>

    </style>
@endsection
@section('content')
    <h3>이벤트</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>조회수</th>
            </tr>
            </thead>
            <tbody>

            @for($i = 1; $i <= 3; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>바디웍 3호점 오픈!</td>
                    <td>관리</td>
                    <td>{{ $i }}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
    <div class="btn-wrapper">
        <button class="btn">
            글쓰기
        </button>
    </div>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">이전</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">다음</a></li>
    </ul>
@endsection
@section('script')
@endsection