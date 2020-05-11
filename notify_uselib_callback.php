<?php
session_start();
require_once("LineNotifyLib.php");

define('LINE_NOTIFY_CLIENT_ID','XZD9SAx34mjqkVUivwRsYc');
define('LINE_NOTIFY_CLIENT_SECRET','lt1JLKpNfJw4pfMkCiSjxoTCw3MeI89NOOjxPPZW8uK');
define('LINE_NOTIFY_CALLBACK_URL','https://www.mywebsite.com/notify_uselib_callback.php');
 
$LineNotify = new LineNotifyLib(
    LINE_NOTIFY_CLIENT_ID, LINE_NOTIFY_CLIENT_SECRET, LINE_NOTIFY_CALLBACK_URL);

$accToken = $LineNotify->requestAccessToken($_GET);
if(isset($accToken) && is_string($accToken)){
    $_SESSION['ses_accToken_val'] = $accToken;
}
header("Location:notify_uselib.php");
?>
