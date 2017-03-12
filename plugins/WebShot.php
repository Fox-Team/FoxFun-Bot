<?php

if(preg_match('/^\/([Ww]eb[Ss]hot) (.*)/s',$text)){
	preg_match('/^\/([Ww]eb[Ss]hot) (.*)/s',$text,$match);
	$photo = file_get_contents('http://api.screenshotmachine.com/?key=b645b8&size=X&url='.$match[2]);
	file_put_contents('Plugins-Data/WebShot-PL/webshot.png',$photo);
	SendPhoto($chat_id , new CURLFILE('Plugins-Data/WebShot-PL/webshot.png'),"Our Channel : @Fox_Team");
  }
  ?>