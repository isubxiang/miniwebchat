<?php
require_once("config.php");
ini_set("date.timezone","PRC");
$numsql = "select * from dunling_chat";
$numery = mysql_query($numsql,$config);
$num = mysql_num_rows($numery);

if($num<10000){
$num="0";
}else{
$num = $num - 1000;
}
//显示消息条数
$sql = "select * from dunling_chat order by id asc limit $num,1000";
$ery = mysql_query($sql,$config);
while($chat = mysql_fetch_array($ery)){
$time = $chat['time'];
$time = date("H:i:s",$time);
echo '<span style="color:#FF0000">';
echo $chat['nicheng'].' </span><span style="color:green;">'.$time." </span><br/>";
echo $chat['content'].'<P><p/>'; 
}
?>