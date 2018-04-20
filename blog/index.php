<?php
  require_once '../../etc/classes/DB.php';
  require_once '../../etc/classes/Article.php';
?>
<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Blog";
    $pageName = "media";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/header.php";
    require_once($path);
    echo '<link rel="stylesheet" type="text/css" href="/resources/css/post.processed.css">';
  ?>

  <body>
    <!--NAVIGATION-->
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/navbar.html";
      require_once($path);
    ?>

    <?php
      if (isset($_GET['viewArticle'])) {
          $title = $_GET['viewArticle'];
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
          <a class="fab fa-facebook-f" href="#"></a>
          <a class="fab fa-twitter" href=""></a>
          <a class="fab fa-google-plus-g" href="#"></a>
          <a class="fab fa-linkedin-in" href="#"></a>
          <a class="fas fa-link"></a>
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
        <div class="center" id="page-title">Blogs</div>
      </div>
    </div>
    <!--FILTER SECTION-->
    <div class="text-small" id="utility">
      <button class="btn-tag">announcement</button>
      <button class="btn-tag">project</button>
      <button class="btn-tag">review</button>
      <button class="btn-tag">personal</button>
      <button class="btn-tag">technology</button>
      <button class="btn-tag">coding</button>
      <button class="btn-tag">games</button>
      <button class="btn-tag">tv/movies</button>
    </div>
    <!--ARTICLE SECTION-->
    <div class="section" id="directory">
      <div class="content">
        <div class="flex-group">
          <?php

            $blog_data = DB::getAllBlogData();

            foreach ($blog_data as $article) {
              $post = new Article($article);
              $post->preview ();
            }

          ?>
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
