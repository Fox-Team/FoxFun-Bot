<?php
	function SendAudio($chat_id, $audio, $caption= null){
	bot('SendAudio',[
	'chat_id'=>$chat_id,
	'audio'=>$audio,
	'caption'=>$caption
	]);
	}
?>