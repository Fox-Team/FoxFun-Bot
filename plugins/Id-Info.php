<?php



$forward_first = $update->message->forward_from->first_name;
$forward_last = $update->message->forward_from->last_name;
$forward_user = $update->message->forward_from->username;
$forward_id = $update->message->forward_from->id;

if($forward != null){
 if($forward_first != null){
  $forward_first = "نام: ".$forward_first;
 }else{
  $forward_first = "نام: None";
 }
 if($forward_last != null){
  $forward_last = "نام خانوادگی: ".$forward_last;
 }else{
  $forward_last = "نام خانوادگی: None";
 }
 if($forward_user != null){
  $forward_user = "یوزرنیم: @".$forward_user;
 }else{
  $forward_user = "یوزرنیم: None";
 }
 bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>Forward INFO</b>\n\n".$forward_first."\n".$forward_last."\n".$forward_user."\nآی دی عددی: ".$forward_id,
      'parse_mode'=>'HTML'
    ]);
}
elseif ($text == '/id')
{
SendMessage($chat_id,"🆔 : `$from_id`","markdown");
}
  ?>
