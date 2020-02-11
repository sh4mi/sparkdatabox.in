<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

session_start();

if(isset($_GET['sid']))
{
 $sid = $_GET['sid'];
}
else
{
  $sid =1;
}

$email = $_SESSION['femail'];
$msg = $_SESSION['msg'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'web4mec@gmail.com';                 // SMTP username
    $mail->Password = 'bababhai444';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('web4mec@gmail.com', 'Mailer');
   // $mail->addAddress('sh4mi@hotmail.com', 'shahmir alam');     // Add a recipient
    $mail->addAddress($email);               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'DAR-E-ARQAM New Subject Registraion';
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plai';

    $mail->send();
    echo 'Message has been sent';

    echo "<script>window.open('http://localhost/DAS/scourses.php?id=".$sid."','_self')</script>";
} 
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

