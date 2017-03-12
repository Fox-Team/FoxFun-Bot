<?php
	function SendSticker($chat_id, $sticker){
	bot('SendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sticker
	]);
	}
?>