<?php
	function SendVideo($chat_id, $video, $caption= null){
	bot('SendVideo',[
	'chat_id'=>$chat_id,
	'video'=>$video,
	'caption'=>$caption
	]);
	}
?>