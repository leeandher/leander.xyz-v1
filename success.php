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
