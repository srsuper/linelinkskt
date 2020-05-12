<?php
// ถ้ามีการใช้งาน session อย่าลืมเปิดใช้งาน session_start()
// session_start();

// กรณีต้องการตรวจสอบการแจ้ง error ให้เปิด 3 บรรทัดล่างนี้ให้ทำงาน กรณีไม่ ให้ comment ปิดไป
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// กรณีมีการเชื่อมต่อกับฐานข้อมูล
//require_once("dbconnect.php");


if(!isset($_SESSION['my_service_state_key']) || $_GET['state'] !== $_SESSION['my_service_state_key']){
    if(isset($_SESSION['my_service_state_key'])){
        unset($_SESSION['my_service_state_key']);
    }
    echo 'State Validation fail <br>';
    echo '<a href="authorize.php"></a>';
    exit;
}

// ทดสอบค่าที่ได้รับหลังจากทำการ authorize
echo "<pre>";
print_r($_GET);

if(!isset($_GET['error']) && isset($_GET['code']) && $_GET['code'] != ""){

    $code = $_GET['code'];
    $tokenURL = "https://notify-bot.line.me/oauth/token";

    $headers = array(
        'Content-Type: application/x-www-form-urlencoded'
    );
    $data = array(
        'grant_type' => 'authorization_code', // ไม่แก้ไขส่วนนี้
        'code' => (string)$code,
        'redirect_uri' => 'https://www.mywebsite.com/web_callback.php',
        'client_id' => '1654152976',
        'client_secret' => '539edc4e8dad5331781be75742242d0e'                 
    );

    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $tokenURL);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec( $ch );
    curl_close( $ch );

    // ตรวจสอบค่าข้อมูล ว่าเป็นตัวแปร ปรเภทไหน ข้อมูลอะไร
    var_dump($result);

    // การเช็คสถานะการทำงาน
    $result = json_decode($result,TRUE);
    // ดูโครงสร้าง กรณีแปลงเป็น array แล้ว
    echo "<pre>";
    print_r($result);

    // ตรวจสอบข้อมูล ใช้เป็นเงื่อนไขในการทำงาน
    if(!is_null($result) && array_key_exists('status',$result)){
        if($result['status']==200){
            echo "Access token is: ".$result['access_token'];
        }
    }
}else{ // กรณีเกิด error หรืออื่นๆ
    if(isset($_SESSION['my_service_state_key'])){
        unset($_SESSION['my_service_state_key']);
    }
    echo 'Authorization fail <br>';
    echo '<a href="authorize.php"></a>';
    exit;
}
?>
