<?php
require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $page = htmlspecialchars($_POST['page']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);
    $team_size = htmlspecialchars($_POST['team_size']);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.webknight.co.in'; 
        $mail->SMTPAuth   = true; 
        $mail->Username   = 'support@webknight.co.in';
        $mail->Password   = 'webknight@123'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465; 

        $mail->setFrom('hi@novusha.com', 'Novasha Consulting Services India LLP');
        $mail->addAddress('hi@novusha.com', 'Novasha Consulting Services India LLP');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <html>
            <head>
                <style>
                    .container {
                        background-color: #f7f7f7;
                        border: 1px solid #ddd;
                        padding: 20px;
                        border-radius: 5px;
                    }
                    h2 {
                        color: #333;
                    }
                    p {
                        color: #555;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>New Contact Form Submission</h2>
                    <p><strong>Page:</strong> $page</p>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Company:</strong> $company</p>";
        
        if($team_size!=""){$mail->Body .="<p><strong>Team size:</strong></p>
                                        <p>$team_size</p>";}
        $mail->Body .="
                    <p><strong>Message:</strong></p>
                    <p>$message</p>
                </div>
            </body>
            </html>
        ";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
