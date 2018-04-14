<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Page Not Found";
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
          <div id="code">404</div>
          <div class="text" id="response">
            <p id="reponse"> Sorry! That page was moved, removed, renamed, or might never have existed.</p><br />
            <a href="index.html" class="round"><i class="fas fa-arrow-left"></i> Home</a>
          </div>
        </div>
      </div>
    </div>


    <!--FOOTER SECTION-->
    <?php require_once "/inc/footer.php"; ?>

  </body>

</html>
