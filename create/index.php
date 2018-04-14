<!DOCTYPE html>
<html> 
    
<head>
  <!--TITLE-->
  <title>Create - Leander Rodrigues</title>
  <!--META-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--STYLESHEETS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/template.processed.css">
  <link rel="stylesheet" type="text/css" href="../css/create.processed.css">
  <!--FAVICON SETTINGS-->
  <!--<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">-->
  <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
  <!--<link rel="manifest" href="favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#FFFFFF">-->
</head>
  
  
<body>  
  
<!--NAVIGATION MENU-->  
<nav>
  <ul>
    <li id="logo">
      <a href="../index.html#home">
        <img src="../images/logo.png" alt="My Logo"/>
      </a>
      <div id="toggler">
        <div id="holder">
          <div class="bar" id="bar-1"></div>
          <div class="bar" id="bar-2"></div>
          <div class="bar" id="bar-3"></div>
        </div>
      </div>
    </li>
    <div id="collapse-nav">
      <a href="../index.html#home"><li class="nav-link">Home</li></a>
      <a href="../index.html#about"><li class="nav-link">About</li></a>
      <a href="../index.html#projects"><li class="nav-link">Projects</li></a>
      <a href="../index.html#media"><li class="nav-link">Media</li></a>
      <a href="../index.html#contact"><li class="nav-link">Contact</li></a>
      <a href="../resume/index.html" class="round" id="hire"><li class="nav-link">Hire Me</li></a>
    </div>
  </ul>
</nav>
  
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
        <a href="/index.html">Home</a> |
        <a href="/projects/index.html">Projects</a> |
        <a href="/blog/index.html">Blog</a> |
        <a href="/notes/index.html">Notes</a> |
        <a href="/resume/index.html">Resume</a>
      </ul>
    </div>
    <p class="text-small"> Hand coded by: <span class="emphasis">your's truly</span> :)</p>
  </div>
</footer>
  
<!--SCRIPTS-->  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/template.js"></script>
  
</body>
  
</html>