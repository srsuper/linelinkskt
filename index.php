<?php
require __DIR__ . '/vendor/autoload.php';
 
use \LINE\LINEBot;
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use \LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use \LINE\LINEBot\SignatureValidator as SignatureValidator;
 
// set false for production
$pass_signature = true;
 
// set LINE channel_access_token and channel_secret
$channel_access_token = "iWNh+1bl3bwIXMjS8Rqe9Wc9DewUIO7PQ2yC4P3l7lrk/DNIsApTXPCco50iLoe6amGUKiaHLmXKvQWscdWG69vGKw9oPRRWmQO9ooRsWFxdovlF4mKo9PU/o4xkv/In4G98sCW56j9eYVG99n7SpAdB04t89/1O/w1cDnyilFU=";
$channel_secret = "787cef1e3d92d803d04b55faf4fb5297";
 
// inisiasi objek bot
$httpClient = new CurlHTTPClient($channel_access_token);
$bot = new LINEBot($httpClient, ['channelSecret' => $channel_secret]);
 
$configs =  [
    'settings' => ['displayErrorDetails' => true],
];
$app = new Slim\App($configs);
 
// buat route untuk url homepage
$app->get('/', function($req, $res)
{
  echo "Welcome at Slim Framework";
});
 
// buat route untuk webhook
$app->post('/webhook', function ($request, $response) use ($bot, $pass_signature)
{
    // get request body and line signature header
    $body        = file_get_contents('php://input');
    $signature = isset($_SERVER['HTTP_X_LINE_SIGNATURE']) ? $_SERVER['HTTP_X_LINE_SIGNATURE'] : '';
 
    // log body and signature
    file_put_contents('php://stderr', 'Body: '.$body);
 
    if($pass_signature === false)
    {
        // is LINE_SIGNATURE exists in request header?
        if(empty($signature)){
            return $response->withStatus(400, 'Signature not set');
        }
 
        // is this request comes from LINE?
        if(! SignatureValidator::validateSignature($body, $channel_secret, $signature)){
            return $response->withStatus(400, 'Invalid signature');
        }
    }
 
    // APP CODE :

    // $servername = "remotemysql.com";
    // $username = "W7TF6yHbqQ";
    // $password = "0ohnYYdIxV";

    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=W7TF6yHbqQ", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully"; 
    // }
    // catch(PDOException $e){
    //     echo "Connection failed: " . $e->getMessage();
    // }

    $servername = "a07yd3a6okcidwap.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "wh7dq3n9z2a4cx4v";
    $password = "zjtrxk0qt1zch688";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=portm38ts3yozf8q", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    $data = json_decode($body, true);
    if(is_array($data['events'])){
        foreach ($data['events'] as $event)
        {
            if ($event['type'] == 'message')
            {
                if($event['message']['type'] == 'text')
                {
                    // send same message as reply to user
                    // $result = $bot->replyText($event['replyToken'], $event['message']['text']);
    
                    // or we can use replyMessage() instead to send reply message
                    // $textMessageBuilder = new TextMessageBuilder($event['message']['text']);
                    // $result = $bot->replyMessage($event['replyToken'], $textMessageBuilder);

                    $textMessageBuilder1 = new TextMessageBuilder('Halo, ini balasan pesan.');
                    // $textMessageBuilder2 = new TextMessageBuilder('ini pesan balasan kedua');
                    // $stickerMessageBuilder = new StickerMessageBuilder(1, 106);
                    
                    $multiMessageBuilder = new MultiMessageBuilder();
                    $multiMessageBuilder->add($textMessageBuilder1);
                    // $multiMessageBuilder->add($textMessageBuilder2);
                    // $multiMessageBuilder->add($stickerMessageBuilder);
                    
                    //kirim pesan :
                    // $bot->replyMessage($event['replyToken'], $multiMessageBuilder);

                    $user_id = $event['source']['userId'];
                    $message = $event['message']['text'];

                    // $sql = "INSERT INTO tb_inbox VALUES(NULL,'".$user_id."','".$message."','1',NOW())";

                    // $conn->exec($sql);

                    $sql = "INSERT INTO tb_inbox VALUES(NULL,'".$user_id."','".$message."','1',NOW())";

                    try{
                        $conn->exec($sql);
                    }catch(PDOException $e){
                        echo $sql . "<br>" . $e->getMessage();
                    }

    
                    return $response->withJson($response->getJSONDecodedBody(), $response->getHTTPStatus());
                }
            }
        } 
    }
 
});
 
$app->run();