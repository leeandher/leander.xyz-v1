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
      if (isset($_GET['viewNote'])) {
          $title = $_GET['viewNote'];
          $note_data = DB::getNoteData($title);
          if (!$note_data) header('Location: .');
          $note_post = new Note($note_data);
    ?>
    <!--TITLE SECTION-->
    <div class="section dark" id="post-head"
      <div class="content">
        <div id="post-quote"><?php echo $note_data['category']; ?></div>
      </div>
    </div>

    <!--RETURN SECTION-->
    <a class="text-small light" id="page-return" href="."><i class="fas fa-arrow-left"></i> Back to Archive</a>

    <!--POST SECTION-->
    <div class="section" id="post-content">
      <div class="content light">
        <div id="post-share">
          <?php

            $note_post->createShareLinks ();

          ?>
        </div>
        <?php

          $note_post->viewNote ();

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
          <?php

            $note_all_data = DB::getAllNoteData();

            foreach ($note_all_data as $single_note) {
              $post = new Note($single_note);
              $post->preview ();
            }

          ?>
          <<a class="note light round" id="note-1" href="#">
            <div class="title">React</div>
            <ul>
              <li>boaskdfioaa</li>
              <li>dfasdf</li>
              <li>asdfasd</li>
              <li>asdfads</li>
            </ul>
          </a> -->
        </div>
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.19/marked.min.js"></script> -->

    <script src="/resources/js/post.js"></script>

  </body>

</html>
