<style>
@font-face {font-family:'NanumBarunGothic';font-style:normal;font-weight:400;src:url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.eot');src:url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.ttf') format('truetype')}
@font-face {font-family:'NanumBarunGothic';font-style:normal;font-weight:700;src:url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.eot');src:url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.ttf') format('truetype')}
@font-face {font-family:'NanumBarunGothic';font-style:normal;font-weight:300;src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.eot');src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.ttf') format('truetype')}

/* custom start */
.login-cover {
	background: #f5f5f5;
    border: 1px solid #c5c5c5;
    width: 500px;
    display: inline-block;
}
.login-field {
	width: 80%;
	background:#fff;
	border: 1px solid #d5d5d5;
	padding: 0;
	height: 40px;
	margin: 30px auto;
}
.login-field:first-child {
	margin-top: 10px;
}
.login-field input {
	width: 90%;
	height: 100%;
	border: 0;
	padding-top: 0;
	padding-bottom : 0;
    padding-left: 10px;
	font-size: 13px;
	font-family: 'NanumBarunGothic';
	
}
.login-field input::placeholder {
	font-size: 13px;
	color: #959595;
	font-family: 'NanumBarunGothic';
	width: 100%
}	
.login-field.login-confirm {
	padding: 0;
    width: 330px;
    height: 50px;
	margin: 20px auto;
}
.login-field.login-confirm button {
	width: 100%;
    background: #1A75D2;
    border: 1px solid #135CA8;
    color: #fff;
    font-size: 16px;
	height: 50px;
	font-family: 'NanumBarunGothic';
}
.login-bottom-field {
	width: 100%;
	margin-bottom: 20px;
	display: inline-block;
    text-align: left;
	font-family: 'NanumBarunGothic';
}
.login-auto {
	border: 0;
    font-size: 12px;
    color: #757575;
    padding: 0;
    margin-left: 10px;
    display: inline-block;
}
.login-auto label:hover {
	font-weight: 700;
	cursor:pointer;
}
.login-bottom-text {
	font-size: 12px;
    color: #333333;
    text-decoration: none;
	margin: 0;
    margin-right: 10px;
}
.login-bottom-text:hover {
	font-weight: 700;
}	
.login-bottom-field p {
	margin: 0;
	display: inline-block;
	float: right;
}
.login-bottom-text:first-child {
	margin-right: 20px;
}
.login-auto label input {
	transform: scale(1.5);
    margin-right: 10px;
	font-family: 'NanumBarunGothic';
}
.title-img {
	text-align: center;
}
.title-img img {
	height: 28px;
    display: inline-block;
    margin: 40px;
}
#simple_skin {
	text-align: center;
	margin-top: 200px;
}
</style>



<section id="simple_skin">
	<h1>로그인</h3>
	<h3>(로그인을 해주세요)</h1>
	<form class="login-cover" name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
		<fieldset class="login-field">
			<input type="text" name="mb_id" placeholder="아이디를 입력해 주세요" required />
		</fieldset>
		<fieldset class="login-field">
			<input type="password" name="mb_password" placeholder="비밀번호를 입력해 주세요" required />
		</fieldset>
		
		<fieldset class="login-field login-confirm">
			<button type="submit">로그인</button>
			<input type="hidden" name="url" value="<?php echo $login_url; ?>" />
		</fieldset>
		<div class=login-bottom-field>
			<fieldset class="login-auto">
					<label>
						<input type="checkbox" name="auto_login" value="1" />
						자동로그인
					</label>
			</fieldset>
			<p>
				<a class="login-bottom-text" id="login_password_lost" href="<?php echo G5_BBS_URL; ?>/password_lost.php" target="_blank">계정정보찾기</a>
				<a class="login-bottom-text" href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a>
			</p>
			<?php include_once(get_social_skin_path() . '/social_login.skin.php'); ?>
		</div>
	</form>
</section>

<script>
jQuery(function($) {

var $omi = $('#ol_id'),
	$omp = $('#ol_pw'),
	$omi_label = $('#ol_idlabel'),
	$omp_label = $('#ol_pwlabel');

$omi_label.addClass('ol_idlabel');
$omp_label.addClass('ol_pwlabel');

$("#auto_login").click(function(){
	if ($(this).is(":checked")) {
		if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
			return false;
	}
});
});

function fhead_submit(f)
{
if( $( document.body ).triggerHandler( 'outlogin1', [f, 'foutlogin'] ) !== false ){
	return true;
}
return false;
}
</script>