<?php



include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

// if(defined('G5_THEME_PATH')) {
//     require_once(G5_THEME_PATH.'/head.php');
//     return;
// }

// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/head.php');
//     return;
// }

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>
<!DOCTYPE html>
<html>
<head>
    
    <title></title>
    <style>
    .select_title{
        text-align: center;
        font-size: 25px;
        margin: 59px 0;
    }

    table{
        width:80%;
        margin: 0 auto;
    }

    td{
        padding:5px;
        font-size: 16px;
    }
    
    
    </style>
</head>
<body>
<div id="hd">
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper">
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        <ul class="hd_login">        
            <?php if ($is_member) {  ?>
                <li><a href="../index.php"> 나의 정보</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="../index.php">로그인</a></li>
            <?php }  ?>

        </ul>
    </div>
    </div>

    
    <h1 class="select_title">MySQL 접속해서 데이터 가져오기</h1>
    <?php 

    $con = mysqli_connect(localhost,root,root,root);
    $sql = "select * from user";

    $result = mysqli_query($con,$sql);

    if (mysqli_connect_errno()){
        echo "연결실패<br>이유 : " . mysqli_connect_error();
    }
   

    echo "<table border=’1′> <tr> <th>아이디</th> <th>이름</th> <th>이메일</th> <th>전화번호</th><th>주소</th><th>기타</th></tr>";
    $n = 1;
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row[id] . "</td>";
        echo "<td>" . $row[name] . "</td>";
        echo "<td>" . $row[email] . "</td>";
        echo "<td>" . $row[phone] . "</td>";
        echo "<td>" . $row[address] . "</td>";
        echo "<td>" . $row[etc] . "</td>";
        echo "</tr>";
        $n++;
    };
    echo "</table>";
    ?>
</body>
</html>


