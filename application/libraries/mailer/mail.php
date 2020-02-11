<?php

$servername="localhost";
$username="cjnsjgpqjn";

$password="5QWMYZvqRQ";
$db="cjnsjgpqjn";




$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
  die("connection failded".$conn->connect_error);
}

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_GET['id']))
{
 $id = $_GET['id'];
 //echo "hello".$id;

 $query = "select * from requests where id ='$id' ";
 $run = mysqli_query($conn,$query);
 $row=mysqli_fetch_array($run,MYSQLI_ASSOC);
 $name = $row['fullname'];
 $email = $row['email'];
 $education = $row['education'];
 $experience = $row['experience'];
 $city = $row['city'];
 $specialty = $row['specialty'];
 $contact = $row['contact'];
 $linkedin_profile = $row['linkedin_profile'];
 $website = $row['website'];
 $description = $row['description'];
 $resume = $row['resume'];
if($resume !="")
{
  if($_SERVER['HTTP_HOST']== 'coursepanda.sparkdatabox.com')
  {
    $res = "https://coursepanda.sparkdatabox.com/".'uploads/instructor_resume/'.$row['resume'];	
  }
  else
  {
    $res = "https://dev.sparkdatabox.com/".'uploads/instructor_resume/'.$row['resume'];	
  } 
 
}
else
{
	$res = "";
}
 
 $msg = "<div style='background:white;color:black;padding:10px;'><h3 style='background:blue;color:white;padding:10px;'>New Instructor Request SparkDataBox</h3>
 			<h5 >Instructor Details</h5>
 			<p><b>Email: ".$row['email']."</b></p>
 			<p><b>Name: ".$row['fullname']."</b></p>
 			<p><b>Contact: ".$row['contact']."</b></p>
 			<p><b>City: ".$row['city']."</b></p>
 			<p><b>Education: ".$row['education']."</b></p>
 			<p><b>Specialty: ".$row['specialty']."</b></p>
 			<p><b>Experience: ".$row['experience']."</b></p>
 			<p><b>Description: ".$row['description']."</b></p>
 			<p><b>Linkedin Profile: ".$row['linkedin_profile']."</b></p>
 			<p><b>Webiste: ".$row['website']."</b></p>
 			<p><b>Resume: </b><a href='".$res."' class='btn btn-sign-up' download>download</a>
 			</p></div>";
                
                
 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'web4mec@gmail.com';                 // SMTP username
    $mail->Password = 'string.null()';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('instructor@sparkdatabox.com', 'SparkDatabox Instructor');
   // $mail->addAddress('sh4mi@hotmail.com', 'shahmir alam');     // Add a recipient
    $mail->addAddress('instructor@sparkdatabox.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SparkDatabox Instructor Registration';
    $mail->Body    = $msg;
    $mail->AltBody = 'SparkDatabox Teacher Registration email.';

    $mail->send();
   // echo 'Message has been sent';
   if($_SERVER['HTTP_HOST']== 'coursepanda.sparkdatabox.com')
   {
    echo "<script>window.open('https://coursepanda.sparkdatabox.com/','_self')</script>";
   }
   else
   {
    echo "<script>window.open('https://dev.sparkdatabox.com/','_self')</script>";
   }
    
} 
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



}
else
{
	// no id
}

?>