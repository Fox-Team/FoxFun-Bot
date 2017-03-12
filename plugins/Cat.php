<?php




  if(preg_match('/^\/([Cc]at)/s',$text)){
    file_put_contents('Plugins-Data/Cat-PL/Cat.jpg',file_get_contents('http://thecatapi.com/api/images/get?format=src&type=jpg'));
	SendPhoto($chat_id , new CURLFile('Plugins-Data/Cat-PL/Cat.jpg') , "Our Channel : @Fox_Team");
  }
  ?>