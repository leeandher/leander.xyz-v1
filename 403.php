<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Access Denied";
    $pageName = "error";
    require_once "/inc/header.php";
  ?>


  <body>
    <!--NAVIGATION-->
    <?php require_once "/inc/navbar.html"; ?>

    <!--TITLE SECTION-->
    <div class="section light" id="error">
      <div class="content">
        <div class="center dark">
          <div id="code">403</div>
          <div class="text" id="response">
            <div id="reponse"> Sorry! You don't have permssion to access that.</div>
            <a href="index.html" class="round"><i class="fas fa-arrow-left"></i> Home</a>
          </div>
        </div>
      </div>
    </div>

    <!--FOOTER SECTION-->
    <?php require_once "/inc/footer.php"; ?>

  </body>

</html>
