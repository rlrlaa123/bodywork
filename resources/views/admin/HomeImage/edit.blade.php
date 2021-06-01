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

        span {
            display: block;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <h4 style="text-align: left;">※ 홈 화면 관리 -> 수정</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="/admin/update/{{ $home->id }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="video">메인 영상</label></td>
                <td class="td-input">
                    <input id="video" name="video" type="file" accept='video/*'
                           value="">
                    @if ($errors->has('video'))
                        <div class="help-block">
                        </div>
                    @endif
                    <a class="image-name" href=""></a>
                </td>
            </tr>
            <tr>
                <td><label for="home1">배너 사진 1</label></td>
                <td class="td-input">
                    <input id="home1" name="home1" type="file" accept='image/*'
                           value="{{ old('home1', $home->home1) }}">
                    @if ($errors->has('home1'))
                        <div class="help-block">
                            {{ $errors->first('home1') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->home1 }}">[ {{ substr($home->home1, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="link1">연결된 링크 1</label></td>
                <td class="td-input">
                    <input id="link1" name="link1" type="text" value="{{ old('link1', $home->link1) }}">
                    @if ($errors->has('link1'))
                        <div class="help-block">
                            {{ $errors->first('link1') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/1</span>
                </td>
            </tr>
            <tr>
                <td><label for="home2">배너 사진 2</label></td>
                <td class="td-input">
                    <input id="home2" name="home2" type="file" accept='image/*'
                           value="{{ old('home2', $home->home2) }}">
                    @if ($errors->has('home2'))
                        <div class="help-block">
                            {{ $errors->first('home2') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->home2 }}">[ {{ substr($home->home2, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="link2">연결된 링크 1</label></td>
                <td class="td-input">
                    <input id="link2" name="link2" type="text" value="{{ old('link2', $home->link2) }}">
                    @if ($errors->has('link2'))
                        <div class="help-block">
                            {{ $errors->first('link2') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/2</span>
                </td>
            </tr>
            <tr>
                <td><label for="home3">배너 사진 3</label></td>
                <td class="td-input">
                    <input id="home3" name="home3" type="file" accept='image/*'
                           value="{{ old('home3', $home->home3) }}">
                    @if ($errors->has('home3'))
                        <div class="help-block">
                            {{ $errors->first('home3') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->home3 }}">[ {{ substr($home->home3, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="link3">연결된 링크 3</label></td>
                <td class="td-input">
                    <input id="link3" name="link3" type="text" value="{{ old('link3', $home->link3) }}">
                    @if ($errors->has('link3'))
                        <div class="help-block">
                            {{ $errors->first('link3') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/3</span>
                </td>
            </tr>
        </table>
        <p style="text-align: left; font-weight: lighter; color: red;">* 배너 사진 규격은 1440 x 800 을 지켜주세요.</p>
        <hr style="visibility: hidden;">
        <table>
            <tr>
                <td><label for="bf1">Before & After 사진 1</label></td>
                <td class="td-input">
                    <input id="bf1" name="bf1" type="file" accept='image/*'
                           value="{{ old('bf1', $home->bf1) }}">
                    @if ($errors->has('bf1'))
                        <div class="help-block">
                            {{ $errors->first('bf1') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf1 }}">[ {{ substr($home->bf1, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf1_link">연결된 링크 1</label></td>
                <td class="td-input">
                    <input id="bf1_link" name="bf1_link" type="text" value="{{ old('bf1_link', $home->bf1_link) }}">
                    @if ($errors->has('bf1_link'))
                        <div class="help-block">
                            {{ $errors->first('bf1_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf2">Before & After 사진 2</label></td>
                <td class="td-input">
                    <input id="bf2" name="bf2" type="file" accept='image/*'
                           value="{{ old('bf2', $home->bf2) }}">
                    @if ($errors->has('bf2'))
                        <div class="help-block">
                            {{ $errors->first('bf2') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf2 }}">[ {{ substr($home->bf2, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf2_link">연결된 링크 2</label></td>
                <td class="td-input">
                    <input id="bf2_link" name="bf2_link" type="text" value="{{ old('bf2_link', $home->bf2_link) }}">
                    @if ($errors->has('bf2_link'))
                        <div class="help-block">
                            {{ $errors->first('bf2_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf3">Before & After 사진 3</label></td>
                <td class="td-input">
                    <input id="bf3" name="bf3" type="file" accept='image/*'
                           value="{{ old('bf3', $home->bf3) }}">
                    @if ($errors->has('bf3'))
                        <div class="help-block">
                            {{ $errors->first('bf3') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf3 }}">[ {{ substr($home->bf3, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf3_link">연결된 링크 3</label></td>
                <td class="td-input">
                    <input id="bf3_link" name="bf3_link" type="text" value="{{ old('bf3_link', $home->bf3_link) }}">
                    @if ($errors->has('bf3_link'))
                        <div class="help-block">
                            {{ $errors->first('bf3_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf3">Before & After 사진 4</label></td>
                <td class="td-input">
                    <input id="bf4" name="bf4" type="file" accept='image/*'
                           value="{{ old('bf4', $home->bf4) }}">
                    @if ($errors->has('bf4'))
                        <div class="help-block">
                            {{ $errors->first('bf4') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf4 }}">[ {{ substr($home->bf4, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf4_link">연결된 링크 4</label></td>
                <td class="td-input">
                    <input id="bf4_link" name="bf4_link" type="text" value="{{ old('bf4_link', $home->bf4_link) }}">
                    @if ($errors->has('bf4_link'))
                        <div class="help-block">
                            {{ $errors->first('bf4_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf5">Before & After 사진 5</label></td>
                <td class="td-input">
                    <input id="bf5" name="bf5" type="file" accept='image/*'
                           value="{{ old('bf5', $home->bf5) }}">
                    @if ($errors->has('bf5'))
                        <div class="help-block">
                            {{ $errors->first('bf5') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf5 }}">[ {{ substr($home->bf5, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf5_link">연결된 링크 5</label></td>
                <td class="td-input">
                    <input id="bf5_link" name="bf5_link" type="text" value="{{ old('bf5_link', $home->bf5_link) }}">
                    @if ($errors->has('bf5_link'))
                        <div class="help-block">
                            {{ $errors->first('bf5_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf6">Before & After 사진 6</label></td>
                <td class="td-input">
                    <input id="bf6" name="bf6" type="file" accept='image/*'
                           value="{{ old('bf6', $home->bf6) }}">
                    @if ($errors->has('bf6'))
                        <div class="help-block">
                            {{ $errors->first('bf6') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf6 }}">[ {{ substr($home->bf6, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf6_link">연결된 링크 6</label></td>
                <td class="td-input">
                    <input id="bf6_link" name="bf6_link" type="text" value="{{ old('bf6_link', $home->bf6_link) }}">
                    @if ($errors->has('bf6_link'))
                        <div class="help-block">
                            {{ $errors->first('bf6_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf7">Before & After 사진 7</label></td>
                <td class="td-input">
                    <input id="bf7" name="bf7" type="file" accept='image/*'
                           value="{{ old('bf7', $home->bf7) }}">
                    @if ($errors->has('bf7'))
                        <div class="help-block">
                            {{ $errors->first('bf7') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf7 }}">[ {{ substr($home->bf7, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf7_link">연결된 링크 7</label></td>
                <td class="td-input">
                    <input id="bf7_link" name="bf7_link" type="text" value="{{ old('bf7_link', $home->bf7_link) }}">
                    @if ($errors->has('bf7_link'))
                        <div class="help-block">
                            {{ $errors->first('bf7_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf8">Before & After 사진 8</label></td>
                <td class="td-input">
                    <input id="bf8" name="bf8" type="file" accept='image/*'
                           value="{{ old('bf8', $home->bf8) }}">
                    @if ($errors->has('bf8'))
                        <div class="help-block">
                            {{ $errors->first('bf8') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf8 }}">[ {{ substr($home->bf8, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf8_link">연결된 링크 8</label></td>
                <td class="td-input">
                    <input id="bf8_link" name="bf8_link" type="text" value="{{ old('bf8_link', $home->bf8_link) }}">
                    @if ($errors->has('bf8_link'))
                        <div class="help-block">
                            {{ $errors->first('bf8_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
            <tr>
                <td><label for="bf9">Before & After 사진 9</label></td>
                <td class="td-input">
                    <input id="bf9" name="bf9" type="file" accept='image/*'
                           value="{{ old('bf9', $home->bf9) }}">
                    @if ($errors->has('bf9'))
                        <div class="help-block">
                            {{ $errors->first('bf9') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->bf9 }}">[ {{ substr($home->bf9, 13) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="bf9_link">연결된 링크 9</label></td>
                <td class="td-input">
                    <input id="bf9_link" name="bf9_link" type="text" value="{{ old('bf9_link', $home->bf9_link) }}">
                    @if ($errors->has('bf9_link'))
                        <div class="help-block">
                            {{ $errors->first('bf9_link') }}
                        </div>
                    @endif
                    <span>ex) https://blog.naver.com/crossfita2f/221040984247</span>
                </td>
            </tr>
        </table>
        <p style="text-align: left; font-weight: lighter; color: red;">* Before & After 사진 규격은 1000 x 700 을 지켜주세요.</p>
        <hr style="visibility: hidden;">
        <table>
            <tr>
                <td><label for="menu1">메뉴 사진 1</label></td>
                <td class="td-input">
                    <input id="menu1" name="menu1" type="file" accept='image/*'
                           value="{{ old('menu1', $home->menu1) }}">
                    @if ($errors->has('menu1'))
                        <div class="help-block">
                            {{ $errors->first('menu1') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->menu1 }}">[ {{ substr($home->menu1, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="menu1_link">연결된 링크 1</label></td>
                <td class="td-input">
                    <input id="menu1_link" name="menu1_link" type="text" value="{{ old('menu1_link', $home->menu1_link) }}">
                    @if ($errors->has('link1'))
                        <div class="help-block">
                            {{ $errors->first('link1') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/1</span>
                </td>
            </tr>
            <tr>
                <td><label for="menu2">메뉴 사진 2</label></td>
                <td class="td-input">
                    <input id="menu2" name="menu2" type="file" accept='image/*'
                           value="{{ old('menu2', $home->menu2) }}">
                    @if ($errors->has('menu2'))
                        <div class="help-block">
                            {{ $errors->first('menu2') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->menu2 }}">[ {{ substr($home->menu2, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="menu2_link">연결된 링크 2</label></td>
                <td class="td-input">
                    <input id="menu2_link" name="menu2_link" type="text" value="{{ old('menu2_link', $home->menu2_link) }}">
                    @if ($errors->has('menu2_link'))
                        <div class="help-block">
                            {{ $errors->first('menu2_link') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/2</span>
                </td>
            </tr>
            <tr>
                <td><label for="menu3">메뉴 사진 3</label></td>
                <td class="td-input">
                    <input id="menu3" name="menu3" type="file" accept='image/*'
                           value="{{ old('menu3', $home->menu3) }}">
                    @if ($errors->has('menu3'))
                        <div class="help-block">
                            {{ $errors->first('menu3') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->menu3 }}">[ {{ substr($home->menu3, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="menu3_link">연결된 링크 3</label></td>
                <td class="td-input">
                    <input id="menu3_link" name="menu3_link" type="text" value="{{ old('menu3_link', $home->menu3_link) }}">
                    @if ($errors->has('menu3_link'))
                        <div class="help-block">
                            {{ $errors->first('menu3_link') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/3</span>
                </td>
            </tr>
            <tr>
                <td><label for="menu3">메뉴 사진 4</label></td>
                <td class="td-input">
                    <input id="menu4" name="menu4" type="file" accept='image/*'
                           value="{{ old('menu4', $home->menu4) }}">
                    @if ($errors->has('menu4'))
                        <div class="help-block">
                            {{ $errors->first('menu4') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $home->menu4 }}">[ {{ substr($home->menu4, 4) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="menu4_link">연결된 링크 4</label></td>
                <td class="td-input">
                    <input id="menu4_link" name="menu4_link" type="text" value="{{ old('menu4_link', $home->menu4_link) }}">
                    @if ($errors->has('menu4_link'))
                        <div class="help-block">
                            {{ $errors->first('menu4_link') }}
                        </div>
                    @endif
                    <span>ex) /bodywork/4</span>
                </td>
            </tr>
        </table>
        <p style="text-align: left; font-weight: lighter; color: red;">* 메뉴 사진 규격은 1440 x 800 을 지켜주세요.</p>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button"><a href="/admin">취소</a></button>
        </div>
    </form>
@endsection
@section('script')
@endsection