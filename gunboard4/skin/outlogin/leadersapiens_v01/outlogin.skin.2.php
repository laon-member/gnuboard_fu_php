<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="style.css">', 0);
?>
<style>
@charset "utf-8";

/* 아웃로그인 스킨 */
a{text-decoration:none}
ul, ol, li{list-style:none;}
.ol {position:relative;border:1px solid #dde7e9;margin-bottom:15px;border-radius:3px}
.ol h2 {width:117px;float:left;padding:15px 0;text-align:center}
.ol .join {width:116px;float:left;padding:15px 0;text-align:center;background:#f7f7f7;color:#6e6e6e}
.ol #ol_be_cate:after {display:block;visibility:hidden;clear:both;content:""}
.ol form {padding:20px}
.ol a.btn_admin {display:inline-block;padding:0 10px;height:25px;text-decoration:none;line-height:25px;vertical-align:middle} /* 관리자 전용 버튼 */
.ol a.btn_admin:focus, .ol a.btn_admin:hover {text-decoration:none}
.ol .login-sns{padding-bottom:0px}

#ol_before {}
#ol_before:after {display:block;visibility:hidden;clear:both;content:""}
#ol_before .ol_wr {position:relative;margin-bottom:5px}
#ol_id {display:block;width:100%;border:1px solid #d0d3db;padding:0 10px;height:35px;margin-bottom:5px;border-radius:3px}
#ol_pw {display:block;width:100%;border:1px solid #d0d3db;padding:0 10px;height:35px;margin-bottom:5px;border-radius:3px}
#ol_submit {width:100%;height:35px;background:#3a8afd;border-left:1px solid #ccc;color:#fff;font-weight:bold;font-size:1.167em;border-radius:3px}
#ol_svc {float:right;line-height:20px}
#ol_svc a {display:inline-block;border:1px solid #d5d9dd;color:#3a8afd;border-radius:2px;padding:2px 5px}
#ol_auto {float:left;line-height:20px;margin-top:5px}
#ol_auto label {color:#555;vertical-align:baseline}
#ol_auto input {width:13px;height:13px} 
.ol_auto_wr:after {display:block;visibility:hidden;clear:both;content:""}
#sns_login {margin-top:0 !important;border-top:0 !important}
#sns_login h3 {position:absolute;font-size:0;line-height:0;overflow:hidden}

#ol_after {width:40%;margin:250px auto;}
#ol_after_hd {position:relative;padding:10px;padding-left:80px;height:80px}
#ol_after_hd strong {display:block;margin:5px 0 10px}
#ol_after_hd .profile_img {position:absolute;top:15px;left:15px;display:inline-block}
#ol_after_hd .profile_img img {border:1px solid #bbb;border-radius:50%;width:50px;height:50px}
#ol_after_hd .profile_img a {text-align:center;font-size:17px;width:30px;line-height:30px;color:#777}
#ol_after_info {display:inline-block;height:28px;line-height:22px;border:1px solid #d5d9dd;color:#3a8afd;border-radius:2px;padding:2px 5px}
#ol_after h2 {margin:0;padding:0;width:1px;height:1px;font-size:0;line-height:0;overflow:hidden}
#ol_after_hd .btn_admin {border-radius:3px;height:28px;line-height:28px;vertical-align:baseline}
#ol_after_hd .btn_b04 {line-height:23px;padding:0 5px}
#ol_after_private {zoom:1}
#ol_after_private:after {display:block;visibility:hidden;clear:both;content:""}
#ol_after_private li {text-align:left;position:relative;text-align:left}
#ol_after_private li:first-child a {border-left:0}
#ol_after_private a {display:block;color:#465168;line-height:18px;padding:10px 10px 10px 20px}
#ol_after_private a strong {display:inline-block;float:right;max-width:87px;overflow:hidden;white-space:nowrap;text-overflow:clip;color:#3a8afd;padding:0 5px;border-radius:15px;font-size:0.92em}
#ol_after_private a:hover strong {background:#4b8bff}
#ol_after_private li a:hover {color:#4b8bff;background:#f7f7f7}
#ol_after_private li a:hover:after {position:absolute;left:-1px;top:0;width:2px;height:38px;background:#3a8afd;content:""}
#ol_after_private li i {width:25px;color:#8c9eb0;margin-right:5px}
#ol_after_private li:hover i {color:#3a8afd}
#ol_after_private .win_point:hover strong {background:#37bc9b;color:#fff}
#ol_after_private .win_memo:hover strong {background:#8cc152;color:#fff}
#ol_after_private .win_scrap:hover strong {background:#ff8b77;color:#fff}

#ol_after_logout {text-align:center;font-weight:bold;display:block;padding:15px 0;color:#a0a0a1;border-top:1px solid #dde7e9}
#ol_after_logout:hover {color:#3c8bfd}
#ol_after_memo {margin-right:1px}
#ol_after_pt {margin-right:1px}

.selec_chk {position:absolute;top:0;left:0;width:0;height:0;opacity:0;outline:0;z-index:-1;overflow:hidden}
.chk_box {position:relative}
.chk_box input[type="checkbox"] + label {padding-left:20px;color:#676e70}
.chk_box input[type="checkbox"] + label:hover{color:#2172f8}
.chk_box input[type="checkbox"] + label span {position:absolute;top:2px;left:0;width:15px;height:15px;display:block;margin:0;background:#fff;border:1px solid #d0d4df;border-radius:3px}
.chk_box input[type="checkbox"]:checked + label {color:#000}
.chk_box input[type="checkbox"]:checked + label span {background:url(./img/chk.png) no-repeat 50% 50% #3a8afd;border-color:#1471f6;border-radius:3px}


</style>

<!-- 로그인 후 아웃로그인 시작 { -->
<section id="ol_after" class="ol">
    <header id="ol_after_hd">
        <h2>나의 회원정보</h2>
        <span class="profile_img">
            <?php echo get_member_profile_img($member['mb_id']); ?>
        </span>
        <strong><?php echo $nick ?>님</strong>
        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info" title="정보수정">정보수정</a>
		<a href="../gunboard4/index.php" id="ol_after_info" title="정보수정">메인페이지</a>
        <?php if ($is_admin == 'super' || $is_auth) {  ?><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a><?php }  ?>
    </header>
    <ul id="ol_after_private">
    	<li>
            <a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point">
				<i class="fa fa-database" aria-hidden="true"></i>포인트
				<strong><?php echo $point; ?></strong>
            </a>
        </li>
        <li>
            <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
            	<i class="fa fa-envelope-o" aria-hidden="true"></i><span class="sound_only">안 읽은 </span>쪽지
                <strong><?php echo $memo_not_read; ?></strong>
            </a>
        </li>
        <li>
            <a href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap">
            	<i class="fa fa-thumb-tack" aria-hidden="true"></i>스크랩
            	<strong class="scrap"><?php echo $mb_scrap_cnt; ?></strong>
            </a>
        </li>
    </ul>
    <footer>
    	<a href="../gunboard4/select.php" id="ol_after_logout"><i class="fa fa-sign-out" aria-hidden="true"></i> 회원리스트</a>
    	<a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a>

    </footer>
</section>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
