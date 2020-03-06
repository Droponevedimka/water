<?php

require("PHPMailer.php");
require("SMTP.php");

$homepage = file_get_contents("web-email.html");

$getPhone = empty($_GET['phone']) ? '' : $_GET['phone'];
$getName = empty($_GET['name']) ? '' : $_GET['name'];


$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->CharSet = 'UTF-8';
 
// // Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://mail.hosting.reg.ru';
$mail->Port = 465;
$mail->Username = 'admin@watforall.ru';
$mail->Password = '6X1k6P4f';
 
// // От кого
$mail->setFrom('admin@watforall.ru');		
 
// // Кому
$mail->addAddress('zakaz@kupiwater.ru');
//
 
// // Тема письма
$mail->Subject = '+7' . $getPhone . ' - ' . $getName . ' Ваш новый клиент!!';
 
if(empty($getName)) $getName = 'Клиент без имени'; else $getName = 'Новый клиент с именем:' . $getName;
// // Тело письма
$bodyTo = str_ireplace("####", '+7' . $getPhone, $homepage);
$bodyTo = str_ireplace("$$$$", $getName, $bodyTo);
$body = $bodyTo;
$mail->msgHTML($body);
 
// Приложение
// $mail->addAttachment(__DIR__ . '/image.jpg');
 
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }


?>