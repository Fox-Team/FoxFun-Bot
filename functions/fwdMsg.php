<?php
	function ForwardMessage($chat_id, $from_chat, $message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
?>