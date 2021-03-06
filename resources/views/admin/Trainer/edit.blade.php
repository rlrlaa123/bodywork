@extends('layouts.admin')
@section('style')
    <style>
        #number {
            width: 80%;
            background-color: #f7f7f7;
        }
        span {
            display: block;
        }

        a:hover {
            color: inherit;
            text-decoration: none;
        }

        select {
            background-color: white;
        }
    </style>
@endsection
@section('content')
    <h4 style="text-align: left;">※ 지점소개 리스트 -> 수정</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.trainer.update', $trainer->id) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="branch">이름</label></td>
                <td class="td-input">
                    <select id="branch" name="branch" type="text">
                        @forelse($branches as $branch)
                            <option value="{{ $branch->number }}" @if($trainer->branch_id == $branch->id) selected @endif>{{ $branch->number }}호점</option>
                        @empty
                            <option>없음</option>
                        @endforelse
                    </select>
                    @if ($errors->has('branch'))
                        <div class="help-block">
                            {{ $errors->first('branch') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="name">이름</label></td>
                <td class="td-input">
                    <input id="name" name="name" type="text" value="{{ old('name', $trainer->name) }}">
                    @if ($errors->has('name'))
                        <div class="help-block">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="description">자격사항</label></td>
                <td class="td-input">
                    <textarea id="description" name="description" type="text" rows="4">{{ old('description', $trainer->description) }}</textarea>
                    @if ($errors->has('description'))
                        <div class="help-block">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image">이미지</label></td>
                <td class="td-input">
                    <input id="image" name="image" type="file" accept='image/*' value="{{ old('image', $trainer->image) }}">
                    @if ($errors->has('image'))
                        <div class="help-block">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $trainer->image }}">[ {{ substr($trainer->image, 17) }} ]</a>
                </td>
            </tr>
        </table>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button"><a href="/admin/trainer">취소</a></button>
        </div>
    </form>
@endsection
@section('script')
@endsection