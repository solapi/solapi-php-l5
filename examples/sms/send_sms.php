<?php
/*
 * SMS 문자메시지 보내기
 */
require_once("../../lib/message.php");
$messages = array(
    array(
        "to" => "01000010001",
        "from" => "029302266",
        "text" => "한글 45자, 영자 90자 이하 입력되면 자동으로 SMS타입의 메시지가 추가됩니다."
    ),
    array(
        "to" => "01000010002",
        "from" => "029302266",
        "text" => "한글 45자, 영자 90자 이상 입력되면 자동으로 LMS타입의 문자메시자가 발송됩니다. 0123456789 ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    ),
    // 타입을 명시할 경우 text 길이가 한글 45 혹은 영자 90자를 넘을 경우 오류가 발생합니다.
    array(
        "type" => "SMS", // 타입명시
        "to" => "01000010003",
        "from" => "029302266",
        "text" => "SMS 타입에 한글 45자, 영자 90자 이상 입력되면 오류가 발생합니다. 0123456789 ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    ),
);
print_r(send_messages($messages));

// 중복 수신번호를 허용하실 경우 아래와 같이 실행하시면 됩니다.
// print_r(send_messages($messages, true));

// 앱아이디 입력 예시
// print_r(send_messages($messages, false, false, "앱아이디"));

