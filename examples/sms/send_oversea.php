<?php
/*
 * 해외 SMS 보내기
 */
require_once("../../lib/message.php");
$messages = array(
    array(
        "country" => "1", // 미국으로 발송
        "to" => "01000010001", // 미국 현지 전화번호
        "from" => "029302266", // 해당 국가에서 별도의 지정된 발신번호로 발송됩니다.
        "text" => "한글 45자, 영자 90자 이하로만 입력해 주세요."
    ),
    array(
        "country" => "81", // 일본으로 발송
        "to" => "01000010002", // 일본 현재 전화번호
        "from" => "029302266", // 해당 국가에서 별도의 지정된 발신번호로 발송됩니다.
        "text" => "한글 45자, 영자 90자 이하로만 입력해 주세요."
    )
);
print_r(send_messages($messages));
