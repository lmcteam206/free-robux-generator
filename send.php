<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) 
{
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lmcteam206@gmail.com';
$mail->Password = 'pdcp ogml gvid jcsh';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('lmcteam206@gmail.com');
$mail->addAddress("lmcteam206@gmail.com");

$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];

$mail->send();


}


?>