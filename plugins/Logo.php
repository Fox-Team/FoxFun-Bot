<?php

if(preg_match('/^\/([Ll]ogo) (.*)/s',$text)){
	$text = str_replace('/Logo ','',$text);
	$text = str_replace('/logo ','',$text);
	$photo = file_get_contents('http://api.norbert-team.ir/photo-fa/?key=slm&size=50&color=white&text='.urlencode($text));
	file_put_contents('Plugins-Data/Logo.png',$photo);
	SendPhoto($chat_id , new CURLFILE('Plugins-Data/Logo-PL/Logo.png'),"Our Channel : @Fox_Team");
  }
  ?>