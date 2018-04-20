<?php
  require '../../etc/classes/DB.php';
?>
<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Blog";
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
            $con = DB::getConnection();
            $sql = 'SELECT * FROM Blogs ORDER BY Date DESC';
            foreach ($con->query($sql) as $key => $article) {
                echo '<a class="media light round" id="article-'.$key,'" href="post/index.html">';
                echo '<div class="title">'.$article['Title'].'</div>';
                echo '<div class="date text">'.$article['Date'].'</div>';
                echo '<div class="summary text-small">'.strip_tags(substr($article['Markup'],0,350)).'...</div><div class="tags text-small">';
                foreach (explode(' ',$article['Tags']) as $tag) {
                  echo '<span class="round">'.$tag.'</span>';
                }
                echo '</div></a>';
            }
          ?><!--
          <a class="media light round" id="article-1" href="post/index.html">
            <div class="title">1 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span class="round">review</span>
              <span class="round">games</span>
              <span class="round">coding</span>
            </div>
          </a>
          <a class="media light round" id="article-2" href="#">
            <div class="title">2 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span class="round">review</span>
              <span class="round">personal</span>
              <span class="round">tv/movies</span>
            </div>
          </a>
          <a class="media light round" id="article-3" href="#">
            <div class="title">3 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span class="round">games</span>
              <span class="round">announcement</span>
              <span class="round">coding</span>
            </div>
          </a>
          <a class="media light round" id="article-4" href="#">
            <div class="title">4 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span class="round">coding</span>
              <span class="round">tv/movies</span>
              <span class="round">project</span>
            </div>
          </a>
          <a class="media light round" id="article-5" href="#">
            <div class="title">5 Lorem ipsum dolor sit amet</div>
            <div class="date text">Lorem ipsum</div>
            <div class="summary text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel fermentum lectus, molestie finibus orci. Integer tristique nunc augue, pharetra interdum nunc mollis rhoncus. Nunc sed eleifend quam, non pharetra ante. Curabitur nec tincidunt arcu. In sit amet turpis sit amet augue consectetur scelerisque. Vivamus convallis sapien sed mauris placerat, at tincidunt odio pellentesque. Vestibulum eleifend sit amet felis ut semper. Vestibulum commodo pulvinar molestie. Mauris tempus convallis quam id faucibus. Duis a porttitor nibh.</div>
            <div class="tags text-small">
              <span class="round">games</span>
              <span class="round">personal</span>
            </div>
          </a>-->
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
