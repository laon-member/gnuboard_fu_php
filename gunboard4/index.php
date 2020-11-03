<?php

include_once('./_common.php');


define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if(defined('G5_THEME_PATH')) {
//     require_once(G5_THEME_PATH.'/index.php');
//     return;
// }

// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/index.php');
//     return;
// }

include_once(G5_PATH.'/head.php');
?>
<h1 style="width: 70%;margin: 0 auto;padding: 20px 0;"> 내 정보 입력</h1>
<div class="info">
    <form action="index_back.php" method="POST" class="user_info" style="width:70%;margin:0 auto;">
        <label for="name" class="user_label" style="margin-top:20px;" >이름</label>
        <input type="text" name="name" placeholder="이름" class="user_input" style="width:100%; display:block;height:30px;margin: 10px 0;">
        <label for="email" class="user_label" >이메일</label>
        <input type="text" name="email" placeholder="이메일" class="user_input" style="width:100%; display:block;height:30px;margin: 10px 0;">
        <label for="phone" class="user_label" >전화번호</label>
        <input type="text" name="phone" placeholder="전화번호" class="user_input" style="width:100%; display:block;height:30px;margin: 10px 0;">
        <label for="address" class="user_label" >주소</label>
        <input type="text" name="address" placeholder="주소" class="user_input" style="width:100%; display:block;height:30px;margin: 10px 0;">
        <label for="etc" class="user_label" >기타사항</label>
        <input type="text" name="etc" placeholder="기타 사항" class="user_input" style="width:100%; display:block;height:30px;margin: 10px 0;">
        <button type="submit" class="user_sub" style="width:100%;height:40px;">전송</button>
    </form>
</div>
<?php

include_once(G5_PATH.'/tail.php');
?>