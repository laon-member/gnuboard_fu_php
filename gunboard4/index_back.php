<?php

include_once('./_common.php');
// $conn=mysql_query('localhost', 'root', 'apmsetup');
// $db=mysql_select_db("user", $sql4321)
$con = mysqli_connect(localhost,root,root,root);
        
    if (mysqli_connect_errno($con)){
        echo "DB 연결 실패:";
    }else{
        echo "DB 연결 성공 " ;	
}



$id = $_SESSION[ss_mb_id];

$name1 = $_POST[name];
$email1 = $_POST[email];
$phone1 = $_POST[phone];
$address1 = $_POST[address];
$etc1 = $_POST[etc];

echo "<div>".$id."</div>";
echo "<div>".$name1."</div>";
echo "<div>".$email1."</div>";
echo "<div>".$phone1."</div>";
echo "<div>".$address1."</div>";
echo "<div>".$etc1."</div>";

$con = mysqli_connect(localhost,root,root,root);
$sql = "select * from user";
$sql = "INSERT INTO user (`id`, `name`, `email`, `phone`, `address`, `etc`) VALUES ( '".$id."','". $name1."','". $email1."','". $phone1."','". $address1."','". $etc1."');";

$result = mysqli_query($con, $sql);

echo "<script>location.replace('../gunboard4/select.php')</script>";


?>
