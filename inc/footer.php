<!--FOOTER SECTION-->
<footer class="section dark">
  <div class="content">
    <div class="subheading">Find me online</div>
    <div id="links">
      <a class="fab fa-github" href="https://github.com/leeandher"></a>
      <a class="far fa-envelope" href="mailto:me@leander.xyz"></a>
      <a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/leander-rodrigues"></a>
      <a class="fab fa-codepen" href="https://codepen.io/leeandher"></a>
      <a class="fab fa-free-code-camp" href="https://www.freecodecamp.org/leeandher"></a>
    </div>
    <div class="text-small" id="sitemap">
      <ul>
        <a href="/index.php">Home</a> |
        <a href="/projects/index.php">Projects</a> |
        <a href="/blog/index.php">Blog</a> |
        <a href="https://github.com/leeandher/programming-notes">Notes</a> |
        <a href="/resume/index.php">Resume</a>
      </ul>
    </div>
    <p class="text-small" style=""> Hand coded by: <span class="emphasis">yours truly</span> :)</p>
  </div>
</footer>


<!--SCRIPTS-->
<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Navigation Bar-->
<script src="/inc/js/navbar.js"></script>
<!--Page Specific-->
<?php
  echo '<script src="/resources/js/'.$pageName.'.js"></script>';
?>
