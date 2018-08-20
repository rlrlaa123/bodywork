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
    <h4 style="text-align: left;">※ Before & After 리스트 -> 수정</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.beforeafter.update', $bf->id) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="image">이미지</label></td>
                <td class="td-input">
                    <input id="image" name="image" type="file" accept='image/*' value="{{ old('image') }}">
                    @if ($errors->has('image'))
                        <div class="help-block">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $bf->image }}">[ {{ substr($bf->image, 21) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="link">링크</label></td>
                <td class="td-input">
                    <input id="link" name="link" type="text" value="{{ old('link', $bf->link) }}">
                    @if ($errors->has('link'))
                        <div class="help-block">
                            {{ $errors->first('link') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;"></span>
                </td>
            </tr>
        </table>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button"><a href="{{ route('admin.beforeafter.index') }}">취소</a></button>
        </div>
    </form>
@endsection
@section('script')
@endsection