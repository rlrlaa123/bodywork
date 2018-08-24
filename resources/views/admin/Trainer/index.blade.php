@extends('layouts.admin')
@section('style')
    <style>
        select {
            margin: 10px 0;
            /*background-color: white;*/
            /*border: 1px solid #e3e3e3;*/
            /*display: block;*/
        }
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 트레이너 소개</h4>
    </header>
    <hr>
    <table class="table">
        <col width="10%">
        <col width="10%">
        <col width="15%">
        <col width="15%">
        <col width="40%">
        <col width="10%">
        <thead>
        <tr>
            <th>순서</th>
            <th>호점</th>
            <th>사진</th>
            <th>이름</th>
            <th>자격사항</th>
            <th>삭제</th>
        </tr>
        </thead>
        <tbody>
        @forelse($trainers as $trainer)
            <tr>
                <td>
                    <form method="POST" action="{{ route('admin.trainer.index', $trainer->id) }}">
                        {!! csrf_field() !!}
                        <select id="index" name="index">
                            @for($i=1; $i <= count(\App\Trainer::where('branch_id', $trainer->branch_id)->get()); $i++)
                                <option @if($trainer->index == $i) selected @endif value="{{ $i }}">{{ $i }}번째</option>
                            @endfor
                        </select>
                        <hr style="visibility: hidden; margin: 0;">
                        <button type="submit" style="font-size: 11px;"><label for="index" style="margin: 0">변경</label></button>
                    </form>
                </td>
                <td>{{ $trainer->branch->number }}호점</td>
                <td><img src="/{{ $trainer->image }}" width="100px"></td>
                <td>
                    {{ $trainer->name }}
                </td>
                <td>
                    <a class="name-selector"
                       href="{{ route('admin.trainer.edit', [$trainer->id]) }}">
                        {!! nl2br($trainer->description) !!}
                    </a>
                </td>
                <td><a class="delete" onclick="deleteConversation({{ $trainer->id }})">삭제</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">등록된 데이터가 없습니다.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $trainers->previousPageUrl() }}">이전</a></li>
        @if($trainers->total()/6 < 1)
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        @else
            @if($trainers->total() % 6 == 0)
                @for($i = 1; $i <= $trainers->total()/6; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @else
                @for($i = 1; $i <= $trainers->total()/6 + 1; $i++)
                    <li class="page-item"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                @endfor
            @endif
        @endif
        <li class="page-item"><a class="page-link" href="{{ $trainers->nextPageUrl() }}">다음</a></li>
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
                    url: 'trainer/' + id
                }).then(function (res) {
                    window.location.href = '/admin/trainer'
                })
            }
        }
    </script>
@endsection
