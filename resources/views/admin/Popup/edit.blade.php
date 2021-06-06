@extends('layouts.admin')
@section('style')
    <style>
        .td-input {
            text-align: left;
        }

        #name {
            width: 80%;
        }

        .description {
            width :80%;
        }
    </style>
@endsection
@section('content')
    <h4 style="text-align: left;">※ 팝업 배너 관리 -> 수정</h4>
    <p style="margin: 0; color: red; text-align: left;">* 첨부 이미지는 1MB를 넘지 않도록 해주세요.</p>
    <hr>
    <form method="POST" action="{{ route('admin.popup.update', $popup->id) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <table>
            <tr>
                <td><label for="title">제목</label></td>
                <td class="td-input">
                    <input id="title" name="title" type="text" value="{{ old('title', $popup->title) }}">
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
                    <input id="image" name="image" type="file" accept='image/*' value="{{ old('image', $popup->image) }}">
                    @if ($errors->has('image'))
                        <div class="help-block">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <a class="image-name" href="/{{ $popup->image }}">[ {{ substr($popup->image, 16) }} ]</a>
                </td>
            </tr>
            <tr>
                <td><label for="contents">내용</label></td>
                <td class="td-input">
                    <textarea id="contents" name="contents" type="text" rows="5">{{ old('contents', $popup->contents) }}</textarea>
                    @if ($errors->has('contents'))
                        <div class="help-block">
                            {{ $errors->first('contents') }}
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
    <script>
    </script>
@endsection