@extends('layouts.app_dashboard')
@section('style')
    <style>
        h4 {
            margin: 20px 0;
        }
    </style>
@endsection
@section('content')
    <form method="POST" action="{{ route('freelesson.lock.open', $freelesson->id) }}" enctype="multipart/form-data" id="freelesson">
        {!! csrf_field() !!}
        <div class="password-wrapper">
            <h4>무료 PT 신청 글</h4>
            <div class="password-container">
                <div>
                    <p style="font-weight: bold;">비밀글 기능으로 보호된 글입니다.</p>
                    <p>작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.</p>
                </div>
                <div>
                    <span><label for="password">비밀번호</label></span>
                    <input id="password" name="password" type="password">
                    <button class="btn">확인</button>
                    @if ($errors->has('password'))
                        <div class="help-block">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div></div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script></script>
@endsection