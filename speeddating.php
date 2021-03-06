<?php
  ob_start();
  include 'phpscript/sign_up.php';
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>2017 Code Fair | SpeedDating Hour of Code</title>

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
    <h1>Speed Dating</h1>
    <div class="event-description">
        <h2>Disclaimer</h2>
        <p>20 places are available for speed dating. Preference is given to students in the final year of their degrees.</p>
        <p>A condition of entry to the Employer Speed Dating is attendance at a workshop the day prior to prepare for the event and receive feedback on your CV.</p>
        <p>Students who attend this event must:</p>
        <ul>
            <li>be professionally dressed (you can wear Code Fair Tshirts)</li>
            <li>have completed a one page document on acceptance of your registration which is forwarded in advance to employers</li>
            <li>have attended the preparation workshop</li>
        </ul>
    </div>
        <form action='<?php SpeedDatingsignup(); ?>' method='POST'>
        <h2>Register</h2>
        <fieldset class="personal-info">
            <label for="personal-info-radio-group">Who are you?</label>
            <div id="personal-info-radio-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="speeddating-catg-option-Radios" class="check" id="optionsRadios12" value="option1" checked>
                        Individual/Student
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="speeddating-catg-option-Radios" class="check2" id="optionsRadios13" value="option2">
                        Industry professional
                    </label>
                </div>
            </div>
        </fieldset>
        <fieldset class="student-details">
            <label>Student details</label>
            <div class="student-options">
                <div class="form-group">
                    <label for="SD-Student-Number">Student Number</label>
                    <input type="text" name="SD-Student-Number" class="form-control required-check" id="SD-Student-Number" placeholder="Student Number">
                </div>
                <div class="form-group">
                    <label for="SD-Course">Current Course</label>
                    <select class="form-control" name="SD-Course" id="SD-Course">
                        <option>Diploma of Network Engineering</option>
                        <option>MIT</option>
                        <option>MITSE</option>
                        <option>BSENG</option>
                        <option>BCAINM</option>
                        <option>BIT</option>
                        <option>Cert IV Computer Systems</option>
                        <option>BIS</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <fieldset class="business-details">
            <label for="business-options">Business Details</label>
            <div id="business-options">
                <div class="form-group">
                    <input type="text" name="SD-BusinessName" class="form-control required-check2" name="SpeedDating-First-Name" id="SD-Business-Name" placeholder="Business Name">
                </div>
                <div class="form-group">
                    <input type="text" name="SD-BusinessPosition" class="form-control required-check2" name="SpeedDating-Family-Name" id="SD-Business-Position" placeholder="Position at business">
                </div>
                <p>More than one representative from each industry is welcomed. Industry members can participate in both categories if appropriate.</p>
                <label for="BusinessRelevantCatg">Relevant category</label>
                <div class="checkbox">
                    <label><input name="BusinessRelevantCatg" type="checkbox" value="software-development">Software development</label>
                </div>
                <div class="checkbox">
                    <label><input name="BusinessRelevantCatg" type="checkbox" value="networking">Networking</label>
                </div>
                <div class="checkbox">
                    <label><input name="BusinessRelevantCatg" type="checkbox" value="support">Support</label>
                </div>
            </div>
        </fieldset>
        <div class="ErrorMessagewrap">
          <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
       if(strpos($url,'Error=Student_Number_Invalid')){
           echo "<p class='ErrorMessage'>Please, Enter correct Student Number.</p>";
        }
        elseif(strpos($url,'Error=Business_name_Invalid')){
            echo "<p class='ErrorMessage'>Please, Enter Business Name correctly.</p>";
        }
          elseif (strpos($url,'Error=Business_position_Invalid')){
              echo "<p class='ErrorMessage'>Please, Enter your position in Business correctly.</p>";
          }
        ?>
      </div>
        <fieldset class="personal-info">
            <legend>Your details</legend>
            <div class="form-group">
                <label for="SpeedDating-First-Name">First Name</label>
                <input type="text" name="SpeedDating-First-Name" class="form-control" id="SD-First-Name" placeholder="First Name" required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=First_Name_Invalid')){
                     echo "<p class='ErrorMessage'>Please, fill first name correctly.</p>";
                  }
                 ?>
            </div>
            <div class="form-group">
                <label for="SpeedDating-Family-Name">Family Name</label>
                <input type="text" name="SpeedDating-Family-Name" class="form-control" id="SD-Family-Name" placeholder="Family Name" required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=Family_Name_Invalid')){
                    echo "<p class='ErrorMessage'>Please, fill family name correctly.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="SpeedDating-Email">Email Address</label>
                <input type="email" name="SpeedDating-Email" class="form-control" id="SD-Email" placeholder="Email Address" required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=EmailAddress_Invalid')){
                    echo "<p class='ErrorMessage' >Please, Enter email correctly.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="SpeedDating-Phone">Phone Number</label>
                <input type="text" name="SpeedDating-Phone" class="form-control" id="SD-Phone" placeholder="Phone Number" required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=Phone_Number_Invalid')){
                    echo "<p class='ErrorMessage' >Please, Enter Valid Phone Number.</p>";
                 }
                 ?>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-default" name="SpeedDatingsubmit">Submit</button>
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


        <footer><span class="legend">SOMETHING &copy</span>
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
