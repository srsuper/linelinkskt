<?php

require_once './vendor/autoload.php';

$token = 'ocAFOiVlI3yRmol8tfs3bwsS4t6bORh8bRXoUVenleS';
$ln = new KS\Line\LineNotify($token);

$text = 'ตัวอื่นก็ แทงได้นะจ๊ะ หลังป้ายนี้ แทง 1 ไม่ติด ทุกกรณี '; // Line Notify บังคับให้ใส่ข้อความ แต่อยากส่งแแต่รูปภาพเลยใส่ space ไว้
$image_path = '/img/limit1.jpg'; //Line notify allow only jpeg and png file
$ln->send($text, $image_path);
