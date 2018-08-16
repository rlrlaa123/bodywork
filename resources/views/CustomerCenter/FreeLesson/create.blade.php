@extends('layouts.app_dashboard')
@section('style')
    <style>
        h5 {
            text-align: left;
            width: 80%;
            margin: auto;
        }

        input[type="text"] {
            width: 100%;
            height: 100%;
        }

        textarea {
            width: 100%;
        }

        th {
            text-align: left;
        }

        .btn-wrapper {
            margin-bottom: 25px;
        }

        textarea {
            border: 1px solid #e3e3e3;
        }

        @media(orientation: portrait) {
            h5 {
                width: 90%;
            }

            hr {
                width: 90%;
            }

            td {
                padding: 10px !important;
            }

            input {
                border: 1px solid #e3e3e3;
            }

            .table-responsive {
                width: 90%;
            }

            .btn-wrapper button:nth-child(1) {
                width: 60px;
            }
        }
    </style>
@endsection
@section('content')
    <h3>무료 PT 신청</h3>
    <hr>
    <h5>무료 PT 신청 - 글쓰기</h5>
    <hr>
    <div class="table-responsive">
        <form method="POST" action="{{ route('freelesson.store') }}" enctype="multipart/form-data" id="freelesson">
            {!! csrf_field() !!}
            <table class="table table-bordered">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <tbody>
                <tr>
                    <th scope="row"><label for="name">이름</label></th>
                    <td>
                        <input id="name" name="name" type="text" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <div class="help-block">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </td>
                    <th scope="row"><label for="email">이메일</label></th>
                    <td>
                        <input id="email" name="email" type="text" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="help-block">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="password">비밀번호</label></th>
                    <td>
                        <input id="password" name="password" type="password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <div class="help-block">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </td>
                    <th scope="row"><label for="password_confirmation">비밀번호 확인</label></th>
                    <td>
                        <input id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}">
                        @if ($errors->has('password_confirmation'))
                            <div class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="title">제목</label></th>
                    <td colspan="3">
                        <input id="title" name="title" type="text" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <div class="help-block">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="contents">내용</label></th>
                    <td colspan="3">
                    <textarea id="contents" name="contents" type="text" rows="20">
아래의 양식에 맞게 문의주시면 친절히 답변 도와드리도록 하겠습니다.
감사합니다.

-----레슨문의-----

희망지점 :

이름 :

나이 :

연락처 :

성별 :

운동 목적 :

운동 가능한 시간 :

문의사항 :
                    </textarea>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="btn-wrapper">
        <input class="btn" type="submit" form="freelesson" value="작성완료">
        <a href="{{ route('freelesson.index') }}"><button class="btn">취소</button></a>
    </div>
@endsection
@section('script')
    <script>

    </script>
@endsection