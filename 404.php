<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Page Not Found";
    $pageName = "error";
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

    <!--TITLE SECTION-->
    <div class="section light" id="error">
      <div class="content">
        <div class="center dark">
          <div id="code">404</div>
          <div class="text" id="response">
            <p id="reponse"> Sorry! That page was moved, removed, renamed, or might never have existed.</p><br />
            <a href="/index.php" class="round"><i class="fas fa-arrow-left"></i> Home</a>
          </div>
        </div>
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
