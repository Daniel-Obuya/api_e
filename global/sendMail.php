<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMail{
    public function SendMail($mailMsg){
         //Load Composer's autoloader
    require 'plugins/PHPMailer/vendor/autoload.php';
    }
}