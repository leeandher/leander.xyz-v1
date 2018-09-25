<!DOCTYPE html>
<html>

  <?php
    $pageTitle = "Resume";
    $pageName = "resume";
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
        <div class="center" id="page-title">Resume</div>
      </div>
    </div>

    <!--SUMMARY SECTION-->
    <div class="section dark" id="preface">
      <div class="content">
        <p class="text-small"> Welcome to my resume page! To navigate, click any header to see the information inside. There is also a summarized, printable, <a class="emphasis" href="Leander Rodrigues - Resume.pdf" target="_blank">PDF version available here</a>. If you have any questions, comments or just like what you see, be sure to let me know through <a class="emphasis" href="../#home">my contact form</a>.</p>
      </div>
    </div>
    <div class="section resume-area" id="summary">
      <div class="fold-head light">
        <div class="wrap">Summary of Qualifications</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small flex-group">
          <div class="flex-item" id="prog-qual">
            <h2>Language Overview</h2>
            <b>Proficient with:</b>
            <ul>
              <li>HTML <em class="small">(Haml, HTML5)</em></li>
              <li>CSS <em class="small">(Bootstrap, Keyframes, Responsiveness)</em></li>
              <li>JavaScript <em class="small">(ES6, AJAX, jQuery, Babel)</em></li>
              <li>React.js <em class="small">(Redux, Data Visualization)</em></li>
              <li>Node.js <em class="small">(NPM, Firebase Authentication)</em></li>
              <li>PHP <em class="small">(OOP, phpMyAdmin)</em></li>
              <li>SQL <em class="small">(MS Access, MySQL, PHP Injection)</em></li>
              <li>Git <em class="small">(CLI, Bash, GitHub)</em></li>
            </ul>
            <b>Academic Experience with:</b>
            <ul>
              <li>Matlab <em class="small">(Data Visualization, ODEs/PDEs)</em></li>
              <li>Python <em class="small">(NumPy, Automation, Algorithm Logic)</em></li>
              <li>Java <em class="small">(OOP. Scope, Structure/Practices)</em></li>
            </ul>
            <b>Ongoing Learning:</b>
            <ul>
              <li>AWS/Docker <em class="small">(Backend Infrastructure)</em></li>
              <li>Express.js <em class="small">(Implementing with Node.js)</em></li>
              <li>MongoDB <em class="small">(For Modern, Scalable DBs)</em></li>
            </ul>
          </div>
          <div class="flex-item" id="soft-qual">
            <h2>Notable Qualifications</h2>
            <ul>
              <li>Well-versed in <b>writing clear documentation</b></li>
              <li>Committed, self-taught <b>full-stack developer</b> with an unconventional, but foundational <b>engineering background</b></li>
              <li>Energetic hard-worker with <b>diverse history</b> in industry</li>
              <li>Inquisitve and <b>perpetual student</b>, focusing free-time towards fully-functional, impressive <b>side-projects</b></li>
              <li>Fluent in <b>French</b>, both written and oral</li>
              <li>Extensive charity work experience with all ages and abilities</li>
              <li>I'm completely willing to learn new something specific that I'm missing, to become a better candidate. If there's something you wish I knew, <a href="../#contact" class="emphasis">send me a message</a> and I'll start reading!</li>
            </ul>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--INTENTION SECTION-->
    <div class="section resume-area" id="intention">
      <div class="fold-head light">
        <div class="wrap">Intention</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="resume-item">
            <div class="item-desc">
              <p class="indent">I'm an engineering student, making an effort to break into the programming world. <b>My drive to learn new, difficult technologies, motivates me to ask questions, take on more projects, and challenge myself to try things often outside of my comfort zone.</b> So far, this dedication has given me a functional site, and many proud projects/achievements to share with you, but regardless, the future is brighter.</p>
              <br />
              <p class="major">Given the opportunity to work with your company, I intend to prove myself by way of results, enthusiasm and hard work.</p></div>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--EDUCATION SECTION-->
    <div class="section resume-area" id="education">
      <div class="fold-head light">
        <div class="wrap">Education</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="subtitle"><span>Degrees</span></div>
          <div class="resume-item">
            <h2>Nanotechnology Engineering</h2>
            <div class="item-location"><a href="https://uwaterloo.ca/" target="_blank">University of Waterloo - Waterloo, ON</a></div>
            <div class="item-date emphasis">Sep 2016 - Present</div>
            <div class="item-desc indent"> Currently a candidate for a B.A.Sc. Honors Nanotechnology Engineering at the University of Waterloo. My program gives me the opportunity to work with/study the latest and greatest in tech, research and science, while learning the fundamentals of engineering. </div>
          </div>
          <div class="subtitle"><span>Online Courses</span></div>
          <div class="flex-group">
            <!--FCC Front End-->
            <div class="resume-item flex-item">
              <h2>Front End Development Certification</h2>
              <div class="item-location"><a href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp.org</a></div>
              <div class="item-date emphasis">Jan 2018 - Mar 2018</div>
              <div class="item-desc indent"> During my free time of my second coop term, I decided that I wanted to get back into the programming world, and searched for some good courses/resources online. About 2.5 months later, I'd completed a series of projects/challengs in this intensive course covering the basics of web development.</div>
            </div>
            <!--React For Beginners-->
            <div class="resume-item flex-item">
              <h2>React For Beginners</h2>
              <div class="item-location"><a href="https://reactforbeginners.com/" target="_blank">ReactForBeginners.com</a></div>
              <div class="item-date emphasis">Ongoing</div>
              <div class="item-desc indent">A deep-dive project-driven React development course taught by Wes Bos. It covers everything from ES6, to Webpack, and even Firebase Authentication. Without dependecies on any React Libraries the course culminates in a full-blown real-time application focusing on simplicity and readability. </div>
            </div>
            <!--Learn Node-->
            <div class="resume-item flex-item">
              <h2>Learn Node</h2>
              <div class="item-location"><a href="https://learnnode.com/" target="_blank">LearnNode.com</a></div>
              <div class="item-date emphasis">Ongoing</div>
              <div class="item-desc indent">This course explores the professional, modern use cases for Node.js, specifically, using Express.js and MongoDB. In the curriculum, a full-blown real-world application is developed with search, geolocation, review and curation capabalities!</div>
            </div>
            <!--JS 30-->
            <div class="resume-item flex-item">
              <h2>JavaScript 30</h2>
              <div class="item-location"><a href="https://javascript30.com/" target="_blank">JavaScript30.com</a></div>
              <div class="item-date emphasis">Aug 2018 - Present</div>
              <div class="item-desc indent">A 30 day JavaScript challenge course which focuses on making the most of your pure JS. The code for each challenge does not depend on libraries, frameworks, compilers or boiler plates, just you and your JavaScript abilities. it's a self-paced course but I'm currently trying to complete 1 challenge (minimum) every 2 days, simply because of school/other courses.</div>
            </div>
            <!--FCC Data Viz
            <div class="resume-item flex-item">
              <h2>Data Visualization Certification</h2>
              <div class="item-location"><a href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp.org</a></div>
              <div class="item-date emphasis">May 2018 - Present</div>
              <div class="item-desc indent"> Another intensive FCC course which covers manipulating data, and implementing more complicated user interfaces. It focuses less so on things like web pages, and templates, and more on web apps and components using SASS, D3 and React.js!</div>
            </div>-->
            <!--Codecademy React-->
            <div class="resume-item flex-item">
              <h2>Learn React.js Course</h2>
              <div class="item-location"><a href="https://www.codecademy.com" target="_blank">Codecademy.com</a></div>
              <div class="item-date emphasis">Apr 2018</div>
              <div class="item-desc indent"> An introductory course to using ReactJS which was basic in nature, but coupled with a few textbooks and an online bootcamp, solidified my understanding of the lightweight JavaScript framework.</div>
            </div>
            <!--Udemy TWDC-->
            <div class="resume-item flex-item">
              <h2>The Complete Web Developer Course</h2>
              <div class="item-location"><a href="https://www.udemy.com/thecompletewebdeveloper/" target="_blank">Udemy.com</a></div>
              <div class="item-date emphasis">Apr 2018</div>
              <div class="item-desc indent"> A well-rounded web developer course which I mainly used as a resource for PHP, MySQL and phpMyAdmin usage tutorials. Using what I learned from this site I was able to configure the back-end for this very site while maintaining good PDO structure, and a secure database/login system. </div>
            </div>
            <!--React Bootcamp-->
            <div class="resume-item flex-item">
              <h2>React.js Bootcamp</h2>
              <div class="item-location"><a href="https://www.youtube.com/watch?v=8GXXGJRDMdQ&list=PLqrUy7kON1mfWjiu0GWQhefWSx38v0UGo" target="_blank">YouTube - TylerMcGinnis.com</a></div>
              <div class="item-date emphasis">Apr 2018</div>
              <div class="item-desc indent">A promotional livestreamed React bootcamp that was held on YouTube walking viewers through a series of concepts, lectures and challenges having to do with React.js. It was taught by Tyler McGiniss, professional instructor and Google Developer Expert.</div>
            </div>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--WORK EXPERIENCE SECTION-->
    <div class="section resume-area" id="work-exp">
      <div class="fold-head light">
        <div class="wrap">Work Experience</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="resume-item">
            <h2>Advanced App Engineering Senior Analyst</h2>
            <div class="item-location"><a href="https://www.accenture.com/" target="_blank">Accenture - Toronto, ON</a></div>
            <div class="item-date emphasis">Currently!</div>
            <ul class="item-list">
              <li><b>Deployed reusable components in React.js</b> through peer programming and test-driven development</li>
              <li><b>Designed client-facing widgets</b> for Virtual Agents to satisfy dynamic, natural language use cases</li>
              <li><b>Received certified, formal training</b> in DevOps, Agile Development and Design Thinking</li>
            </ul>
            <div class="item-desc"><span class="emphasis">Skills Improved: </span>ES6 JavaScript, React.js, Node.js, DynamoDB, AWS Lambda</div>
          </div>
          <hr />
          <div class="resume-item">
            <h2>Data Analysis and Process Automation</h2>
            <div class="item-location"><a href="https://www.curtisswrightds.com/" target="_blank">Curtiss Wright Defense Solutions - Ottawa, ON</a></div>
            <div class="item-date emphasis">Jan 2018 - Apr 2018</div>
            <ul class="item-list">
              <li><b>Automated daily report process</b> to provide up-to-date spreadsheets/data for upper management</li>
              <li><b>Revised legacy scripts</b> to provide new functionality and more reliable data sources</li>
              <li><b>Completed full system documentation</b> for automation architecture in the form of docs and flowcharts</li>
              <li><b>Troubleshot automation errors</b> in legacy macros and daily reports, recording solutions for future reference</li>
            </ul>
            <div class="item-desc"><span class="emphasis">Skills Improved: </span>MS Excel, VBA, MS Access, SQL, Command Line, SAP</div>
          </div>
          <hr />
          <div class="resume-item">
            <h2>Manufacturing and Process Engineering Student</h2>
            <div class="item-location"><a href="http://www.mother-parkers.com/" target="_blank">Mother Parker's Tea & Coffee Plant - Mississauga, ON</a></div>
            <div class="item-date emphasis">Jun 2017 - Sep 2017</div>
            <ul class="item-list">
              <li><b>Created standard operating procedures</b> for equipment maintenance, and a detailed error log to reduce future downtime</li>
              <li><b>Oversaw maintenance issues</b> and operation times of the production line equipment</li>
              <li><b>Compiled weekly efficiency reports</b> and statistical summaries of machine productivity</li>
              <li><b>Presented findings and analytics</b> to upper management to identify weak areas for economic improvement</li>
            </ul>
            <div class="item-desc"><span class="emphasis">Skills Improved: </span>MS Excel, MS Access, MS Visio, VBA, Presentation Skills</div>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--PROJECTS SECTION-->
    <div class="section resume-area" id="projects">
      <div class="fold-head light">
        <div class="wrap">Projects</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="resume-item">
            <div class="subtitle"><span class="light">My Top Picks</span></div>
            <div class="thumbnail-wrapper">
              <a href="../projects/index.php#proj-0" target="_blank"><img src="../resources/images/projects/thumbnails/tictactoe_thumb.JPG" alt="Tic Tac Toe Thumbnail"/></a>
              <a href="../projects/index.php#proj-3" target="_blank"><img src="../resources/images/projects/thumbnails/calculator_thumb.JPG" alt="JavaScript Calculator Thumbnail"/></a>
              <a href="../projects/index.php#proj-6" target="_blank"><img src="../resources/images/projects/thumbnails/wikiview_thumb.JPG" alt="Wikipedia Viewer Thumbnail"/></a>
              <a class="hide-on-resize" href="../projects/index.php#proj-1" target="_blank"><img src="../resources/images/projects/thumbnails/simon_thumb.JPG" alt="Simon Game Thumbnail"/></a>
              <a class="hide-on-resize" href="../projects/index.php#proj-4" target="_blank"><img src="../resources/images/projects/thumbnails/liveontwitch_thumb.JPG" alt="Twitch.tv Stream Client Thumbnail"/></a>
              <a class="hide-on-resize" href="../projects/index.php#proj-2" target="_blank"><img src="../resources/images/projects/thumbnails/fuelgauge_thumb.JPG" alt="Pomodoro Clock Thumbnail"/></a>
            </div>
            <div class="subtitle"><span class="light"><i><a href="../projects/index.php" target="_blank">See More</a></i></span></div>
            <div class="item-desc">Over at <a href="../projects" class="emphasis">Projects</a>, you can see links to live demo projects, and the source code, however, if we're going to get meta, this whole site is another one of my side projects. I love hearing feedback, so feel free to tell me what you think by heading over to my <a href="../#contact" class="emphasis">Contact</a> section!</div>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--VOLUNTEER SECTION-->
    <div class="section resume-area" id="volunteer">
      <div class="fold-head light">
        <div class="wrap">Volunteering</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="resume-item">
            <h2>Builder/Painter for Project Outreach </h2>
            <div class="item-location"><a href="https://livedifferent.com/" target="_blank">Live Different - Sos&uacute;a, Dominican Republic</a></div>
            <div class="item-date emphasis">Spring 2014</div>
            <ul class="item-list">
              <li>Constructed a weather-resistant house for an impoverished family as part of a student team</li>
              <li>Mixed cement, laid bricks and painted the house as part of the outreach project</li>
              <li>Fundraised the whole trip as a student project, dedicating the money to travel, and hiring local contractors</li>
            </ul>
          </div>
          <hr />
          <div class="resume-item">
            <h2>General Compound Volunteer</h2>
            <div class="item-location">Kingston, Jamaica</div>
            <div class="item-date emphasis">Fall 2013</div>
            <ul class="item-list">
              <li>Tasked with bathing and feeding those who were incapable of doing it themselves</li>
              <li>Comforted and supported the mentally ill through games, jokes, and stories</li>
              <li>Swept, washed, and mopped the compounds daily to provide the residents with a clean environment</li>
              <li>Reinforced my passion for charity work, while strengthening my communication skills on an international level</li>
            </ul>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--ACHIEVEMENTS SECTION-->
    <div class="section resume-area" id="achievements">
      <div class="fold-head light">
        <div class="wrap">Achievements</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <div class="resume-item">
            <h2>President's Scholarship</h2>
            <div class="item-location"><a href="https://uwaterloo.ca/" target="_blank">University of Waterloo - Waterloo, ON</a></div>
            <div class="item-date emphasis">Sep 2016</div>
            <div class="item-desc">An entrance scholarship of $2000.00 for incoming students with an admission average greater than &gt;90%</div>
          </div>
          <hr />
          <div class="resume-item">
            <h2>IC Agile Professional Certification</h2>
            <div class="item-location"><a href="https://icagile.com/" target="_blank">International Consortium for Agile</a></div>
            <div class="item-date emphasis">Sep 2018</div>
            <div class="item-desc">A certification given for completing multiple professional training modules/sessions through a certified instructutor pertaining to modern, collaborative Agile development.</div>
          </div>
          <hr />
          <div class="resume-item">
            <h2>10 Days of JS - 5 Stars</h2>
            <div class="item-location"><a href="https://hackerrank.com/leeandher" target="_blank">HackerRank.com</a></div>
            <div class="item-date emphasis">Apr 2018</div>
            <div class="item-desc">Completed all 25 challenges in the skill umbrella to improve my JavaScript capabilities.</div>
          </div>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <!--DETAILS SECTION-->
    <div class="section resume-area" id="details">
      <div class="fold-head light">
        <div class="wrap">Extra Details</div>
      </div>
      <div class="content">
        <div class="resume-info round light text-small">
          <ul>
            <li>People usually don't believe me on this, but this website has <span class="emphasis">no Bootstrap or copy/paste from Bootstrap files</span>; the responsiveness is all me!</li>
            <li>My preferred text-editor right now is <a href="https://atom.io" target="_blank" class="emphasis">Atom</a> by GitHub, mainly because of the built-in Markdown previewing, Git integration, and extensive number of open-source packages (like SASS Compilers, and Auto-Prefixers).</li>
            <li>My favorite programming lanuage is <span class="emphasis">JavaScript</span> for sure, even if it has a bunch of <a class="emphasis" href="https://charlieharvey.org.uk/page/javascript_the_weird_parts" target="_blank">weird quirks</a>.</li>
            <li>I'm a total <span class="emphasis">podcast junkie</span>, I'm subscribed to about 25 as of this moment.</li>
            <li>I am 100% a <span class="emphasis">dog</span> person.</li>
            <li>I'd say I have a good <span class="emphasis">sense of humour</span>. Check out <a class="emphasis" href="../joke/" target="_blank">v0.00001 of this site's homepage</a> that I played around with early January 2018, and see for yourself.</li>
          </ul>
        </div>
        <button class="close-area text-small round">Close Section</button>
      </div>
    </div>

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/inc/footer.php";
      require_once($path);
    ?>

  </body>

</html>
