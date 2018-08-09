@extends('layouts.app')
@section('style')
    <style>
        h3 {
            width: 80%;
            margin: 50px auto;
        }

        hr {
            width: 80%;
            margin: 50px auto;
        }

        .table-responsive {
            margin: auto;
            width: 80%;
            /*width: 100%;*/
        }

        .pagination {
            width: 80%;
            margin: 50px auto;
            justify-content: center;
        }

        .page-link {
            color: grey;
        }

        .page-link:hover {
            color: unset;
        }

        .btn-wrapper {
            width: 80%;
            text-align: right;
            margin: auto;
        }

        .btn {
            background-color: dimgrey;
            color: white;
        }

        @media(orientation: portrait) {
            .btn {
                width: 50px;
                font-size: 10px;
                height: 30px;
            }
        }
    </style>
@endsection
@section('content')
    <h3>공지사항</h3>
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
                    <td>Doe</td>
                    <td>john@example.com</td>
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