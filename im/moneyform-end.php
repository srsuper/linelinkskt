<?php
$userid = $_POST['userid'];
$nickname = $_POST['nickname'];
$sex = $_POST['sex'];
$email = $_POST['email'];
include("mycon.php");
if($userid != "" and $nickname != "" and $sex != "" and $email != ""){
$sql = "INSERT INTO moneyuser (userid, nickname, email, sex, nowmoney)
VALUES ('$userid', '$nickname', '$email', '$sex', '0')";
if ($conn->query($sql) === TRUE) {
    echo "<center><h1>已成功創建您的基本資料，</br>請返回Line畫面。</h1></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}elseif($_GET['success']==="1"){
    echo "<center><h1>您已經填寫過基本資料囉~</h1></center>";
}
?>