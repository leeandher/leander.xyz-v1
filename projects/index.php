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
        <p class="text-small">Welcome to my project dashboard! Here you can see an archive of all the programming projects that I've completed. They're sorted by newest to oldest descending.</p>
        <p class="text-small">These projects are all functional, but some may have poorer, uglier code than others. This is just so that in the long run, I have concrete evidence of my growth as a programmer and I can look back on some of the source code and cringe in the future. Even now, I still have a lot to improve upon, but I guess I'm just going through my 'awkward teenage years' in my coding career.</p>
        <p class="text-small">If you want to get a feel for my coding style, the most recent projects, and this site's source code, are far more representative than anything else. Both live demo links and source code are available for each project. Other than that, take a look, laugh a bit (hopefully), and <a style="text-decoration: underline var(--accent)" href="../index.php#contact">send me some feedback</a> if you notice something I could improve!</p>
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
