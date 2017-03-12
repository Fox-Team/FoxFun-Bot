<?php
	function SendDocument($chat_id, $document, $caption = null){
	bot('SendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$document,
	'caption'=>$caption
	]);
	}
?>