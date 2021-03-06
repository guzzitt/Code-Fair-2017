<?php
  ob_start();
  include 'phpscript/sign_up.php';
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>2017 Code Fair | Staff hour of  code</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/code_fair.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type="text/css" href="css/event.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body class="main-bgimg">
  <header class="u-clearfix">

      <input class="cb-toggle" type="checkbox" id="cbMenu">

      <label for="cbMenu" class="menu-icon">
    <i class="fa fa-fw fa-lg"></i>
          <span>MENU</span>
  </label>

      <div class="c-logo">
        <a href="http://cdu.edu.au">
            <img class="c-cdu-logo__img" src="images/cdu-logo.png" alt="Code Fair Logo">
        </a>
          <a href="index.html">
              <img class="c-logo__img" src="images/logo.png" alt="Code Fair Logo">
          </a>
      </div>

      <nav class="menu">
          <div class="menu__link">
              <a href="index.html" title="Home">Code Fair 2017</a>
          </div>
          <div class="menu__link">
              <a href="competition.html">
                  <span>Competitions</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="competitions">
                  <a href="competition.html#business-innovation-challenge">Business Innovation Challenge</a>
                  <a href="competition.html#coding-challenge">Coding Challenge</a>
                  <a href="competition.html#networking-challenge">Networking Challenge</a>
                  <a href="competition.html#poster-challenge">Poster Challenge</a>
              </div>
          </div>
          <div class="menu__link">
              <a href="event.html">
                  <span>Events</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="events">
                  <a href="event.html#academic-excellence-awards">Academic Excellence Awards</a>
                  <a href="event.html#hour-of-code-wokshops">Hour of Code Workshops</a>
                  <a href="event.html#employer-speed-dating">Employer Speed Dating</a>
              </div>
          </div>
          <div class="menu__link">
                <a href="for-schools.html" title="For School">  <span>For Schools</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content" id="for_schools">
                  <a href="for-schools.html#events-schools-can-participate-in">Events Schools Can Participate In</a>
                  <a href="for-schools.html#hour-of-code-workshops">Hour of Code Workshops</a>
                  <a href="for-schools.html#coding-workshop-for-school">Coding Workshops</a>
                      </div>
                  

            </div>
            <div class="menu__link">
                <a href="for-industry.html" title="For Industry">  <span>For Industry</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content" id="for_industry">
                  <a href="for-industry.html#code-fair-for-industry">Code Fair For Industry</a>
                  <a href="for-industry.html#get-involved-industry">Get Involved</a>
                  <a href="for-industry.html#competitions-industry">Competitions</a>
                  <a href="for-industry.html#employer-speed-dating">Employer Speed Dating</a>
                   </div>
                  
          </div>

          <div class="menu__link">
              <a href="about.html">
                  <span>About</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="about">
                  <a href="about.html">Photo Galleries</a>
                  <a href="#">IT Code Fair 2016</a>
                  <a href="#">IT Code Fair 2015</a>
                  <a href="#">IT Code Fair 2014</a>
              </div>
          </div>
      </nav>

  </header>

    <main>

    <div class="registration_form">
    <h1>Staff Hour of Code</h1>
     <div class=" event-description">
        <p>An hour of Code workshop will be held for CDU staff as part of the IT Business and Code Fair. If you would like to come to the staff workshop, please register below.</p>
        <p><b>Disclaimer:</b> This is only an expression of interest. Since our available slots are limited there is no guarantee for you to book a place at this stage. After receiving all EOIs (1 month prior to the event) depending on our available resources we will send an outlook invite to candidates based on their EOI date. </p>
    </div>
        <form action='<?php StaffHOCsignup(); ?>' method='POST'>
        <h2>Register</h2>
        <fieldset class="personal-info">
            <h3>Who are you?</h3>
            <div class="form-group">
                <label for="Staff-HOC-First-Name">First Name</label>
                <input type="text" class="form-control" id="Staff-HOC-First-Name" placeholder="First Name" name="StaffHOC-First-Name" required>
                <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'Error=First_Name_Invalid')){
                   echo "<p class='ErrorMessage'>Please, fill first name correctly.</p>";
                }
                 ?>
            </div>
            <div class="form-group">
                <label for="Staff-HOC-Family-Name">Family Name</label>
                <input type="text" class="form-control" id="Staff-HOC-Family-Name" placeholder="Family Name" name="StaffHOC-Family-Name" required>
                <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'Error=family_Name_Invalid')){
                   echo "<p class='ErrorMessage'>Please, fill family name correctly.</p>";
                }
                 ?>
            </div>
            <div class="form-group">
                <label for="Staff-HOC-Email">Email Address</label>
                <input type="email" class="form-control" id="Staff-HOC-Email" placeholder="Email Address" name="StaffHOC-Email" required>
                <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'Error=EmailAddress_Invalid')){
                   echo "<p class='ErrorMessage' >Please, Enter email correctly.</p>";
                }
                 ?>
            </div>
            <div class="form-group">
                <label for="Staff-HOC-Phone">Phone Number</label>
                <input type="text" class="form-control" id="Staff-HOC-Phone" placeholder="Phone Number" name="StaffHOC-Phone" required>
                <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'Error=Phone_Number_Invalid')){
                   echo "<p class='ErrorMessage' >Please, Enter Valid Phone Number.</p>";
                }
                 ?>
            </div>
            <div class="form-group">
                <label for="StaffHOC-Work-Position">Where do you work at CDU?</label>
                <input type="text" class="form-control" id="Staff-HOC-Work-Position" placeholder="Position" name="StaffHOC-Work-Position" required>
                <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'Error=Work_Position_Invalid')){
                   echo "<p class='ErrorMessage' >Please, Enter Valid Work Position.</p>";
                }
                 ?>
            </div>
        </fieldset>

        <fieldset class="year-options">
            <label for="staff-options">What would you like to learn?</label>
            <div id="staff-options">
                <div class="checkbox">
                    <label><input name="HOC-Student-level" type="checkbox" value="year-8">Year 8</label>
                </div>
                <div class="checkbox">
                    <label><input name="HOC-Student-level" type="checkbox" value="year-9">Year 9</label>
                </div>
                <div class="checkbox">
                    <label><input  name="HOC-Student-level" type="checkbox" value="year-10">Year 10</label>
                </div>
                <div class="checkbox">
                    <label><input name="HOC-Student-level" type="checkbox" value="year-11">Year 11</label>
                </div>
                <div class="checkbox">
                    <label><input name="HOC-Student-level" type="checkbox" value="year-12">Year 12</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="nominated-students">
            <label for="number-of-students">Number of nominated students in each group</label>
            <input type="number" class="form-control" id="number-of-students" min='1' name="HOC-Student-Count-Nominated" value="1">
        </fieldset>
        <fieldset class="time-slot">
            <label for="preferred-time-slot">Preferred time slot</label>
            <div id="entry-info-radio-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="preferred-time-slot" id="optionsRadios17" value="9am" checked>
                        9am
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="preferred-time-slot" id="optionsRadios18" value="10am">
                        10am
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="preferred-time-slot" id="optionsRadios19" value="11am">
                        11am
                    </label>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-default" name="StaffHOCsubmit">Submit</button>
    </form>
</div>
        <section class="sponsor">
            <h2>OUR PROUD SPONSOR</h2>
            <div class="sponsor-wrapper">
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/acs.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/aspl.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/cap.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dash.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dialog.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dolphin.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/ict.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/jackadder.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/kinetic.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/nec.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/ntg.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/radical.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/blab.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/rds.png" alt="NT-Government logo">
                    </a>
                </div>

            </div>
        </section>

        <section class="bottom-nav">
            <div class="bottom-nav-wrapper">
                <div class="bottom-link-container">
                    <h3>COMPETITIONS</h3>
                    <ul>
                        <li><a href="competition.html#business-innovation-challenge">Business Innovation Challenge</a></li>
                        <li><a href="competition.html#coding-challenge">Coding Challenge</a></li>
                        <li><a href="competition.html#networking-challenge">Networking Challenge</a></li>
                        <li><a href="competition.html#poster-challenge">Poster Challenge</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>EVENTS</h3>
                    <ul>
                        <li><a href="event.html#academic-excellence-awards">Acedemic Excellence Reward</a></li>
                        <li><a href="event.html#hour-of-code-workshops">Hour of Code Workshops</a></li>
                        <li><a href="event.html#employer-speed-dating">Employer Speed Dating</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>FOR SCHOOLS</h3>
                    <ul>
                        <li><a href="for-schools.html#events-schools-can-participate-in">Events Schools Can Participate In</a></li>
                        <li><a href="for-schools.html#hour-of-code-workshops">Hour of Code Workshops</a></li>
                        <li><a href="for-schools.html#coding-workshop-for-school">Coding Workshops</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>FOR INDUSTRY</h3>
                    <ul>
                        <li><a href="for-industry.html#code-fair-for-industry">Code Fair For Industry</a></li>
                        <li><a href="for-industry.html#get-involved-industry">Get Involved</a></li>
                        <li><a href="for-industry.html#competitions-industry">Competitions</a></li>
                        <li><a href="for-industry.html#employer-speed-dating">Employer Speed Dating</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>ABOUT</h3>
                    <ul>
                        <li><a href="#">Photo Galleries</a></li>
                        <li><a href="#">IT Code Fair 2016</a></li>
                        <li><a href="#">IT Code Fair 2015</a></li>
                        <li><a href="#">IT Code Fair 2014</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>CONTACT</h3>
                    <ul>
                        <li><a href="#">Business Innovation Challenge</a></li>
                        <li><a href="#">Coding Challenge</a></li>
                        <li><a href="#">Networking Challenge</a></li>
                        <li><a href="#">Poster Challenge</a></li>
                    </ul>
                </div>
            </div>

        </section>


        <footer><span class="legend">SOMETHING &copy;</span>
            <div class="menu__social">
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-facebook"></i></a>
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-twitter"></i></a>
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-linkedin"></i></a>
            </div>
        </footer>

    </main>
    <script src="js/main.js"></script>
</body>

</html>
