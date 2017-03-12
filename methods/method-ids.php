<?php
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$text = $message->text;
$forward = $update->message->forward_from;
$reply = $update->message->reply_to_message;
$block = file_get_contents("../Admin-Data/Block-List.txt");
$start = file_get_contents("../Admin-Data/Start.txt");
$help = file_get_contents("../Admin-Data/Help.txt");
$command = file_get_contents("../Admin-Data/Cmd.txt");
?>