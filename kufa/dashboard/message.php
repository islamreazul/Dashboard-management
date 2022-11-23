<?php
require_once('./db_connect.php');
session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// insert query
$email_query= "INSERT INTO email (name,email,message) VALUES ('$name','$email','$message')";
$email_query_db=mysqli_query($db_connect,$email_query);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'reazulislam704@gmail.com';                     //SMTP username
    $mail->Password   = 'xtpvsqibbaaobyks';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $email_query= "SELECT email FROM email ";
                $email_query_db= mysqli_query($db_connect,$email_query);

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = " $name";
    $mail->Body    = " i love Bangladesh.";

    $mail->send();
    echo 'Message has been sent';
    $_SESSION["sent"] = 'Email sent success';
    header('location:../frontent/index.php#contact');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> 