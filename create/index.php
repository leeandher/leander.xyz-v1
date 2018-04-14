<!DOCTYPE html>
<html>

  <?php 
    $pageTitle = "Create"; 
    $pageName = "home"; 
    require_once "/inc/header.php"; 
  ?>

  <body>
    <!--NAVIGATION-->
    <?php require_once "/inc/navbar.html"; ?>

    <!--TITLE SECTION-->
    <div class="section dark" id="head">
      <div class="content">
        <div class="center" id="page-title">Writing</div>
      </div>
    </div>

    <!--WRITE SECTION-->
    <div class="section" id="publish">
      <div class="content">
        <form class="round">
          <label class="text" for="title">Title:</label>
          <input type="text" name="title" id="title" required>
          <label class="text" for="date">Date:</label>
          <input type="date" name="date" id="date" required>
          <label class="text" for="markup">Markup:</label>
          <textarea rows="20" type="text" name="markup" id="markup" required></textarea>
          <label class="text" for="tags">Tags: <span>(seperated by spaces)<br/><b>Blog tags:</b> announcement, project, review, personal, technology, coding, games, tv/movies<br/><b>Note tags:</b> concepts, reference, tricks, html, css, javascript, react</span></label>
          <input type="text" name="tags" id="tags" required>
          <div class="flex-group">
            <button class="flex-item" type='submit'>Publish Blog</button>
            <button class="flex-item" type=''>Download</button>
            <button class="flex-item" type='submit'>Publish Note</button>
          </div>
        </form>
      </div>
    </div>

    <!--FOOTER SECTION-->
    <?php require_once "/inc/footer.php"; ?>

  </body>

</html>
