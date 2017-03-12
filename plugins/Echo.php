<?php



if(preg_match('/^\/([Ee]cho) (.*)/s',$text)){
	$text = str_replace('/Echo ','',$text);
	$text = str_replace('/echo ','',$text);
	SendAction($chat_id,'typing');
	SendMessage($chat_id , $text,"html");
  }
  ?>
