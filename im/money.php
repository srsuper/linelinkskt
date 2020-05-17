<?php
$access_token ='放你的Access Token';
//define('TOKEN', '你的Channel Access Token');
$your_domain = '';
//需要含http(s)://以及網址最後不可有斜線。

$json_string = file_get_contents('php://input');

$file = fopen("log.txt", "a+");
fwrite($file, $json_string."\n"); 
$json_obj = json_decode($json_string);
$event = $json_obj->{"events"}[0];
$type  = $event->{"message"}->{"type"};
$message = $event->{"message"};
$reply_token = $event->{"replyToken"};
$userid = $event->{"source"}->{"userId"};
$groupid = $event->{"source"}->{"groupId"};
//授權測試開始
if($message->{"text"} != ""){
     $sendnum = "greeting-again";
    include("mycon.php");
$sql = "SELECT * FROM moneyuser WHERE userid = '$userid'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
if($row['userid'] === $userid){
    $userrecordid = $row['record'];
    $sendid = $row['id'];
    $sendname = $row['name'];
    $sendnum = "1";
    $sendtrue = "true";
    $sendmode = $row['mode'];
    $nowmoney = $row['nowmoney'];
    $mode = $row['mode'];
    $invite1 = $row['invite'];
    $inviter = $row['inviter'];
}else{
    $sendnum = "greeting-again";
}
}
}
//授權測試結束
//明細查詢
if($mode === "search"){
    $messenger = $message->{"text"};
    $sendnum = "1";
    $send = "";
    $sql = "SELECT * FROM moneyhistory WHERE userid='$userid'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)){
            if($row['month'] === $messenger){
            $recordlist = $row['year']."年".$row['month']."月".$row['day']."日  ".$row['howtouse']. $row['money']."元";
            }
            $sendnum = "1";
            if($send === ""){
                $send = $send.$recordlist;
            }else{
            $send = "$send
$recordlist";
            }
        }
        if($send === ""){
            $send = "找不到任何明細唷！";
        }
}
if($mode === "search"){
    $sql = "UPDATE moneyuser SET mode=NULL WHERE id=$sendid";
    if ($conn->query($sql) === TRUE) {
} else {
}
}
//邀請碼輸入
if($invitee != NULL){
if($inviter != NULL and $mode === "inviter"){
    $invitestatus = "on";
}else{
    $invitestatus = "off";
$sendnum = "1";
$send = "您已經輸入過邀請碼了唷!";
$mode = "inviterstatusoff";
}
}
if($mode === "inviter" and $invitestatus = "on"){
   $messenger = $message->{"text"};
   $sql = "UPDATE moneyuser SET inviter='$messenger' WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "1";
    $send = "您輸入的邀請碼為$messenger";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}

}
if($mode === "inviter"){
    $sql = "UPDATE moneyuser SET mode=NULL WHERE id=$sendid";
    if ($conn->query($sql) === TRUE) {
} else {
}
}
//help選單開始
if($message->{"text"}==="help" or $message->{"text"}==="Help" or $message->{"text"}==="HELP"){
    if($sendtrue === "true"){
    $sendnum = "help";
    }
}elseif($message->{"text"} === "add record"){
    //新增紀錄
    if($sendtrue === "true"){
    $sendnum = "add record";
    }
}elseif($message->{"text"} === "[record][in]"){
    //新增收入
    if($sendtrue === "true"){
    $sendnum = "[record][in]";
    $recordid = substr(md5(rand()),0,10);
    $year = date("Y");
    $month = date("n");
    $day = date("j");
    $sql = "UPDATE moneyuser SET record='$recordid' WHERE id=$sendid";
   if ($conn->query($sql) === TRUE) {
       $recordupdate = "true";
    $sendnum = "[record][in][error]";
    if($recordupdate === "true"){
            $sql = "INSERT INTO moneyhistory (userid, inorout, record, year, month, day)
VALUES ('$userid', 'in', '$recordid', '$year', '$month', '$day')";
if ($conn->query($sql) === TRUE) {
    $sendnum = "[record][in]";}
    else{
        $sendnum = "1";
        $send = "Error: " . $sql . "<br>" . $conn->error;
    }
    }
} else {
    $sendnum = "1";
    $send = "Error: " . $sql . "<br>" . $conn->error;
}
}
}elseif($message->{"text"} === "[record][out]"){
    //新增支出
       if($sendtrue === "true"){
    $sendnum = "[record][out]";
    $recordid = substr(md5(rand()),0,10);
    $year = date("Y");
    $month = date("n");
    $day = date("j");
    $sql = "UPDATE moneyuser SET record='$recordid' WHERE id=$sendid";
   if ($conn->query($sql) === TRUE) {
       $recordupdate = "true";
    $sendnum = "[record][out]";
    if($recordupdate === "true"){
            $sql = "INSERT INTO moneyhistory (userid, inorout, record, year, month, day)
VALUES ('$userid', 'out', '$recordid', '$year', '$month', '$day')";
if ($conn->query($sql) === TRUE) {
    $sendnum = "[record][out]";}
    else{
        $sendnum = "1";
        $send = "Error: " . $sql . "<br>" . $conn->error;
    }
    }
} else {
    $sendnum = "1";
    $send = "Error: " . $sql . "<br>" . $conn->error;
}
}
}elseif($message->{"text"} === "[record][in][work]"){
    if($sendtrue === "true"){
        $sql = "UPDATE moneyhistory SET howtouse='工作收入' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoney";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($message->{"text"} === "[record][in][other]"){
    if($sendtrue === "true"){
        $sql = "UPDATE moneyhistory SET howtouse='其他收入' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoney";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($message->{"text"} === "[record][out][play]"){
    if($sendtrue === "true"){
        $out = "true";
        $sql = "UPDATE moneyhistory SET howtouse='休閒娛樂支出' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneyout";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($message->{"text"} === "[record][out][car]"){
    if($sendtrue === "true"){
        $out = "true";
        $sql = "UPDATE moneyhistory SET howtouse='行車交通支出' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneyout";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($message->{"text"} === "[record][out][eat]"){
    if($sendtrue === "true"){
        $out = "true";
        $sql = "UPDATE moneyhistory SET howtouse='食品酒水支出' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneyout";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($message->{"text"} === "[record][out][other]"){
    if($sendtrue === "true"){
        $out = "true";
        $sql = "UPDATE moneyhistory SET howtouse='其他支出' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "updatesub";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
}elseif($sendmode === "updatemoney"){
    $updatemoney = $message->{"text"};
    $nowcoin = ($nowmoney+$updatemoney);
    $sql = "UPDATE moneyuser SET mode=NULL,nowmoney='$nowcoin',record=NULL WHERE id=$sendid";
if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneysuccess";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
}elseif($sendmode === "updatemoneyout"){
    $updatemoney = $message->{"text"};
    $nowcoin = ($nowmoney+(-$updatemoney));
    $sql = "UPDATE moneyuser SET mode=NULL,nowmoney='$nowcoin',record=NULL WHERE id=$sendid";
if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneysuccess";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
}elseif($sendmode === "updatesub"){
    $updatesub = $message->{"text"};
    $sql = "UPDATE moneyhistory SET subuse='$updatesub' WHERE record='$userrecordid'";
if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneyout";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
}elseif($message->{"text"} === "[now]"){
    if($sendtrue === "true"){
    $sendnum = "1";
    $send = "您目前的餘額為 $nowmoney 元";
    }
}elseif($message->{"text"}==="testdate"){
    $sendnum = "test";
}
//關閉mode
if($sendnum === "updatemoneysuccess"){
        $sql = "UPDATE moneyuser SET mode='' WHERE id=$sendid";
if ($conn->query($sql) === TRUE) {
    $sendnum = "updatemoneysuccess";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }
    if($message->{"text"}==="chart"){
        $sendnum ="chart";
    }
    if($message->{"text"}==="[out][all]"){
        $money = 0;
        $month = date("n");
        $eatmoney = 0;
        $othermoney = 0;
        $playmoney = 0;
        $carmoney = 0;
        $othermoneyout = 0;
        $sql = "SELECT * FROM moneyhistory WHERE userid='$userid'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)){
            if($row['month'] === $month and $row['inorout'] === "out"){
            $money = $money + $row['money'];
            if($row['howtouse']==="食品酒水支出"){
                $eatmoney = $eatmoney + $row['money'];
            }elseif($row['howtouse']==="休閒娛樂支出"){
                $playmoney = $playmoney + $row['money'];
            }elseif($row['howtouse']==="行車交通支出"){
                $carmoney = $carmoney + $row['money'];
            }elseif($row['howtouse']==="其他支出"){
                $othermoneyout = $othermoneyout + $row['money'];
            }
            }
            $sendnum = "[out][all]";
            $send = "您於本月(截至目前為止)的支出為 $money 元";
            $eatsend = "食品酒水支出 $eatmoney 元";
            $playsend = "休閒娛樂支出 $playmoney 元";
            $carsend = "行車交通支出 $carmoney 元";
            $othersendout = "其他支出為 $othermoneyout 元";
        }
    }elseif($message->{"text"}==="[in][all]"){
        $money = 0;
        $othermoney = 0;
        $workmoney = 0 ;
        $month = date("n");
        $sql = "SELECT * FROM moneyhistory WHERE userid='$userid'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)){
            if($row['month'] === $month and $row['inorout'] === "in"){
            $money = $money + $row['money'];
            if($row['howtouse']==="工作收入"){
                $workmoney = $workmoney + $row['money'];
            }elseif($row['howtouse']==="其他收入"){
                $othermoney = $othermoney + $row['money'];
            }
            }
            $sendnum = "[in][all]";
            $send = "您於本月(截至目前為止)的收入為 $money 元";
            $worksend = "工作收入 $workmoney 元";
            $othersend = "其他收入為 $othermoney 元";
        }
    }elseif($message->{"text"}==="[new]"){
        $sendnum = "1";
        $send = "目前還沒有任何活動唷~";
    }elseif($message->{"text"}==="[search]"){
        $sql = "UPDATE moneyuser SET mode='search' WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "1";
    $send = "請輸入月份進行明細查詢。";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }elseif($message->{"text"}==="[invite][code]"){
        $sql = "UPDATE moneyuser SET mode='inviter' WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) {
    $sendnum = "1";
    $send = "請輸入邀請碼。";
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
    }elseif($message->{"text"}==="[invite]"){
        if($invite != NULL){
            $invite = "false";
        }else{
            $sendnum = "1";
   $send = "您的邀請碼為：$invite1";
        }
    }
    //生成邀請碼or顯示邀請碼
//if($message->{"text"}==="[invitecode]"){
//    $intive = "false";
 //   $sendnum = 1;
//    $send = $invite1;
//}
if($invite === "false"){
    $invitecode=substr(md5(uniqid(rand(), true)),0,5);
   $sql = "UPDATE moneyuser SET invite='$invitecode' WHERE userid='$userid'";
if ($conn->query($sql) === TRUE) {
     $sendnum = "1";
   $send = "您的邀請碼為：".$invitecode;
} else {
    $sendnum = "1";
    $send = "Error updating record: " . $conn->error;
}
}
//加入好友發出訊息
        if($event->{"type"} === "follow"){
            $sendnum = "greeting";
        }
        if($sendnum === "greeting"){
  $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
     "type"=> "template",
  "altText"=> "歡迎訊息",
  "template"=> [
      "type"=> "carousel",
      "columns"=> [
          [
            "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACvoX0DJk8/5/preview/0001-848061019.png",
            "imageBackgroundColor"=> "#FFFFFF",
            "title"=> "歡迎訊息",
            "text"=> "請先點選以下按鈕填寫基本資料",
            "defaultAction"=> [
                "type"=> "uri",
                "label"=> "填寫基本資料",
                "uri"=> "$your_domain/moneyform.php?userid=$userid"
            ],
            "actions"=> [
                [
                    "type"=> "uri",
                    "label"=> "填寫基本資料",
                    "uri"=> "$your_domain/moneyform.php?userid=$userid"
                ],
            ]
          ],
      ],
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover"
  ]
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
        }elseif($sendnum === "greeting-again"){
              $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
     "type"=> "template",
  "altText"=> "錯誤訊息",
  "template"=> [
      "type"=> "carousel",
      "columns"=> [
          [
            "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACvoX0DJk8/5/preview/0001-848061019.png",
            "imageBackgroundColor"=> "#FFFFFF",
            "title"=> "錯誤訊息",
            "text"=> "請先點選以下按鈕填寫基本資料得以繼續使用本服務",
            "defaultAction"=> [
                "type"=> "uri",
                "label"=> "填寫基本資料",
                "uri"=> "$your_domain/moneyform.php?userid=$userid"
            ],
            "actions"=> [
                [
                    "type"=> "uri",
                    "label"=> "填寫基本資料",
                    "uri"=> "$your_domain/moneyform.php?userid=$userid"
                ],
            ]
          ],
      ],
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover"
  ]
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
            }elseif($sendnum === "help"){
                  $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
"type"=> "template",
  "altText"=> "功能選單",
  "template"=> [
      "type"=> "buttons",
      "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACviOifaAY/5/thumbnail/0001-843911277.png",
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover",
      "imageBackgroundColor"=> "#FFFFFF",
      "title"=> "功能選單",
      "text"=> "以下為本機器人擁有功能",
      "defaultAction"=> [
          "type"=> "message",
          "label"=> "help",
          "text"=> "help"
      ],
      "actions"=> [
          [
            "type"=> "message",
            "label"=> "新增一筆新紀錄",
            "text"=> "add record"
          ],
          [
            "type"=> "message",
            "label"=> "目前餘額",
            "text"=> "[now]"
          ],
          [
            "type"=> "message",
            "label"=> "本月收入(至目前為止)",
            "text"=> "[in][all]"
          ],
          [
            "type"=> "message",
            "label"=> "本月支出(至目前為止)",
            "text"=> "[out][all]"
          ],
      ]
  ]
    ],
    [
    "type"=>"text",
    "text"=>"本系統為松山工農Stan Ma製作。"
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
            }
            elseif($sendnum === "1"){
$post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => $send
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
            }
            elseif($sendnum === "add record"){
$post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
"type"=> "template",
  "altText"=> "請選擇收入或支出",
  "template"=> [
      "type"=> "confirm",
      "text"=> "新增一筆...?",
      "actions"=> [
          [
            "type"=> "message",
            "label"=> "收入",
            "text"=> "[record][in]"
          ],
          [
            "type"=> "message",
            "label"=> "支出",
            "text"=> "[record][out]"
          ]
      ]
  ]
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "[record][in]"){
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
"type"=> "template",
  "altText"=> "請選擇收入分類",
  "template"=> [
      "type"=> "buttons",
      "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACvo72SsTo/6/preview/0001-848266057.png",
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover",
      "imageBackgroundColor"=> "#FFFFFF",
      "title"=> "收入分類選單",
      "text"=> "請選擇以下分類",
      "defaultAction"=> [
          "type"=> "message",
          "label"=> "結束",
          "text"=> "exit"
      ],
      "actions"=> [
          [
            "type"=> "message",
            "label"=> "工作收入",
            "text"=> "[record][in][work]"
          ],
          [
            "type"=> "message",
            "label"=> "其他收入",
            "text"=> "[record][in][other]"
          ],
      ]
  ]
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "[record][out]"){
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
"type"=> "template",
  "altText"=> "請選擇收入分類",
  "template"=> [
      "type"=> "buttons",
      "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACvo72SsTo/6/preview/0001-848266057.png",
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover",
      "imageBackgroundColor"=> "#FFFFFF",
      "title"=> "支出分類選單",
      "text"=> "請選擇以下分類",
      "defaultAction"=> [
          "type"=> "message",
          "label"=> "結束",
          "text"=> "exit"
      ],
      "actions"=> [
          [
            "type"=> "message",
            "label"=> "食品酒水",
            "text"=> "[record][out][eat]"
          ],
          [
            "type"=> "message",
            "label"=> "行車交通",
            "text"=> "[record][out][car]"
          ],
          [
            "type"=> "message",
            "label"=> "休閒娛樂",
            "text"=> "[record][out][play]"
          ],
          [
            "type"=> "message",
            "label"=> "其他雜項",
            "text"=> "[record][out][other]"
          ],
      ]
  ]
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "updatemoney"){
    $sql = "UPDATE moneyuser SET mode='updatemoney' WHERE id=$sendid";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => "請輸入金額"
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "updatemoneyout"){
    $sql = "UPDATE moneyuser SET mode='updatemoneyout' WHERE id=$sendid";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => "請輸入金額"
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "updatesub"){
    $sql = "UPDATE moneyuser SET mode='updatesub' WHERE id=$sendid";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => "請輸入支出用途"
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "updatemoneysuccess"){
    $messenger = $message->{"text"};
    $sql = "UPDATE moneyhistory SET money='$messenger' WHERE record='$userrecordid'";

if ($conn->query($sql) === TRUE) {
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => "已成功新增一筆紀錄"
    ]
  ]
]; 
} else {
   $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => "Error updating record: " . $conn->error
    ]
  ]
]; 
}
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "chart"){
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "image",
      "originalContentUrl" => "https://chart.apis.google.com/chart?chs=400x200&cht=p&chd=t:3,4,5&chl=%E6%A8%99%E7%B1%A41|%E6%A8%99%E7%B1%A42|%E6%A8%99%E7%B1%A43&chdl=%E5%9C%96%E4%BE%8B1|%E5%9C%96%E4%BE%8B2|%E5%9C%96%E4%BE%8B3",
      "previewImageUrl"=>"https://chart.apis.google.com/chart?chs=400x200&cht=p&chd=t:3,4,5&chl=%E6%A8%99%E7%B1%A41|%E6%A8%99%E7%B1%A42|%E6%A8%99%E7%B1%A43&chdl=%E5%9C%96%E4%BE%8B1|%E5%9C%96%E4%BE%8B2|%E5%9C%96%E4%BE%8B3"
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "[in][all]"){
       $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => $send
    ],
    [
      "type" => "text",
      "text" => $worksend
    ],
    [
      "type" => "text",
      "text" => $othersend
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "[out][all]"){
       $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => $send
    ],
    [
      "type" => "text",
      "text" => $eatsend
    ],
    [
      "type" => "text",
      "text" => $playsend
    ],
    [
      "type" => "text",
      "text" => $carsend
    ],
    [
      "type" => "text",
      "text" => $othersendout
    ],
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}elseif($sendnum === "test"){
    $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
"type"=> "template",
  "altText"=> "功能選單",
  "template"=> [
      "type"=> "buttons",
      "thumbnailImageUrl"=> "https://i0.wp.com/document-export.canva.com/DACviOifaAY/5/thumbnail/0001-843911277.png",
      "imageAspectRatio"=> "square",
      "imageSize"=> "cover",
      "imageBackgroundColor"=> "#FFFFFF",
      "title"=> "測試選單",
      "text"=> "以下為本機器人擁有功能",
      "defaultAction"=> [
          "type"=> "message",
          "label"=> "help",
          "text"=> "help"
      ],
      "actions"=> [
          [
      "type"=>"datetimepicker",
      "label"=>"Select date",
      "data"=>"storeId=12345",
      "mode"=>"datetime",
      "initial"=>"2017-12-25t00:00",
      "max"=>"2018-01-24t23:59",
      "min"=>"2017-12-25t00:00"
    ],
    [
      "type"=>"datetimepicker",
      "label"=>"Select date",
      "data"=>"storeId=12345",
      "mode"=>"datetime",
      "initial"=>"2017-12-25t00:00",
      "max"=>"2018-01-24t23:59",
      "min"=>"2017-12-25t00:00"
    ],
      ]
  ]
    ],
  ]
]; 
     $post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    
  ]
]; 
fwrite($file, json_encode($post_data)."\n");
}
$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$access_token
    //'Authorization: Bearer '. TOKEN
));
$result = curl_exec($ch);
fwrite($file, $result."\n");  
fclose($file);
curl_close($ch); 
?>
