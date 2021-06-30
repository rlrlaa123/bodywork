@extends('layouts.admin')
@section('style')
    <style>

    </style>
@endsection
@section('content')
    <h4 style="text-align: left;">※ 팝업 배너 관리 -> 등록</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <p style="margin: 0; color: red; text-align: left;">* 너비 높이 길이는 본 이미지의 비율과 동일하게 지정해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.popup.store') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <table>
            <tr>
                <td><label for="title">제목</label></td>
                <td class="td-input">
                    <input id="title" name="title" type="text" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <div class="help-block">
                            {{ $errors->first('title') }}
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
            <tr>
                <td><label for="top">x 좌표</label></td>
                <td class="td-input">
                    <input id="top" name="top" type="int" value="{{ old('top') }}">
                    @if ($errors->has('top'))
                        <div class="help-block">
                            {{ $errors->first('top') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="left">y 좌표</label></td>
                <td class="td-input">
                    <input id="left" name="left" type="int" value="{{ old('left') }}">
                    @if ($errors->has('left'))
                        <div class="help-block">
                            {{ $errors->first('left') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="width">너비</label></td>
                <td class="td-input">
                    <input id="width" name="width" type="int" value="{{ old('width') }}">
                    @if ($errors->has('left'))
                        <div class="help-block">
                            {{ $errors->first('width') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="height">높이</label></td>
                <td class="td-input">
                    <input id="height" name="height" type="int" value="{{ old('height') }}">
                    @if ($errors->has('height'))
                        <div class="help-block">
                            {{ $errors->first('height') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="link">링크</label></td>
                <td class="td-input">
                    <input id="link" name="link" type="text" value="{{ old('link') }}">
                    @if ($errors->has('link'))
                        <div class="help-block">
                            {{ $errors->first('link') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="checked">표시</label></td>
                <td class="td-input">
                    <input id="checked" name="checked" type="checkbox" value="checked" checked>
                    @if ($errors->has('checked'))
                        <div class="help-block">
                            {{ $errors->first('checked') }}
                        </div>
                    @endif
                </td>
            </tr>
        </table>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button" onclick="location.href = '/admin/popup'">취소</button>
        </div>
    </form>
@endsection
@section('script')
@endsection