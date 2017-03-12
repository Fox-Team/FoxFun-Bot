<?php 

ob_start();

//Start Config
   
   include("config/botconf.php");
   include("config/start-config.php");
//Finish Config

   //Start Methods

      include("methods/method-ids.php");

    //Start Functions
      include("functions/sendMsg.php");
      include("functions/fwdMsg.php");
      include("functions/sendAction.php");
      include("functions/sendAudio.php");
      include("functions/sendSound.php");
      include("functions/sendFiles.php");
      include("functions/sendPhoto.php");
      include("functions/sendVideo.php");
      include("functions/sendSricker.php");

   //Start Plugins

           include("plugins/9Gag.php");
           include("plugins/Calc.php");
           include("plugins/Cat.php");
           include("plugins/Date-Time.php");
           include("plugins/Echo.php");
           include("plugins/Id-Info.php");
           include("plugins/Loctaion.php");
           include("plugins/Logo.php");
           include("plugins/Photo.php");
           include("plugins/Qr.php");
           include("plugins/Reply.php");
           include("plugins/Share-Contact.php");
           include("plugins/Short.php");
           include("plugins/Sticker.php");
           include("plugins/WebShot.php");
           include("plugins/Start-Help.php");
//---------------------------------------------

    //Start ErrorLog In Bot
        include("methods/errorlog.php");
		include("methods/Fox-sql.php");

/*
~~Importants~~ :
Don't Import Any File in Config Folder
Don't Change Any Folder Or File !
You Can Change sequence In Plugins Just !


~~How Add Plugin ?~~ :
You Can Add Just PHP-Api-Telegram Plugins 
If You Have A PHP-Api-Telegram Plugin Upload That On Plugins Folder
And Add This Code In Plugins Place : include("plugins/Your Plugin Name.php");

*/
	?>
