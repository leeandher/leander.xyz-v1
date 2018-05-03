<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Notes";
    $pageName = "media";
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
    <div class="section dark" id="head">
      <div class="content">
        <div class="center" id="page-title">Notes</div>
      </div>
    </div>
    <!--FILTER SECTION
    <div class="text-small" id="utility">
      <button class="btn-tag">concepts</button>
      <button class="btn-tag">reference</button>
      <button class="btn-tag">tricks</button>
      <button class="btn-tag">html</button>
      <button class="btn-tag">css</button>
      <button class="btn-tag">javascript</button>
      <button class="btn-tag">react</button>
    </div>-->
    <!--ARTICLE SECTION-->
    <div class="section" id="archive">
      <div class="content">
        <div class="flex-group">
          <a class="media light round" id="note-1" href="#">
            <div class="title">1 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span>concepts</span>
              <span>javascript</span>
              <span>react</span>
            </div>
          </a>
        </div>
        <div id="error">No results, sorry!</div>
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
