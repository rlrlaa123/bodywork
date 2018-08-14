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
    </style>
@endsection
@section('content')
    <h4 style="text-align: left;">※ 제휴업체 리스트 -> 등록</h4>
    <hr>
    <form method="POST" action="{{ route('admin.alliance.store') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <table>
            <tr>
                <td><label for="description">내용</label></td>
                <td class="td-input">
                    <input id="description" name="description" type="text" value="{{ old('description') }}">
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
                    <input id="image" name="image" type="file" accept='image/*' value="{{ old('image') }}">
                    @if ($errors->has('image'))
                        <div class="help-block">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </td>
            </tr>
        </table>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button"><a href="{{ route('admin.alliance.index') }}">취소</a></button>
        </div>
    </form>
@endsection
@section('script')
@endsection