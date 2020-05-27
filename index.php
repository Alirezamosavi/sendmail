


<?php

include('includes/class.phpmailer.php');
include('includes/class.smtp.php');


$mail = new PHPMailer();                        // create a new object
$mail->IsSMTP();                                // enable SMTP
$mail->SMTPDebug = 0;                           // debugging: 3  میتونه 2 یا
$mail->SMTPAuth = true;                         // authentication enabled
$mail->SMTPSecure = 'tls';                      //    باشه  ssl میتونه secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or  465 میتونه
$mail->IsHTML(true);
$mail->Username = "mosavialireza191@gmail.com"; // این شناسه ایمیل فرستنده اس
$mail->Password = "091387261381";                 // این پسورد ایمل فرستنده اس
$mail->SetFrom("mosavialireza191@gmail.com");           
$mail->Subject = "First Test for send mail in php";   //این موضوع ایمیل 
$mail->Body = "hello im im here this is first send in php ";                      // این محتوای پیامه
$mail->AddAddress("alirezamosavi346@gmail.com");         //    این ایمیل شخصی است که میخوایم پیام بفرستیم برای اون   

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }