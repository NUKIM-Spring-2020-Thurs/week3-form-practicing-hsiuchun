<?php

$uname=$_POST["username"];
$userid=$_POST["id"];
$phonenum=$_POST["phone"];
$sex=$_POST["gender"];
$filestored=$_POST["files"];
$clothpattern=$_POST["cloth"];
$color=$_POST["color"];
$payment=$_POST["money"];
$birthday=$_POST["birth"];
$email=$_POST["mail"];
$live=$_POST["city"];
$self=$_POST["self"];

echo "姓名".$uname."<br/>";
echo "身分證字號".$userid."<br/>";
echo "連絡電話".$phonenum."<br/>";
echo "性別".$sex."<br/>";
echo "衣服版型及件數".$clothpattern."<br/>";
echo "營服顏色".$color."<br/>";
echo "一餐費用".$payment."<br/>";
echo "生日".$birthday."<br/>";
echo "電子信箱".$email."<br/>";

$personalcount=count($self);
// echo "個性".$personalcount."<br/>";

// #for迴圈
// for($j=0;$j<$personalcount;$j++){
//     echo "個性特質".$self[$j]."<br/>";
// }
#使用implode
echo "個性特質".implode(",",$self)."<br/>";

// #foe each寫法有問題嗚嗚
// foreach ($self as $personalcount =>$value){
//     echo "個性".$value."<br/>";
// }

$livecount=count($live);
// echo "居住地".$livecount."<br/>";

// for($i=0;$i<$livecount;$i++){
//     echo "你的居住地".$live[$i]."<br/>";
// }


if(isset($_POST["city"])){ #檢查是否有填寫資料
    $live=$_POST["city"];
    $livecount=count($live);
    for($i=0;$i<$livecount;$i++){
        echo "你的居住地".$live[$i]."<br/>";
    }
}

$comment=$_POST["suggest"];
echo "建議"."<br/>";
// echo nl2br($comment)."<br/>";#保留換行
echo nl2br(htmlspecialchars($comment))."<br/>"; #讓超連結以純文字顯示
?>