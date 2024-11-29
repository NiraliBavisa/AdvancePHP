<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

    class sendEmail

    {
        function send($code)

        {
        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP();                                      

            $mail->Host = 'smtp.mailtrap.io'; 

            $mail->SMTPAuth = true;                              

            $mail->Username = '';                

            $mail->Password = '';                        

            $mail->SMTPSecure = 'tls';                            

            $mail->Port = 587;        

            $mail->isHTML(true); 

            $mail->setFrom('sender@gmail.com', "Sender"); 

            $mail->addAddress('receiver@gmail.com', "Receiver");  

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification';

            $mail->Body    = 'Please click this button to verify your account: <a href=c:\xampp\htdocs\AdvancePHP\verify.php?code='.$code.'>Verify</a>' ;

            $mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) { 

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

$sendMl = new sendEmail();

?>