<?php
  if ( isset( $_POST['sender'] ) ) {
    $to = 'me@leander.xyz';
    $from = 'no-reply@leander.xyz';
    $subject = $_POST['subject'];
    $message = "You've received a message from: " . $_POST['sender'] . " at the email " . $_POST['email'];
    $message .= "<br/>" . $_POST['message'];
    
   // namespace SendMail;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path.'/inc/PHPMailer/Exception.php';
    require $path. '/inc/PHPMailer/PHPMailer.php';
    require $path. '/inc/PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'leander.xyz';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'no-reply@leander.xyz';                 // SMTP username
        $mail->Password = 'AutoBotEmail3187';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($from, 'Autobot');
        $mail->addAddress($to, 'Leander Rodrigues');            // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
  header("Location: http://leander.xyz/success.php");
  die();
?>