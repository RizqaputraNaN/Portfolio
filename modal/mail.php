<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'tls'; 
$mail->Host = "sandbox.smtp.mailtrap.io"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "8e4a5c226637ed"; //user email
$mail->Password = "d40d9cd3858e1d"; //password email 
$mail->SetFrom("rizqaputra60@gmail.com","Rizqa Putra"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("gontangprakasa02@gmail.com","Gontang");  //tujuan email
$mail->MsgHTML("Testing...");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>