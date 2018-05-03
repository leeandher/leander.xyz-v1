<?php
  require_once '../../etc/classes/DB.php';
  require_once '../../etc/classes/Note.php';
?>
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

    <?php
      if (isset($_GET['viewNote'])) {
          $title = $_GET['viewNote'];
          $article_data = DB::getArticleData($title);
          if (!$article_data) header('Location: .');
          $blog_post = new Article($article_data);
    ?>
    <!--TITLE SECTION-->
    <div class="section dark" id="post-head">
      <div class="content">
        <div id="post-quote"><?php echo $article_data['quote']; ?></div>
      </div>
    </div>

    <!--RETURN SECTION-->
    <a class="text-small light" id="page-return" href="."><i class="fas fa-arrow-left"></i> Back to Archive</a>

    <!--POST SECTION-->
    <div class="section" id="post-content">
      <div class="content light">
        <div id="post-share">
          <?php

            $blog_post->createShareLinks ();

          ?>
        </div>
        <?php

          $blog_post->viewArticle ();

        ?>
      </div>
    </div>

    <?php
      } else {
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
          <a class="note light round" id="note-1" href="#">
            <div class="title">1 Lorem ipsum dolor sit amet</div>
            <ul>
              <li>boaskdfioaa</li>
              <li>dfasdf</li>
              <li>asdfasd</li>
              <li>asdfads</li>
            </ul>
          </a>
        </div>
        <div id="error">No results, sorry!</div>
      </div>
    </div>
    <?php
      }
    ?>
    <!--FOOTER SECTION-->
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>
    <script src="/resources/js/post.js"></script>

  </body>

</html>
