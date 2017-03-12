<?php

if ($text == '/contact')
{
  $phone = '+98';
  $name = 'FirstName, LastName';
  bot('sendContact',[
  'chat_id'=>$chat_id,
  'phone_number'=>$phone,
  'first_name'=>$name,
  ]);
}
  ?>