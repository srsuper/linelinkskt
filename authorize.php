<?php
// ถ้ามีการใช้งาน session อย่าลืมเปิดใช้งาน session_start()
// session_start();

// กรณีต้องการตรวจสอบการแจ้ง error ให้เปิด 3 บรรทัดล่างนี้ให้ทำงาน กรณีไม่ ให้ comment ปิดไป
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// กรณีมีการเชื่อมต่อกับฐานข้อมูล
require_once("dbconnect.php");

// http://php.net/manual/en/function.random-bytes.php
function RandomToken($length = 32){
    if(!isset($length) || intval($length) <= 8 ){
      $length = 32;
    }
    if(function_exists('random_bytes')) {
        return bin2hex(random_bytes($length));
    }
    if(function_exists('mcrypt_create_iv')) {
        return bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
    }
    if(function_exists('openssl_random_pseudo_bytes')) {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }
}
// สร้างตัวแปร session ใช้สำหรับป้องกันการยิงข้อมูลแบบ CSRF
$_SESSION['my_service_state_key'] = RandomToken();
// สร้าง Link ไปหน้าล็อกอินของ Line เพื่อขอ authorize อนุญาตการเข้าถึงข้อมูล เพื่อรับ access token
$url = "https://notify-bot.line.me/oauth/authorize?".
    http_build_query(array(
        'response_type' => 'code', // ไม่แก้ไขส่วนนี้
        'client_id' => 'XZD9SAx34mjqkVUivwRsYc',
        'redirect_uri' => 'https://linelinkskt.herokuapp.com/web_callback.php',
        'scope' => 'notify', // ไม่แก้ไขส่วนนี้
        'state' => $_SESSION['my_service_state_key']
    )
);
header("Location: {$url}"); // ยิงไปหน้าการเชื่อมต่อบริการ
exit;
?>
