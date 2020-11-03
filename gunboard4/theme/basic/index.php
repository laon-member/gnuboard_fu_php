<?php

include_once('./_common.php');


define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<h1>내 정보 입력</h1>
<div class="info">
    <form action="#" class="user_info">
        <label for="name" >이름</label>
        <input type="text" name="name" placeholder="이름" class="user_input">
        <label for="email" >이메일</label>
        <input type="text" name="email" placeholder="이메일" class="user_input">
        <label for="phone" >전화번호</label>
        <input type="text" name="phone" placeholder="전화번호" class="user_input">
        <label for="address" >주소</label>
        <input type="text" name="address" placeholder="주소" class="user_input">
        <label for="etc" >기타사항</label>
        <input type="text" name="etc" placeholder="기타 사항" class="user_input">
        <button type="submit">전송fdsa</button>
    </form>
</div>
<?php
include_once(G5_PATH.'/tail.php');
?>