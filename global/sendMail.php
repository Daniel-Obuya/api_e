<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class SendMail{
    public function SendVerificationEmail($mail, $verfication_code){
   $mail = new PHPMailer(true);

   try {
    //Server settings
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.example.com';                  
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'your_email@example.com';              
    $mail->Password   = 'your_password';                       
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('your_email@example.com', 'YourAppName');
    $mail->addAddress($email);

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Email Verification';
    $mail->Body    = "Thank you for registering. Your verification code is <b>$verification_code</b>";

    // Send email
    $mail->send();
    echo 'Verification email has been sent.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }
}