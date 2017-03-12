<?php


if(preg_match('/^\/(9[Gg]ag)/s',$text)){
	$gag = json_decode(file_get_contents('http://api-9gag.herokuapp.com'));
	$number = rand(0,2);
	$photo = $gag[$number]->src;
	file_put_contents('Plugins-Data/9Gag-PL/9gag.png',file_get_contents($photo));
	SendPhoto($chat_id , new CURLFILE('Plugins-Data/9Gag-PL/9gag.png'),"Our Channel : @Fox_Team");
  }
  ?>