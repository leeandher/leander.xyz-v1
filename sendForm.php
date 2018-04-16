<?php
    $to = 'me@leander.xyz';
    $from = 'no-reply@leander.xyz';
    $subject = $_POST['subject'];
    $message = "You've received a message from: " . $_POST['sender'] . " at the email " . $_POST['email'];
    $message .= "<br/>" . $_POST['message'];
    
   // namespace SendMail;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path . '/inc/PHPMailer/Exception.php';
    require $path . '/inc/PHPMailer/PHPMailer.php';
    require $path . '/inc/PHPMailer/SMTP.php';
    require '../etc/mail-config.php';

  if ( isset( $_POST['sender'] ) ) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = __MAILHOST__;
        $mail->SMTPAuth = true;
        $mail->Username = __MAILER__;
        $mail->Password = __MAILPASS__;
        $mail->SMTPSecure = __MAILSECURE__;
        $mail->Port = __MAILPORT__;
      
        //Recipients
        $mail->setFrom($from, 'Autobot');
        $mail->addAddress($to, 'Leander Rodrigues');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
?>


<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Success!";
    $pageName = "redirect";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/header.php";
    require_once($path);
  ?>  


  <body>
    <!--NAVIGATION-->
    <?php 
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/navbar.html";
      require_once($path);
    ?>

    <!--HOME SECTION-->
    <div class="section dark" id="home">
      <div class="content">
        <div class="center" id="title">
          Hi, my name is<br />
          <span class="emphasis" id="name">Leander Rodrigues</span>.
          <div id="subtitle">
            I'm an undergrad
            <span class="emphasis">engineer</span>, and aspiring
            <span class="emphasis">programmer</span>.
          </div>
        </div>
      </div>
    </div>
    
    <?php
      
    ?>


    <!--FOOTER SECTION-->
    <?php 
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>

  </body>

</html>
