<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Welcome!";
    $pageName = "home";
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

    <!--HOME SECTION-->
    <div class="section dark" id="home">
      <div class="content">
        <div class="center" id="title">
          Hi, my name is<br />
          <span class="emphasis" id="name">Leander Rodrigues</span>.
          <div id="subtitle">
            I'm an undergrad
            <span class="emphasis">engineer</span>, and aspiring
            <span class="emphasis">programmer</span>.
          </div>
        </div>
      </div>
    </div>

    <!--ABOUT ME SECTION-->
    <div class="section light" id="about">
      <div class="content">
        <div class="heading">A little bit about me</div>
        <div class="text" id="description-group">
          <div class="round" id="self-object">
            <pre>var <b>leander</b> = {</pre>
            <pre>  <b>age</b>: 19, <span>//Soon to be 20!</span></pre>
            <pre>  <b>school</b>: 'University of Waterloo',</pre>
            <pre>  <b>program</b>: 'Nanotechnology Engineering',</pre>
            <pre>  <b>currentSchoolTerm</b>: 4, <span>//2B - second year, second term</span>  </pre>
            <pre>  <b>awaitingWorkTerm</b>: 3, <span>//Completed two 4-month terms</span></pre>
            <pre>  <b>awaitingWorkTermLength</b>: 8 || 4, <span>//4 or 8 months</span></pre>
            <pre>  <b>hardWorker</b>: true,</pre>
            <pre>  <b>teamPlayer</b>: true,</pre>
            <pre>  <b>isPerfect</b>: false, <span>//Should never be true</span></pre>
            <pre>}</pre>
          </div>
          <p>
          <code>Hello world</code>, my name is Leander Rodrigues and this is my landing page! I grew up in the suburbs of Mississauga ON, but left home in 2016, after my acceptance to the <em>University of Waterloo</em>. I'm in the second year/fourth term of my <em>Nanotechnology Engineering</em> degree and trying to balance those responsibilities with my obsession for computer programming. I am constantly on the look out for new languages, frameworks and libraries to experiment with and try to take on more projects to expand my horizon. Just for the record, since I started coding, JavaScript has definitely been my favourite language, even if it has <a href="http://blog.mgechev.com/2013/02/22/javascript-the-weird-parts/" target="_blank">it's ugly bits</a>.
          </p><br />
          <p> 
          In my down time, you'll pretty much always catch me with headphones on, either listening to 24/7 background music (for coding), some podcasts I love (for idle time), or my friends screaming in my ears (for gaming). If I'm not going through a mountain of homework, working on a self-imposed project, or talking to my friends online, I'm probably asleep or dead.
          </p>
        </div>
        <div class="subheading">Experience with</div>
        <div class="text" id="img-group">
          <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">
            <img class="round" src="/resources/images/about/html5.png" alt="HTML5 Logo"/>
          </a>
          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">
            <img class="round" src="/resources/images/about/css3.png" alt="CSS3 Logo"/>
          </a>
          <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
            <img class="round" src="/resources/images/about/javascript.png" alt="JavaScript Logo"/>
          </a>
          <a href="https://getbootstrap.com/" target="_blank">
            <img class="round" src="/resources/images/about/bootstrap4.png" alt="Bootstrap Logo"/>
          </a>
          <a href="http://www.php.net/" target="_blank">
            <img class="round" src="/resources/images/about/php.png" alt="PHP Logo"/>
          </a>
          <!--<a href="https://nodejs.org/en/" target="_blank">
            <img class="round" src="https://leander.xyz/resources/images/about/nodejs.png" alt="Node.js Logo"/>
          </a>-->
          <a href="https://reactjs.org/" target="_blank">
            <img class="round" src="/resources/images/about/reactjs.png" alt="ReactJS Logo"/>
          </a>
          <a href="https://jquery.com/" target="_blank">
            <img class="round" src="/resources/images/about/jquery.png" alt="JQuery Logo"/>
          </a>
          <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX" target="_blank">
            <img class="round" src="/resources/images/about/ajax.png" alt="AJAX Logo"/>
          </a>
          <a href="https://docs.microsoft.com/en-us/sql/" target="_blank">
            <img class="round" src="/resources/images/about/sql.png" alt="SQL Logo"/>
          </a>
          <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/getting-started/" target="_blank">
            <img class="round" src="/resources/images/about/visual-basic.png" alt="VB Logo"/>
          </a><br />
          <a href="/projects/index.php" id="and-more">and more!</a>
        </div>
      </div>
    </div>

    <!--PROJECT SECTION-->
    <div class="section dark" id="projects">
      <div class="bg"></div>
      <div class="content">
        <div class="center">
          <div class="heading">My digital showcase</div>
          <a class="round" href="/projects/index.php">Take a look</a>
        </div>
      </div>
    </div>

    <!--MEDIA SECTION-->
    <div class="section dark" id="media">
      <div class="content">
        <div class="heading">Some recent happenings</div>
        <div class="flex-group">
          <div class="card light round flex-item" id="curr-proj">
            <div class="subheading">Get this site up and running</div>
            <p class="text-small" id="curr-proj-summary">While I have plenty of front-end style projects that involve making webpages and webapps, getting this site fully functional and secure is my first <b>backend dev</b> project. I want to figure out how mail servers, PHP scripts, and MySQL databases work together. I guess I'm my own full stack developer, and it's hard, but I've never been one to back down from a challenge!</p>
          </div>
        </div>
        <div class="flex-group">
          <div class="card light round flex-item" id="curr-blog">
            <div class="subheading">My Latest Blog Post</div>
            <p class="text-small" id="curr-blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <a class="text-small light round" href="/blog/index.php">See my <b>Blog</b></a>
          </div>
          <div class="card light round flex-item" id="curr-note">
            <div class="subheading">My Latest Note</div>
            <p class="text-small" id="curr-note-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <a class="text-small light round" href="/notes/index.php">See my <b>Notes</b></a>
          </div>
        </div>
      </div>
    </div>

    <!--CONTACT SECTION-->
    <div class="section light" id="contact">
      <div class="content">
        <div class="heading">Get in touch</div>
        <div class="flex-group">
          <div class="text-small flex-item" id="visitor-info">
            <p class="indent">If you'd like to get in touch, ask questions, or even just say hello, please feel free to fill out the form and I'll be sure to reach out.</p><br/>
            <p class="indent">If you've noticed anything about the site or a project, which I could improve upon, please help me become a better programmer by forwarding that info along as well (tips, advice, recommendations, resources)!</p><br/>
            <h3>Are you hiring?</h3><br/>
            <p class="indent">In case you'd like to know a little more about me, check out my resume! It's a nice way to see all of my school/project experience and work history in one convenient place. As per your preference, I have both a direct PDF link and you can check out my hiring page for a web version and even more information!</p>
            <div>
              <a class='far fa-file-alt' href='/resume/Leander Rodrigues - Resume.pdf' title=".pdf (0.14 MB)"></a>
              <a class='fas fa-link' href='/resume/index.php' title="Web Page"></a>
            </div>
            <h4>Thank you for your consideration!</h4>
          </div>
          <form class="round flex-item" id="visitor-form" method="post" action="/sendForm.php">
            <div class="subheading">I'll get back to you ASAP.</div>
            <label class="text" for="visitor-name">Name:</label>
            <input type="text" name="sender" id="visitor-name" autocomplete="name" required>
            <label class="text" for="visitor-email">Email address:</label>
            <input type="email" name="email" id="visitor-email" autocomplete="email" required>
            <label class="text" for="visitor-sub">Subject:</label>
            <input type="text" name="subject" id="visitor-sub" required>
            <label class="text" for="visitor-msg">Message:</label>
            <textarea rows="5" type="text" name="message" id="visitor-msg" required></textarea>
            <div class="flex-group">
              <button class="flex-item" type='reset'>Clear</button>
              <button class="flex-item" type='submit'>Send</button>
            </div>
          </form>
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
