<!DOCTYPE html>
<html>
<body>
<form method="POST">
Email: <input name="email" type="email">
Message: <input name="desc" type="text">
<input type="submit" value="Submit">
</form>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require_once 'vendor/autoload.php';

if(isset($_POST["email"]) && isset($_POST["desc"])){
    $mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'USERNAME_HERE';   //username
    $mail->Password = 'PASSWORD_HERE';   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
    
    $mail->AddReplyTo($_POST["email"], $_POST["email"]);
    $mail->setFrom($_POST["email"], 'Asiakas');
    $mail->addAddress('USERNAME_HERE@gmail.com', 'Me');
    $mail->isHTML(true);
 
    $mail->Subject = 'Yhteyden otto';
    $mail->Body    = $_POST["desc"];
 
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

}
?>
</body>
</html>