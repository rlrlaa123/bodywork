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
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.alliance.update', $alliance->id) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="description">내용</label></td>
                <td class="td-input">
                    <input id="description" name="description" type="text" value="{{ old('description', $alliance->description) }}">
                    @if ($errors->has('description'))
                        <div class="help-block">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="link">링크</label></td>
                <td class="td-input">
                    <input id="link" name="link" type="text" value="{{ old('link', $alliance->link) }}">
                    @if ($errors->has('link'))
                        <div class="help-block">
                            {{ $errors->first('link') }}
                        </div>
                    @endif
                    <p style="font-weight: bold;">ex) http://www.bodywork119.com</p>
                </td>
            </tr>
            <tr>
                <td><label for="image">이미지</label></td>
                <td class="td-input">
                    <input id="image" name="image" type="file" accept='image/*' value="{{ old('image', $alliance->image) }}">
                    @if ($errors->has('image'))
                        <div class="help-block">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $alliance->image }}">[ {{ substr($alliance->image, 18) }} ]</a>
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