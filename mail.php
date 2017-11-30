<!--
$fio= $_POST['fio'];
$phone= $_POST['phone'];
$email= $_POST['email'];

$emailTo = 'staggering@mail.ru'; //Сюда введите Ваш email
$body = "$fio \n\n$phone\n\n$email ";
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, $fio, $body, $headers);
$emailSent = true;-->
<?php
 
$message =
"Content-type: texp/plain; charset=koi8-r
From: Мой комп
To: Мой почтовый ящик <prizrak_001@yahoo.com>
Subject: Проверка PHP MAIL
Content-type: texp/plain; charset=koi8-r
Какое-нибудь сообщение";
 
$message = convert_cyr_string($message,"w","k");
if (mail("prizrak_001@yahoo.com","",$message))
   echo "Успех";
else
   echo "Неудача";
 
