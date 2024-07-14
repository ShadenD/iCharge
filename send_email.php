
<!-- <link rel="stylesheet" href="alert.css"> -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpMailer/Exception.php';
require_once 'phpMailer/PHPMailer.php';
require_once 'phpMailer/SMTP.php';

$mail= new PHPMailer(true);
$alert='';
$id_file = 'last_id.txt';
// Read the last ID from the file
$last_id = intval(file_get_contents($id_file));
// Increment the ID
$new_id = $last_id ++;
// Save the new ID back to the file
file_put_contents($id_file, $new_id);

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->IsSMTP();
        $mail->Username='shadendaibes@gmail.com';
        $mail->Password='zsiz cgzg hnhq mjxw';
        $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
        $to = "shaden";
        $mail->Port=587;
        $mail->setFrom('shadendaibes@gmail.com');
        $mail->addAddress('shadendaibes@gmail.com');
        $mail->isHTML(true);
        $headers="Form:".$name."/r/n";
        $mail->Subject = "#$new_id: $subject Contact Us Form Submission ";
        // $mail->Subject='Message Recevied From contact Page';
       $mail->Body="
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .pink-background {
                background-color: #ffcccb;
                padding: 20px;
                max-width: 600px;
                margin: 20px auto;
                border-radius: 8px;
            }
            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color: #333333;
            }
            p {
                color: #555555;
                line-height: 1.5;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                color: #999999;
                font-size: 12px;
            }
            .footer a {
                color: #555555;
                text-decoration: none;
            }
            .footer a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class='pink-background'>
            <div class='container'>
                <h2>Contact Us Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong> $message</p>
               
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from your website's contact form. <a href='http://localhost:3000/homepage.php' style='color:blue;'>Visit our website</a></p>
        </div>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

        $mail->send();
        $alert='<div class="alert-success">
        <span>Message Sent! Thank you for contacting us.</span>
        </div> ';
        }
    catch(Exception $e){
     $alert='<div class="alert-error">
        <span>'.$e->getMessage().'</span>
        </div>';
    }
    if($email!=Null){
        mail($to,$subject,$txt,$headers);
    }
    header('Location:thank you.php');
}



