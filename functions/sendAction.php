<?php
        // Action Telegram
        function SendAction($chat_id, $action){
	bot('SendChatAction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
?>