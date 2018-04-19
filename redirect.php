<?php
    $to = 'me@leander.xyz';
    $from = 'no-reply@leander.xyz';

   // namespace SendMail;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ( isset( $_POST['sender'] ) ) {
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path . '/inc/PHPMailer/Exception.php';
    require $path . '/inc/PHPMailer/PHPMailer.php';
    require $path . '/inc/PHPMailer/SMTP.php';
    require '../etc/mail-config.php';
    require '../etc/mail-template.php';

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
        $mail->setFrom($from);
        $mail->addAddress($to, 'Leander Rodrigues');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['sender'].' sent you a message!';
        $mail->Body = "test";

        //$mail->send();
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
      $location = '/index.php';
      //header( "refresh: 1.5; url=".$location );
    ?>

    <!--HOME SECTION-->
    <div class="section" id="home">
        <div class="center dark" id="title">
          Success!<br />
          <span class="emphasis">Redirecting...</span>
        </div>
    </div>

    <!--FOOTER SECTION-->
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>

  </body>

</html>
