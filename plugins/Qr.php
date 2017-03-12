<?php

if(preg_match('/^\/([Qq]r) (.*)/s',$text)){
    preg_match('/^\/([Qq]r) (.*)/s',$text,$match);
    file_put_contents('Plugins-Data/Qr-PL/Poster.jpg',file_get_contents('https://api.qrserver.com/v1/create-qr-code/?size=500x500&data='.urlencode($match[2])));
	SendPhoto($chat_id , new CURLFile('Plugins-Data/Qr-PL/Poster.jpg'),"Our Channel : @Fox_Team");
  }
  ?>