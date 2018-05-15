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
            <span class="emphasis">engineer</span>, and an aspiring
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
          <!--SELF-CODE BLOCK-->
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
            <pre>  <b>isPerfect</b>: false, <span>//Should never return true</span></pre>
            <pre>}</pre>
          </div>
          <!--DESCRIPTION-->
          <p>
          <code>Hello world</code>, my name is Leander Rodrigues and this is my landing page! I grew up in the suburbs of Mississauga ON, but left home in 2016, after my acceptance to the <em>University of Waterloo</em>. I'm in the second year/fourth term of my <em>Nanotechnology Engineering</em> degree and trying to balance those responsibilities with my obsession for computer programming. I am constantly on the look out for new languages, frameworks and libraries to experiment with and try to take on more projects to expand my horizon. Just for the record, since I started coding, JavaScript has definitely been my favourite language, even if it has <a href="http://blog.mgechev.com/2013/02/22/javascript-the-weird-parts/" target="_blank">it's ugly bits</a>.
          </p><br />
          <p>
          In my down time, you'll pretty much always catch me with headphones on, either listening to 24/7 background music (for coding), some podcasts I love (for idle time), or my friends screaming in my ears (for gaming). If I'm not going through a mountain of homework, working on a self-imposed project, or talking to my friends online, I'm probably asleep or dead.
        </p>
        </div>
        <div class="subheading">Experience with</div>
        <!--TECH ICONS-->
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
          <!-- NODE ICON, FOR WHEN I'M READY
          <a href="https://nodejs.org/en/" target="_blank">
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
        <!--CURRENT PROJECT-->
        <div class="card light round flex-item" id="curr-proj">
          <div class="subheading">Explore the MERN Tech Stack</div>
          <p class="text-small" id="curr-proj-summary">As of now, all of my projects have dealt almost entirely with client-side HTML5, CSS3, and JS, with whatever libraries I deemed appropriate. If I plan on developping more robust and functional web apps, I want to explore the MERN tech stack: <b>MongoDB</b>, <b>Express</b>, <b>React.js</b> and <b>Node.js</b>. This will be my first attempt with fullstack JavaScript, but I can already see the appeal in getting rid of PHP and MySQL from my experience developping this site. Regardless, I have a lot on my plate, but what's life without a big project or two.</p>
        </div>
        <div class="flex-group">
          <!--BLOG SECTION-->
          <div class="card light round flex-item">
            <div class="subheading">My Personal Blog</div>
            <p class="text-small" id="curr-blog-summary">In my opinion, I think everyone should find and claim their corner of the internet. Sure, you can make endless facebook posts, twitter updates and all the rest, but what's the harm in being custom? I decided that I wanted to have my own blog for posting to my heart's content on my own accord. I am by no means a professional writer, but I'd like to think I have some interesting stuff to say. While most of the updates are learning, code or progress related, I plan on adding some fun stuff in the near future. I mean, wouldn't you love to know what I thought of Infinity War? Anyway, the link below will take you to my blog page to get nice little snapshot of my life.</p>
            <a class="text-small light round" href="/blog/index.php">See my <b>Blog</b></a>
          </div>
          <!--NOTE SECTION-->
          <div class="card light round flex-item">
            <div class="subheading">My Online Notebook</div>
            <p class="text-small" id="curr-note-summary">It's easy to sit and watch tutorials for hours and think you  grasp a concept just because you've heard someone else explain it, but from my experience that's never true. Explaining something in your own words forces you to understand it, in order to articulate it properly. Whenever I feel as though something I'm learning something I'll need for future reference or maybe a difficult topic, I record notes in Markdown. These are made both for my own self-improvement, and anyone else looking for clear and concise explanations. Check out the link below to view all those sweet, simple notes.</p>
            <a class="text-small light round" target="_blank" href="https://github.com/leeandher/programming-notes">Read my <b>Notes</b></a>
          </div>
        </div>
      </div>
    </div>

    <!--CONTACT SECTION-->
    <div class="section light" id="contact">
      <div class="content">
        <div class="heading">Get in touch</div>
        <div class="flex-group">
          <!--CONTACT PREFACE-->
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
          <!--CONTACT FORM-->
          <form class="round flex-item" id="visitor-form" method="post" action="/redirect.php">
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

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>

  </body>

</html>
