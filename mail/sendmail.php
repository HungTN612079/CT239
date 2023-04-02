<?php
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
// include "PHPMailer/src/OAuth.php";
// include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer{
    public function dathangmail($tieude,$noidung,$maildathang){
        $mail = new PHPMailer(true);  
        $mail->CharSet = 'UTF-8';                            
        // print_r($mail)  
        try {
            //Send using SMTP
            $mail->isSMTP();                                      //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'hn0193348@gmail.com';              // SMTP username
            $mail->Password = 'irafgujjilhoawtj';                 // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('hn0193348@gmail.com', 'Hùng Nguyễn');
            $mail->addAddress('hn291743@gmail.com', '
            Hùng Nguyễn');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('hn0193348@gmail.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $tieude;
            $mail->Body    = $noidung;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
?>
