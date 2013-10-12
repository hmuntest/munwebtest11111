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
      <div class="container admin">
        <div>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Admin Page</h4>
          <hr class="title-section"/>
          <div class="admin-section">
          <h4><i class="icon-chevron-sign-right"></i> Admin access</h4>
          <form action="admin-login.php" method="post">
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
              <div class="control-group">
                  <?php
                    if(isset($access_user) && isset($login_mode)) {
                      if(empty($access_user)) {
                        echo('<input name="access_user" placeholder="Access User" type="text" autocomplete="off"/>');
                        echo(' <i class="icon-asterisk"></i> required');
                      }
                      else {
                        echo('<input name="access_user" placeholder="Access User" type="text" value='.htmlspecialchars($access_user).' autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="access_user" placeholder="Access User" type="text" autocomplete="off"/>');
                    }

                    if(isset($inexistent_user)) {
                      echo(' <i class="icon-asterisk"></i> inexistent user');
                    }
                  ?>
              </div>
              <div class="control-group">
                  <button type="submit" class="btn btn-custom">Log In</button>
              </div>
            </fieldset>
          </form>
          </div>
        </div>
      </div> <!-- Body ends -->
	<?php require("footer.php") ?>
