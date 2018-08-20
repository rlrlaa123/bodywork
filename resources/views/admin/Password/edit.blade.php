@extends('layouts.admin')
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <header>
        <h4 style="display: inline-block;">※ 비밀번호 변경</h4>
    </header>
    <hr>
    <form method="POST" action="{{ url('/admin/password') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="password">현재 비밀번호</label></td>
                <td class="td-input">
                    <input id="password" name="password" type="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <div class="help-block">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="password_new">새로운 비밀번호</label></td>
                <td class="td-input">
                    <input id="password_new" name="password_new" type="password" value="{{ old('password_new') }}">
                    @if ($errors->has('password_new'))
                        <div class="help-block">
                            {{ $errors->first('password_new') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="password_new_confirmation">새로운 비밀번호 확인</label></td>
                <td class="td-input">
                    <input id="password_new_confirmation" name="password_new_confirmation" type="password" value="{{ old('password_new_confirmation') }}">
                    @if ($errors->has('password_new_confirmation'))
                        <div class="help-block">
                            {{ $errors->first('password_new_confirmation') }}
                        </div>
                    @endif
                </td>
            </tr>
        </table>

        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button" onclick="location.href = '/admin/notice'">취소</button>
        </div>
    </form>
@endsection
@section('script')
@endsection