<?php

/**
 * The file downloaded from
 * https://github.com/caouecs/Laravel-lang/blob/master/ko/validation.php
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted' => ':attribute을(를) 동의해야 합니다.',
    'active_url' => ':attribute은(는) 유효한 URL이 아닙니다.',
    'after' => ':attribute은(는) :date 이후 날짜여야 합니다.',
    'alpha' => ':attribute은(는) 문자만 포함할 수 있습니다.',
    'alpha_dash' =>
        ':attribute은(는) 문자, 숫자, 대쉬(-)만 포함할 수 있습니다.',
    'alpha_num' => ':attribute은(는) 문자와 숫자만 포함할 수 있습니다.',
    'array' => ':attribute은(는) 배열이어야 합니다.',
    'before' => ':attribute은(는) :date 이전 날짜여야 합니다.',
    'between' => [
        'numeric' => ':attribute은(는) :min에서 :max 사이여야 합니다.',
        'file' => ':attribute은(는) :min에서 :max 킬로바이트 사이여야 합니다.',
        'string' => ':attribute은(는) :min에서 :max 문자 사이여야 합니다.',
        'array' => ':attribute은(는) :min에서 :max 아이템 사이여야 합니다.',
    ],
    'boolean' => ':attribute은(는) true 또는 false 이어야 합니다.',
    'confirmed' => ':attribute 확인 항목이 일치하지 않습니다.',
    'date' => ':attribute은(는) 유효한 날짜가 아닙니다.',
    'date_format' => ':attribute은(는) :format 형식과 일치하지 않습니다.',
    'different' => ':attribute와(과) :other은(는) 서로 달라야 합니다.',
    'digits' => ':attribute은(는) :digits 자릿수여야 합니다.',
    'digits_between' =>
        ':attribute은(는) :min에서 :max 자릿수 사이여야 합니다.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute 형식은 유효하지 않습니다.',
    'exists' => '선택된 :attribute은(는) 유효하지 않습니다.',
    'filled' => ':attribute 필드는 필수입니다.',
    'image' => ':attribute은(는) 이미지여야 합니다.',
    'in' => '선택된 :attribute은(는) 유효하지 않습니다.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute은(는) 정수여야 합니다.',
    'ip' => ':attribute은(는) 유효한 IP 주소여야 합니다.',
    'json' => 'The :attribute must be a valid JSON string.',
    'max' => [
        'numeric' => ':attribute은(는) :max 보다 작아야 합니다.',
        'file' => ':attribute은(는) :max 킬로바이트보다 작아야 합니다.',
        'string' => ':attribute은(는) :max 자리보다 작아야 합니다.',
        'array' => ':attribute은(는) :max 아이템보다 작아야 합니다.',
    ],
    'mimes' => ':attribute은(는) 다음의 파일 형식이어야 합니다: :values.',
    'min' => [
        'numeric' => ':attribute은(는) :min 보다 커야 합니다.',
        'file' => ':attribute은(는) :min 킬로바이트보다 커야 합니다.',
        'string' => ':attribute은(는) :min 자리보다 커야 합니다.',
        'array' => ':attribute은(는) :max 아이템보다 커야 합니다.',
    ],
    'not_in' => '선택된 :attribute은(는) 유효하지 않습니다.',
    'numeric' => ':attribute은(는) 숫자여야 합니다.',
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute 형식은 유효하지 않습니다.',
    'required' => ':attribute 필드는 필수입니다.',
    'required_if' => ':other이(가) :value 일때 :attribute 필드는 필수입니다.',
    'required_unless' =>
        'The :attribute field is required unless :other is in :values.',
    'required_with' => ':values이(가) 있는 경우 :attribute 필드는 필수입니다.',
    'required_with_all' =>
        ':values이(가) 모두 있는 경우 :attribute 필드는 필수입니다.',
    'required_without' =>
        ':values이(가) 없는 경우 :attribute 필드는 필수입니다.',
    'required_without_all' =>
        ':values이(가) 모두 없는 경우 :attribute 필드는 필수입니다.',
    'same' => ':attribute와(과) :other은(는) 일치해야 합니다.',
    'size' => [
        'numeric' => ':attribute은(는) :size (이)여야 합니다.',
        'file' => ':attribute은(는) :size 킬로바이트여야 합니다.',
        'string' => ':attribute은(는) :size 자릿수여야 합니다.',
        'array' => ':attribute은(는) :max 개의 아이템을 포함해야 합니다.',
    ],
    'string' => 'The :attribute must be a string.',
    'timezone' => ':attribute은(는) 올바른 시간대 이어야 합니다.',
    'unique' => ':attribute은(는) 이미 사용중 입니다.',
    'url' => ':attribute 형식은 유효하지 않습니다.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'self_authentication' => [
            'accepted' => '본인인증은 필수입니다.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        'title' => '제목',
        'email' => '이메일',
        'password' => '비밀번호',
        'contents' => '내용',
        'name' => '이름',
        'image' => '이미지',
        'password_new' => '새 비밀번호',
        'password_new_confirmation' => '새 비밀번호 확인',
        'top' => 'x 좌표',
        'left' => 'y 좌표',
        'width' => '너비',
        'height' => '높이',
    ],
];
