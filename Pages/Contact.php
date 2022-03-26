<?php

namespace Pages;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Contact extends Page{
    
    public function index() {
        
        $this->load('views/frontend/contact/index.php');

    }

    public function send(){

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        $status;

        try {

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '72dc4cb7fd7c22';
            $mail->Password = '28fcbd42288b59';

            $mail->setFrom($email);
            $mail->addAddress('n.gelashvili33@gmail.com');
            $mail->addReplyTo($email);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = '<div>'.$message.'</div>';
            
            $mail->send();

            $status = 1;

        } catch(Exception $e) {
            $status = 0;
        }

        
        header('Location: ?page=contact&status='.$status);
        
    }

}