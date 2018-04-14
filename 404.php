<!DOCTYPE html>
<html> 
  
<?php
  $pageTitle = "Welcome!";
  $pageName = "home";
  require_once "/inc/header.php";
?>
  
  
<body>
  <!--NAVIGATION-->
  <?php require_once "/inc/navbar.html"; ?>
  
<!--TITLE SECTION-->
<div class="section light" id="error">
  <div class="content">
    <div class="center dark">
      <div id="code">404</div>
      <div class="text" id="response">
        <p id="reponse"> Sorry! That page was moved, removed, renamed, or might never have existed.</p><br />
        <a href="index.html" class="round"><i class="fas fa-arrow-left"></i> Home</a>
      </div>
    </div>
  </div>
</div>

  
<!--FOOTER--> 
<footer class="section dark">
  <div class="content">
    <div class="subheading">Find me online</div>
    <div id="links">
      <a class="fab fa-github" href="https://github.com/leeandher"></a>
      <a class="far fa-envelope" href="mailto:leander.rodrigues@uwaterloo.ca"></a>
      <a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/leander-rodrigues"></a>
      <a class="fab fa-codepen" href="https://codepen.io/leeandher"></a>
      <a class="fab fa-free-code-camp" href="https://www.freecodecamp.org/leeandher"></a>
    </div>
    <div class="text-small" id="sitemap">
      <ul>
        <a href="index.html">Home</a> |
        <a href="projects/index.html">Projects</a> |
        <a href="blog/index.html">Blog</a> |
        <a href="notes/index.html">Notes</a> |
        <a href="resume/index.html">Resume</a>
      </ul>
    </div>
    <p class="text-small"> Hand coded by: <span class="emphasis">your's truly</span> :)</p>
  </div>
</footer>
  
<!--SCRIPTS-->  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/template.js"></script>
<script src="../js/error.js"></script>
  
</body>
  
</html>