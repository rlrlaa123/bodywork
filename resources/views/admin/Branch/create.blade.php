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
    <h4 style="text-align: left;">※ 지점소개 리스트 -> 등록</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.branch.store') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <table>
            <tr>
                <td><label for="number">호점</label></td>
                <td class="td-input">
                    <input id="number" name="number" type="number" value="{{ old('number') }}">
                    @if ($errors->has('number'))
                        <div class="help-block">
                            {{ $errors->first('number') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">* 숫자를 입력하세요</span>
                </td>
            </tr>
            <tr>
                <td><label for="name">지점 이름</label></td>
                <td class="td-input">
                    <input id="name" name="name" type="text" rows="4">{{ old('name') }}</textarea>
                    @if ($errors->has('name'))
                        <div class="help-block">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="description">소개</label></td>
                <td class="td-input">
                    <textarea id="description" name="description" type="text" rows="4">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="help-block">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;"></span>
                </td>
            </tr>
            <tr>
                <td><label for="time1">운영시간 1</label></td>
                <td class="td-input">
                    <input id="time1" name="time1" type="text" value="{{ old('time1') }}">
                    @if ($errors->has('time1'))
                        <div class="help-block">
                            {{ $errors->first('time1') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">ex) 월~금 AM 07:00 ~ PM 11:00</span>
                </td>
            </tr>
            <tr>
                <td><label for="time2">운영시간 2</label></td>
                <td class="td-input">
                    <input id="time2" name="time2" type="text" value="{{ old('time2') }}">
                    @if ($errors->has('time2'))
                        <div class="help-block">
                            {{ $errors->first('time2') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">ex) 토요일 AM 10:00 ~ PM 5:00</span>
                </td>
            </tr>
            <tr>
                <td><label for="time3">운영시간 3</label></td>
                <td class="td-input">
                    <input id="time3" name="time3" type="text" value="{{ old('time3') }}">
                    @if ($errors->has('time3'))
                        <div class="help-block">
                            {{ $errors->first('time3') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">ex) 국경일/일요일 휴관</span>
                </td>
            </tr>
            <tr>
                <td><label for="note">Note</label></td>
                <td class="td-input">
                    <input id="note" name="note" type="text" value="{{ old('note') }}">
                    @if ($errors->has('note'))
                        <div class="help-block">
                            {{ $errors->first('note') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">ex) 국경일은 쉽니다.</span>
                </td>
            </tr>
            <tr>
                <td><label for="phone">전화번호</label></td>
                <td class="td-input">
                    <input id="phone" name="phone" type="text" value="{{ old('phone') }}">
                    @if ($errors->has('phone'))
                        <div class="help-block">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">'-' 포함해서 다음과 같이 입력해주세요.<br> 02-408-3966</span>
                </td>
            </tr>
            <tr>
                <td><label for="kakao">카카오 채널</label></td>
                <td class="td-input">
                    <input id="kakao" name="kakao" type="text" value="{{ old('kakao') }}">
                    @if ($errors->has('kakao'))
                        <div class="help-block">
                            {{ $errors->first('kakao') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">다음과 같이 입력해주세요.<br> http://pf.kakao.com/_VZdxoC</span>
                </td>
            </tr>
            <tr>
                <td><label for="location">주소</label></td>
                <td class="td-input">
                    <input id="location" name="location" type="text" value="{{ old('location') }}">
                    @if ($errors->has('location'))
                        <div class="help-block">
                            {{ $errors->first('location') }}
                        </div>
                    @endif
                    <span style="font-weight: bold;">ex) 송파구 위례성대로 20길 23<br>* 도로명 주소나 지번 주소만 가능 (건물명 불가)</span>
                </td>
            </tr>
            <tr>
                <td><label for="image1">이미지 1</label></td>
                <td class="td-input">
                    <input id="image1" name="image1" type="file" accept='image/*' value="{{ old('image1') }}">
                    @if ($errors->has('image1'))
                        <div class="help-block">
                            {{ $errors->first('image1') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image2">이미지 2</label></td>
                <td class="td-input">
                    <input id="image2" name="image2" type="file" accept='image/*' value="{{ old('image2') }}">
                    @if ($errors->has('image2'))
                        <div class="help-block">
                            {{ $errors->first('image2') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image3">이미지 3</label></td>
                <td class="td-input">
                    <input id="image3" name="image3" type="file" accept='image/*' value="{{ old('image3') }}">
                    @if ($errors->has('image3'))
                        <div class="help-block">
                            {{ $errors->first('image3') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image4">이미지 4</label></td>
                <td class="td-input">
                    <input id="image4" name="image4" type="file" accept='image4/*' value="{{ old('image4') }}">
                    @if ($errors->has('image4'))
                        <div class="help-block">
                            {{ $errors->first('image4') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image5">이미지 5</label></td>
                <td class="td-input">
                    <input id="image5" name="image5" type="file" accept='image/*' value="{{ old('image5') }}">
                    @if ($errors->has('image5'))
                        <div class="help-block">
                            {{ $errors->first('image5') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image6">이미지 6</label></td>
                <td class="td-input">
                    <input id="image6" name="image6" type="file" accept='image/*' value="{{ old('image6') }}">
                    @if ($errors->has('image6'))
                        <div class="help-block">
                            {{ $errors->first('image6') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image7">이미지 7</label></td>
                <td class="td-input">
                    <input id="image7" name="image7" type="file" accept='image/*' value="{{ old('image7') }}">
                    @if ($errors->has('image7'))
                        <div class="help-block">
                            {{ $errors->first('image7') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="image8">이미지 8</label></td>
                <td class="td-input">
                    <input id="image8" name="image8" type="file" accept='image/*' value="{{ old('image8') }}">
                    @if ($errors->has('image8'))
                        <div class="help-block">
                            {{ $errors->first('image8') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <td><label for="kakao_image">카카오 채널 이미지</label></td>
                <td class="td-input">
                    <input id="kakao_image" name="kakao_image" type="file" accept='image/*' value="{{ old('kakao_image') }}">
                    @if ($errors->has('kakao_image'))
                        <div class="help-block">
                            {{ $errors->first('kakao_image') }}
                        </div>
                    @endif
                </td>
            </tr>
        </table>
        <hr style="visibility: hidden;">
        <div class="button-wrapper">
            <button type="submit">확인</button>
            <button type="button"><a href="{{ route('admin.branch.index') }}">취소</a></button>
        </div>
    </form>
@endsection
@section('script')
@endsection