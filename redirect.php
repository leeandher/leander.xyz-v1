<?php


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ( isset( $_POST['sender'] ) ) {
      $path = $_SERVER['DOCUMENT_ROOT'];
      require $path . '/inc/PHPMailer/Exception.php';
      require $path . '/inc/PHPMailer/PHPMailer.php';
      require $path . '/inc/PHPMailer/SMTP.php';
      require '../etc/mail-config.php';
      require '../etc/mail-template.php';

      //Sending my copy of the email
      $to = 'me@leander.xyz';

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = __MAILHOST__;
      $mail->SMTPAuth = true;
      $mail->Username = __MAILER__;
      $mail->Password = __MAILPASS__;
      $mail->SMTPSecure = __MAILSECURE__;
      $mail->Port = __MAILPORT__;

      $mail->setFrom('no-reply@leander.xyz');
      $mail->addAddress($to, 'Leander Rodrigues');
      $mail->isHTML(true);
      $mail->Subject = $_POST['sender'].' sent you a message!';
      $mail->Body = mail_body($to);

      $mail->send();


      //Sending recipient copy of the email
      $to = $_POST['email'];

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = __MAILHOST__;
      $mail->SMTPAuth = true;
      $mail->Username = __MAILER__;
      $mail->Password = __MAILPASS__;
      $mail->SMTPSecure = __MAILSECURE__;
      $mail->Port = __MAILPORT__;

      $mail->setFrom('no-reply@leander.xyz');
      $mail->addAddress($to, $_POST['sender']);
      $mail->isHTML(true);
      $mail->Subject = 'Thanks for your message on leander.xyz!';
      $mail->Body = mail_body($to);
      $mail->send();
    }
    //Clear the POST variable
    $_POST = array();
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
      header( "refresh: 1; url=".$location );
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
