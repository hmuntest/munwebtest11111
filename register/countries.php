    <?php
      if (!$_SESSION) {
        // configuration
        require("../includes/config.php");
      }

      if(!isset($_SESSION["id"])) {
        require("index.php");
        exit;
      }

      $title = "Online Conference Management System";
      require("header.php");
      require("logged-countries.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li class="top-bar"><a href="info.php">BASIC INFO</a></li>
            <li class="top-bar active"><a class="active" href="countries.php">COUNTRIES</a></li>
            <li class="top-bar"><a href="sa.php">S.A.</a></li>
            <li><img class="logo" src="../assets/img/logo.png"></li>
            <li class="top-bar"><a href="general.php">GENERAL</a></li>
            <li class="top-bar"><a href="review.php">REVIEW</a></li>
            <li class="top-bar"><a href="index.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	    <div class="container standard-bar"></div>
      <div class="container countries">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <h3 class="title-section">Country Preferences</h3>
          <p>Please consult the <a class="bold-link" href="../assets/pdfs/WMUN 2014 Country Committee Matrix.pdf" target="_blank">Country/Committee Matrix</a> and rank ten countries that are equal to or less than your delegation size that you would like to represent. Often, delegations are assigned two or more countries in order to reach the listed delegation size. You may not rank more than two countries from the following list: China, France, Russia, United Kingdom, and United States. WorldMUN cannot guarantee a particular country assignment for any reason. Please make sure not to choose the same country more than once or invalid countries.</p><br/>
          <form action="countries-info.php" method="post">
            <fieldset>
              <div class="control-group">
                  <?php
                    if(isset($country_1)) {
                      if(empty($country_1)) {
                        echo('<input name="country_1" placeholder="Country 1" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_1" placeholder="Country 1" type="text" value="'.htmlspecialchars($country_1).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_1" placeholder="Country 1" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_2)) {
                      if(empty($country_2)) {
                        echo('<input name="country_2" placeholder="Country 2" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_2" placeholder="Country 2" type="text" value="'.htmlspecialchars($country_2).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_2" placeholder="Country 2" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_3)) {
                      if(empty($country_3)) {
                        echo('<input name="country_3" placeholder="Country 3" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_3" placeholder="Country 3" type="text" value="'.htmlspecialchars($country_3).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_3" placeholder="Country 3" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_4)) {
                      if(empty($country_4)) {
                        echo('<input name="country_4" placeholder="Country 4" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_4" placeholder="Country 4" type="text" value="'.htmlspecialchars($country_4).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_4" placeholder="Country 4" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_5)) {
                      if(empty($country_5)) {
                        echo('<input name="country_5" placeholder="Country 5" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_5" placeholder="Country 5" type="text" value="'.htmlspecialchars($country_5).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_5" placeholder="Country 5" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_6)) {
                      if(empty($country_6)) {
                        echo('<input name="country_6" placeholder="Country 6" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_6" placeholder="Country 6" type="text" value="'.htmlspecialchars($country_6).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_6" placeholder="Country 6" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_7)) {
                      if(empty($country_7)) {
                        echo('<input name="country_7" placeholder="Country 7" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_7" placeholder="Country 7" type="text" value="'.htmlspecialchars($country_7).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_7" placeholder="Country 7" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_8)) {
                      if(empty($country_8)) {
                        echo('<input name="country_8" placeholder="Country 8" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_8" placeholder="Country 8" type="text" value="'.htmlspecialchars($country_8).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_8" placeholder="Country 8" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_9)) {
                      if(empty($country_9)) {
                        echo('<input name="country_9" placeholder="Country 9" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_9" placeholder="Country 9" type="text" value="'.htmlspecialchars($country_9).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_9" placeholder="Country 9" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <?php
                    if(isset($country_10)) {
                      if(empty($country_10)) {
                        echo('<input name="country_10" placeholder="Country 10" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country_10" placeholder="Country 10" type="text" value="'.htmlspecialchars($country_10).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country_10" placeholder="Country 10" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                </div>
              <div class="control-group">
                  <button type="submit" class="btn btn-custom">Save and continue</button>
              </div>
            </fieldset>
          </form>
          </div>
      </div> <!-- Body ends -->
  <?php require("footer.php") ?>