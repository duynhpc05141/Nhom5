<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['forgot']) && ($_POST['forgot'])) {
    $mail = new PHPMailer(true);
    $user_email = $_POST['email'];
    if (customer_check_by_email($user_email)) {
   
        try {
            // SMTP Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Disable debugging for production
            $mail->isSMTP();
            // $mail->CharSet ='utf-8';
            $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'duynhpc05141@fpt.edu.vn'; // SMTP username
            $mail->Password = 'vuie rizy gves uzfp'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS or SSL
            $mail->Port = "465"; // Adjust the port accordingly (usually 465 for SMTPS)

            // Set the sender's email address dynamically
            $mail->setFrom('duynhpc05141@fpt.edu.vn', 'Duy');
            $mail->addAddress($user_email); // Add the recipient's email address

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'FastNews';
            $mail->Body = 'New password';


            $new_password = bin2hex(random_bytes(8));


            customer_forgot($user_email, $new_password);


            $mail->Body = "Mật khẩu mới của bạn là: $new_password";

            echo '<script>alert("Mật khẩu đã được gửi qua email.")</script>';

            // Send the email
            $mail->send();
            echo '<script>window.location = "index.php?act=login";</script>';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else{
        echo '<script>alert("Email không tồn tại.");</script>';
        echo '<script>window.location = "index.php?act=forgot";</script>';
    }
} 

