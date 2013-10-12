    <?php
      $title = "Online Conference Management System";
      $_SESSION["update"] = 0;
      require("header.php")
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li><a href="../index.php"><img class="register-logo" src="../assets/img/logo.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	    <div class="container standard-bar"></div>
      <div class="container register">
        <div>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <p>Welcome to the registration portal for WorldMUN 2014 in Brussels, Belgium. Registration should only be completed once per delegation by a Faculty Advisor or Head Delegate. All delegates registering from the same university must be part of the same delegation.</p>
          <p>Single delegates should register using this system, and may apply for any Specialized Agency committees (besides Security Council and Historical Security Council) or countries that have a membership of one according to the <a class="bold-link" href="../assets/pdfs/WMUN 2014 Country Committee Matrix.pdf" target="_blank">country-committee matrix</a>.</p>
          <p>Observers and members of the media may register via email to <a class="bold-link" href="mailto:info@worldmun.org" target="_blank">info@worldmun.org</a>. Please include your intended purpose and proposed dates of observation.</p>
          <p>Please read all instructions carefully and direct any questions to <a class="bold-link" href="mailto:info@worldmun.org" target="_blank">info@worldmun.org</a>.</p><br/>
          <div class="register-span">
            <div class="register-section">
              <h4><i class="icon-chevron-sign-right"></i> Begin Registration</h4>
              <p>Please create a user account to begin the application process.</p>
              <form action="signup.php" method="post">
                <fieldset>
                  <div class="control-group">
                      <?php
                        if(isset($email) && isset($signup_mode)) {
                          if(empty($email)) {
                            echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                            echo(' <i class="icon-asterisk"></i> required');
                          }
                          else if(isset($invalid_email)) {
                            echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                            echo(' <i class="icon-asterisk"></i> invalid email');
                          }

                          else if(isset($existing_user)) {
                            echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                            echo(' <i class="icon-asterisk"></i> already registered');
                          }

                          else {
                            echo('<input name="email" placeholder="Email" type="text" value='.htmlspecialchars($email).' autocomplete="off"/>');
                          }
                        }
                        else {
                          echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                        }
                      ?>
                  </div>
                  <div class="control-group">
                      <?php
                        echo('<input name="password" placeholder="Password" type="password"/>');
                        if(isset($password) && isset($signup_mode)) {
                          echo(' <i class="icon-asterisk"></i>');
                          if (isset($match)) {
                            echo(' password');
                          }
                          else {
                            echo(' required');
                          }
                        }
                      ?>
                  </div>
                  <div class="control-group">
                      <?php
                        echo('<input name="confirm" placeholder="Confirm password" type="password"/>');
                        if(isset($confirm) && isset($signup_mode)) {
                          echo(' <i class="icon-asterisk"></i>');
                          if (isset($match)) {
                            echo(' mismatch');
                          }
                          else {
                            echo(' required');
                          }
                        }
                      ?>
                  </div>
                  <div class="control-group">
                      <button type="submit" class="btn btn-custom">Sign Up</button>
                  </div>
                </fieldset>
              </form>
            </div>
            <div class="register-section">
              <h4><i class="icon-chevron-sign-right"></i> Existing User</h4>
              <p>Please login here to view or update your information, make payments, and purchase social packages and trips.</p>
              <form action="login.php" method="post">
                <fieldset>
                  <div class="control-group">
                      <?php
                        if(isset($email) && isset($login_mode)) {
                          if(empty($email)) {
                            echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                            echo(' <i class="icon-asterisk"></i> required');
                          }
                          else {
                            echo('<input name="email" placeholder="Email" type="text" value='.htmlspecialchars($email).' autocomplete="off"/>');
                          }
                        }
                        else {
                          echo('<input name="email" placeholder="Email" type="text" autocomplete="off"/>');
                        }

                        if(isset($inexistent_user)) {
                          echo(' <i class="icon-asterisk"></i> inexistent user');
                        }
                      ?>
                  </div>
                  <div class="control-group">
                      <?php
                        echo('<input name="password" placeholder="Password" type="password"/>');
                        if(isset($password) && isset($login_mode)) {
                          echo(' <i class="icon-asterisk"></i>');
                          if (isset($wrong_password)) {
                            echo(' wrong password');
                          }
                          else {
                            echo(' required');
                          }
                        }
                      ?>
                  </div>
                  <p>Forgot your password? Contact us at <a class="bold-link" href="mailto:info@worldmun.org" target="_blank">info@worldmun.org</a> and we will help you retrieve it.</p>
                  <div class="control-group">
                      <button type="submit" class="btn btn-custom">Log In</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div> <!-- Body ends -->
	<?php require("footer.php") ?>
