<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Projects";
    $pageName = "projects";
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
        <div class="center" id="page-title">Projects</div>
      </div>
    </div>

    <!--PREFACE SECTION-->
    <div class="section light" id="preface">
      <div class="content">
        <div class="subheading">Intention</div>
        <p class="text-small">Welcome to my project dashboard! Here you can see a quick snapshot of each of my projects sorted from oldest to most recent ascending.</p>
        <p class="text-small">Just a heads up, keep in mind that as you get further away from the present, you will see more and more poor code structure, and practices, which I have left for evidence of growth. I still have a lot to learn and improve upon, even in my most recent work.</p>
        <p class="text-small">While I don't regret showcasing the outdated ugly, spaghetti code, I do remind you that it is not representative of my current abilites.</p>
      </div>
    </div>

    <!--DIRECTORY SECTION-->
    <div class="section light" id="directory">
      <div class="content">
        <div class="subheading">Directory</div>
        <div class="flex-group">
          <a class="text round flex-item" href="#proj-0"></a>
          <a class="text round flex-item" href="#proj-1"></a>
          <a class="text round flex-item" href="#proj-2"></a>
          <a class="text round flex-item" href="#proj-3"></a>
          <a class="text round flex-item" href="#proj-4"></a>
          <a class="text round flex-item" href="#proj-5"></a>
          <a class="text round flex-item" href="#proj-6"></a>
          <a class="text round flex-item" href="#proj-7"></a>
        </div>
      </div>
    </div>

    <!--PROJECT SECTION-->
    <div class="proj-panel" id="proj-0">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-1">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-2">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-3">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-4">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-5">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-6">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="proj-panel" id="proj-7">
      <div class="proj-bg"></div>
      <div class="content">
        <div class="proj-info">
          <div class="proj-title"></div>
          <div class="proj-date"></div>
          <div class="proj-desc"></div>
          <div class="proj-usage">
            <p class="languages"></p>
            <p class="additional"></p>
            <p class="concepts"></p>
          </div>
          <div class="proj-link-holder">
            <a class="proj-link live fas fa-link" target="_blank" title="Live Link"></a>
            <a class="proj-link source fab fa-github" target="_blank" title="Source Code"></a>
            <a class="proj-link fas fa-chevron-up" href="#directory" title="Back to Directory"></a>
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
