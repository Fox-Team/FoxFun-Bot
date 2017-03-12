<?php
if (strpos($block , "$from_id") !== false) {
	return false;
	}
$user = file_get_contents('../Admin-Data/Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('../Admin-Data/Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('../Admin-Data/Member.txt',$add_user);
    }unlink('error_log');
?>