<?php
    // Send Message Telegram
    function SendMessage($chat_id, $text, $mode = null){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
?>