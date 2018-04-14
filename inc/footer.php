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
        <a href="https://leander.xyz/index.php">Home</a> |
        <a href="https://leander.xyz/projects/index.php">Projects</a> |
        <a href="https://leander.xyz/blog/index.php">Blog</a> |
        <a href="https://leander.xyz/notes/index.php">Notes</a> |
        <a href="https://leander.xyz/resume/index.php">Resume</a>
      </ul>
    </div>
    <p class="text-small"> Hand coded by: <span class="emphasis">your's truly</span> :)</p>
  </div>
</footer>


<!--SCRIPTS-->  
<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Navbar-->
<script src="https://leander.xyz/inc/js/navbar.js"></script>
<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $scriptLink = '<script src="';
  $scriptLink .= $path;
  $scriptLink .= '/resources/js/';
  $scriptLink .= $pageName;
  $scriptLink .= '.js"></script>';
  echo $scriptLink; 
?>