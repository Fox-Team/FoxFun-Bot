<?php
	function SendVoice($chat_id, $voice, $caption = null){
	bot('SendVoice',[
	'chat_id'=>$chat_id,
	'voice'=>$voice,
	'caption'=>$caption
	]);
	}
?>