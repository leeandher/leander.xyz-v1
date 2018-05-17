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
          <code>Hello world</code>, my name is Leander Rodrigues and you've stumbled upon my landing page, so welcome! Take your time to peruse my work and stay a while. So a little bit about me, I'm currently enrolled at the <em>University of Waterloo</em>, but I grew up in suburbs of Mississauga, Ontario. I was accepted into this newfangled program, made for only the coolest of cats: <em>Nanotechnology Engineering</em>. It seemed like an obvious choice for someone like yours truly, since it sounds fancy, and I wanted to work with the latest and greatest in tech. As time goes by (I'm finishing up my second year!), it has definitely gone more towards the 'nano' and less towards the 'technology', so I figured now would be a good a time as any to pivot.</p><br />
          <p>This site, and all its shiny buttons, animations, and links are a testament to my efforts to <em>break into the programmer scene</em>. My determination coupled with countless online resources has let me do some really cool stuff that I'd love for you (whoever you may be) to see (because it'll only grow my massive ego). While my education background is anything but <em> traditional</em>, I choose to embrace that weirdness, and redirect it into my work.</p>
          </p><br />
          <p>On the lighter side, I'm a pretty cool guy (if I do say so myself) outside of work. In my down time, you'll pretty much always catch me with headphones on. I'm either listening to tunez (mandatory letter  'z'), podcasts, or my friends scream at me in Discord. If you need someone to game with, someone to rip into bad movies with, or just someone to explain why dogs > cats, I'm definitely your guy. Aside from thaat, i f I'm not going through a mountain of homework, working on a self-imposed project, or talking to/arguing with my friends online, It's pretty safe to say I'm asleep or dead.</p>
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
          <a href="https://reactjs.org/" target="_blank">
            <img class="round" src="/resources/images/about/reactjs.png" alt="React.js Logo"/>
          </a>
          <a href="https://git-scm.com/" target="_blank">
            <img class="round" src="/resources/images/about/git.png" alt="Git Logo"/>
          </a>
          <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX" target="_blank">
            <img class="round" src="/resources/images/about/ajax.png" alt="AJAX Logo"/>
          </a>
          <a href="http://www.php.net/" target="_blank">
            <img class="round" src="/resources/images/about/php.png" alt="PHP Logo"/>
          </a>
          <a href="https://getbootstrap.com/" target="_blank">
            <img class="round" src="/resources/images/about/bootstrap4.png" alt="Bootstrap Logo"/>
          </a>
          <!-- NODE ICON, FOR WHEN I'M READY
          <a href="https://nodejs.org/en/" target="_blank">
            <img class="round" src="https://leander.xyz/resources/images/about/nodejs.png" alt="Node.js Logo"/>
          </a>-->
          <a href="https://jquery.com/" target="_blank">
            <img class="round" src="/resources/images/about/jquery.png" alt="JQuery Logo"/>
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
          <p class="text-small" id="curr-proj-summary">So far, most of my web app projects are exclusively client-side (HTML, CSS, JS), with help from some open-source libraries. If I plan on developing more robust, complicated, and fancy web apps, I want to try exploring the MERN tech stack: <b>MongoDB</b>, <b>Express</b>, <b>React.js</b> and <b>Node.js</b>. This will be my first attempt with fullstack JavaScript, but from designing this site, I can already see the appeal in replacing PHP and MySQL. Regardless, I have a lot on my plate, but what's life without a big project or two?</p>
        </div>
        <div class="flex-group">
          <!--BLOG SECTION-->
          <div class="card light round flex-item">
            <div class="subheading">My Personal Blog</div>
            <p class="text-small" id="curr-blog-summary">In my opinion, I think everyone should claim their personal little corner of the internet. Sure, you can make some facebook posts, twitter updates, and snapchat stories that no one will remember, but what's the harm in being unique? I decided that if I wanted to publish my thoughts, I was going to do it in the most 'me' way possible: a custom blog. I am by no means a professional writer (yet), but I'd like to think I have some interesting stuff to say. So far, most of the updates are programming/project related, but I plan on adding some fun stuff in the near future! I mean, who wouldn't want to hear videogame and movie reviews from some random college kid on the internet? Anyway, the link below will take you to my blog page to get nice little snapshot of my life.</p>
            <a class="text-small light round" href="/blog/index.php">See my <b>Blog</b></a>
          </div>
          <!--NOTE SECTION-->
          <div class="card light round flex-item">
            <div class="subheading">My Online Notebook</div>
            <p class="text-small" id="curr-note-summary">From my experience, watching tutorials or reading through someone else's code to try and learn something usually backfires. I sit there, watching a smart guy explain his smart thing, and my monkey brain thinks 'Oh, so it's THAT easy', before I stare blankly at a text-editor for an hour. Instead, I've decided to force myself to <em>really understand</em> what I watch/read by writing some Notes (in Markdown). If I think something is difficult, or just critically important, I try to <em> make a note of it </em> (hehe). There's not much in terms of broad topics right now, but I plan on writing some more in the near future. These notes are written casually and mainly directed towards beginners, but hey, I don't judge. The link below will take you to my GitHub repository for all those sweet, simple, notes.</p>
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
