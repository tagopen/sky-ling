<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$admin_email  = trim($_POST["Email"]);



$mail->IsSMTP();
//адрес smtp сервера
$mail->Host       = "smtp.gmail.com";
//сообщения дебагера, 0-не показываем
$mail->SMTPDebug  = 3;
//если сервер требует авторизации
$mail->SMTPAuth   = true;
//тип шифрования
$mail->SMTPSecure = "ssl";
//порт сервера
$mail->Port       = 465; //465;
//приоритет почты, 3 - нормально
$mail->Priority    = 3;
//кодировка
$mail->CharSet     = 'UTF-8';
$mail->Encoding    = '8bit';

//тема письма
$mail->Subject     = "Sky-ling. Школа английского";
$mail->ContentType = "text/html; charset=utf-8\r\n";
//адрес почтового ящика gmail
$mail->Username   = "skyling.emailz@gmail.com";
//ваш пароль от ящика
$mail->Password   = '123456789S';


$mail->setFrom('no-reply@sky-ling.com', 'Sky-ling. Школа английского');
$mail->AddAddress($admin_email);     // Add a recipient
$to = 'no-reply@sky-ling.com'; 
$mail->addReplyTo($to, 'Sky-ling. Школа английского');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sky-ling. Благодарность за заявку!';
$mail->Body    = '<p style="color: #000000;">Здравствуйте, спасибо что оставили заявку на нашем сайте!</p>
<p>
<br>
<br>
Наши контакты: 
<br>
skyling.onschool@gmail.com, 
<br>
http://sky-ling.com/ </p>
';
$mail->AltBody = 'The result of your testing: correct answers. As promised, we attach the articles as a gift: https://goo.gl/RMzjaQ - 6 tips for learning English words; https://goo.gl/oqjSJB - DO vs Make; https://goo.gl/AZb6bs - Read and answer questions; Our contacts: skyling.onschool@gmail.com, http://sky-ling.com/';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}